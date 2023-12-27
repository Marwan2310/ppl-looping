<?php

namespace App\Http\Controllers;

// use App\Models\official;
use App\Models\pemain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = pemain::orderBy('id')->paginate(5);
        return view('admin')->with('data', $data);
    }

    public function caripemain(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('searchadmin');

        // Initialize the query builder
        $query = Pemain::orderBy('id');

        // If a search query exists, filter the results
        if ($searchQuery) {
            $query->where('nama', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('posisi', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('klub', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('status', 'LIKE', '%' . $searchQuery . '%');
        }

        // Retrieve paginated data based on the query
        $data = $query->paginate(5);

        // Pass the data to the view
        return view('admin')->with('data', $data);
    }

    public function pemain(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('search');

        // Initialize the query builder
        $query = Pemain::orderBy('id');

        // If a search query exists, filter the results
        if ($searchQuery) {
            $query->where('nama', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('posisi', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('klub', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('status', 'LIKE', '%' . $searchQuery . '%');
        }

        // Retrieve paginated data based on the query
        $data = $query->paginate(5);

        // Pass the data to the view
        return view('/sanksi/pemain')->with('data', $data);
    }



    public function sanksipemain($id)
    {
        $data = pemain::where('id', $id)->first();

        if ($data) {
            return view('pemain.sanksipemain')->with('data', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function sanksiprosespemain($id)
    {
        $data = pemain::where('id', $id)->first();

        if ($data) {
            return view('pemain.sanksiprosespemain')->with('data', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function sanksihistoripemain($id)
    {
        $data = pemain::where('id', $id)->first();

        if ($data) {
            return view('pemain.sanksihistoripemain')->with('data', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }





    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }


    public function create()
    {
        return view('pemain/create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'kategori' => 'required',
            'posisi' => 'required',
            'klub' => 'required',
            'tanggal' => 'required',
            'pertandingan' => 'required',
            'pelanggaran' => 'required',
            'sanksi' => 'required',
            'batas' => 'required',
            'status' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'usia.required' => 'Usia wajib diisi',
            'kategori.required' => 'Kategori wajib diisi',
            'posisi.required' => 'Posisi wajib diisi',
            'klub.required' => 'Klub wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'pertandingan.required' => 'Pertandingan wajib diisi',
            'pelanggaran.required' => 'Pelanggaran wajib diisi',
            'sanksi.required' => 'sanksi wajib diisi',
            'batas.required' => 'Batas wajib diisi',
            'status.required' => 'Status wajib diisi',
            'foto.required' => 'Silahkan Masukan foto',
            'foto.mimes' => 'Hanya Berupa JPEG, JPG, PNG, dan GIF',

        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'nama' => $request->input('nama'),
            'usia' => $request->input('usia'),
            'kategori' => $request->input('kategori'),
            'posisi' => $request->input('posisi'),
            'klub' => $request->input('klub'),
            'tanggal' => $request->input('tanggal'),
            'pertandingan' => $request->input('pertandingan'),
            'pelanggaran' => $request->input('pelanggaran'),
            'sanksi' => $request->input('sanksi'),
            'batas' => $request->input('batas'),
            'status' => $request->input('status'),
            'foto' => $foto_nama,
        ];

        $data = pemain::create($data);
        if ($data) {
            return redirect('admin')->with('success', 'Data Berhasil di Tambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = pemain::where('id', $id)->first();

        if ($data) {
            return view('show')->with('data', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function edit($id)
    {
        //
        $data = pemain::where('id', $id)->first();

        if ($data) {
            return view('/edit')->with('data', $data);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi umum
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'kategori' => 'required',
            'klub' => 'required',
            'tanggal' => 'required',
            'pertandingan' => 'required',
            'pelanggaran' => 'required',
            'sanksi' => 'required',
            'batas' => 'required',
            'status' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'usia.required' => 'Usia wajib diisi',
            'kategori.required' => 'Kategori Wajib diisi',
            'klub.required' => 'Klub wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'pertandingan.required' => 'Pertandingan wajib diisi',
            'pelanggaran.required' => 'Pelanggaran wajib diisi',
            'sanksi.required' => 'Sanksi wajib diisi',
            'batas.required' => 'Batas akhir wajib diisi',
            'status.required' => 'Status wajib diisi',
        ]);

        $data = [
            // Tangkap input dari form
            'nama' => $request->input('nama'),
            'usia' => $request->input('usia'),
            'kategori' => $request->input('kategori'),
            'klub' => $request->input('klub'),
            'tanggal' => $request->input('tanggal'),
            'pertandingan' => $request->input('pertandingan'),
            'pelanggaran' => $request->input('pelanggaran'),
            'sanksi' => $request->input('sanksi'),
            'batas' => $request->input('batas'),
            'status' => $request->input('status'),
        ];

         if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'foto.mimes' => 'Hanya Berupa JPEG, JPG, PNG, dan GIF',
            ]);

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            // Hapus foto lama jika ada
            $data_foto = pemain::where('id', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto);

            $data['foto'] = $foto_nama;

        }

        // Update data
        // official::where('id', $id)->update($data_official);
        pemain::where('id', $id)->update($data);

        return redirect('admin')->with('success', 'Data Berhasil di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = pemain::where('id', $id)->first();
        if ($data) {
            File::delete(public_path('foto') . '/' . $data->foto);
            pemain::where('id', $id)->delete();
            return redirect('admin')->with('success', 'Data Berhasil di Hapus');
        }
    }
}
