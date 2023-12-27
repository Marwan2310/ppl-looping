<?php

namespace App\Http\Controllers;

use App\Models\wasit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WasitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_wasit = wasit::orderBy('id')->paginate(5); // Mengambil data dari model wasit

        return view('adminwasit')->with('data_wasit', $data_wasit);
    }


    public function create()
    {
        // Handle the view for creating an wasit
        return view('wasit/create');
    }



    public function cariwasit(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('search');

        // Initialize the query builder
        $query = wasit::orderBy('id');

        // If a search query exists, filter the results
        if ($searchQuery) {
            $query->where('nama_wasit', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('status_Wasit', 'LIKE', '%' . $searchQuery . '%');
        }

        // Retrieve paginated data based on the query
        $data_wasit = $query->paginate(5);

        // Pass the data to the view
        return view('/adminwasit')->with('data_wasit', $data_wasit);
    }




    public function wasit(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('search');

        // Initialize the query builder
        $query = wasit::orderBy('id');

        // If a search query exists, filter the results
        if ($searchQuery) {
            $query->where('nama_wasit', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('status_wasit', 'LIKE', '%' . $searchQuery . '%');
        }

        // Retrieve paginated data based on the query
        $data_wasit= $query->paginate(5);

        // Pass the data to the view
        return view('/wasitsanksi/wasit')->with('data_wasit', $data_wasit);
    }


    public function sanksiwasit($id)
    {
        $data_wasit = wasit::where('id', $id)->first();

        if ($data_wasit) {
            return view('wasitsanksi.sanksiwasit')->with('data_wasit', $data_wasit);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function sanksiproseswasit($id)
    {
        $data_wasit = wasit::where('id', $id)->first();

        if ($data_wasit) {
            return view('wasitsanksi.sanksiproseswasit')->with('data_wasit', $data_wasit);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function sanksihistoriwasit($id)
    {
        $data_wasit = wasit::where('id', $id)->first();

        if ($data_wasit) {
            return view('wasitsanksi.sanksihistoriwasit')->with('data_wasit', $data_wasit);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }




    public function store(Request $request)
    {
        $request->validate([

            'nama_wasit' => 'required',
            'usia_wasit' => 'required',
            'tanggal_wasit' => 'required',
            'pertandingan_wasit' => 'required',
            'pelanggaran_wasit' => 'required',
            'sanksi_wasit' => 'required',
            'batas_wasit' => 'required',
            'status_wasit' => 'required',
            'foto_wasit' => 'required|mimes:jpeg,jpg,png,gif',
        ], [
            'nama_wasit.required' => 'Nama wasit wajib diisi',
            'usia_wasit.required' => 'Usia wasit wajib diisi',
            'tanggal_wasit.required' => 'Tanggal wasit wajib diisi',
            'pertandingan_wasit.required' => 'Pertandingan wasit wajib diisi',
            'pelanggaran_wasit.required' => 'Pelanggaran wasit wajib diisi',
            'sanksi_wasit.required' => 'Sanksi wasit wajib diisi',
            'batas_wasit.required' => 'Batas wasit wajib diisi',
            'status_wasit.required' => 'Status wasit wajib diisi',
            'foto_wasit.required' => 'Silahkan Masukan foto',
            'foto_wasit.mimes' => 'Hanya Berupa JPEG, JPG, PNG, dan GIF',

        ]);

        $foto_file = $request->file('foto_wasit');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto_wasit'), $foto_nama);


        $data_wasit = [
            'nama_wasit' => $request->input('nama_wasit'),
            'usia_wasit' => $request->input('usia_wasit'),
            'tanggal_wasit' => $request->input('tanggal_wasit'),
            'pertandingan_wasit' => $request->input('pertandingan_wasit'),
            'pelanggaran_wasit' => $request->input('pelanggaran_wasit'),
            'sanksi_wasit' => $request->input('sanksi_wasit'),
            'batas_wasit' => $request->input('batas_wasit'),
            'status_wasit' => $request->input('status_wasit'),
            'foto_wasit' => $foto_nama, // Make sure to handle this properly for 'foto_wasit' if needed
        ];

        $data_wasit = wasit::create($data_wasit);



        if ($data_wasit) {
            return redirect('/adminwasit')->with('success', 'Data Berhasil di Tambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data');
        }
    }


    public function show($id)
    {

        $data_wasit = wasit::where('id', $id)->first();

        if ($data_wasit) {
            return view('showwasit')->with('data_wasit', $data_wasit);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }



    public function edit($id)
    {

        $data_wasit = wasit::where('id', $id)->first();

        if ($data_wasit) {
            return view('editwasit')->with('data_wasit', $data_wasit);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }


    public function update(Request $request, $id)
    {
        // Validasi umum
        $request->validate([
            'nama_wasit' => 'required',
            'usia_wasit' => 'required',
            'tanggal_wasit' => 'required',
            'pertandingan_wasit' => 'required',
            'pelanggaran_wasit' => 'required',
            'sanksi_wasit' => 'required',
            'batas_wasit' => 'required',
            'status_wasit' => 'required',
        ], [
            'nama_wasit.required' => 'Nama wasit wajib diisi',
            'usia_wasit.required' => 'Usia wasit wajib diisi',
            'tanggal_wasit.required' => 'Tanggal wasit wajib diisi',
            'pertandingan_wasit.required' => 'Pertandingan wasit wajib diisi',
            'pelanggaran_wasit.required' => 'Pelanggaran wasit wajib diisi',
            'sanksi_wasit.required' => 'Sanksi wasit wajib diisi',
            'batas_wasit.required' => 'Batas wasit wajib diisi',
            'status_wasit.required' => 'Status wasit wajib diisi',


        ]);


        $data_wasit = [
            // Tangkap input dari form
            'nama_wasit' => $request->input('nama_wasit'),
            'usia_wasit' => $request->input('usia_wasit'),
            'tanggal_wasit' => $request->input('tanggal_wasit'),
            'pertandingan_wasit' => $request->input('pertandingan_wasit'),
            'pelanggaran_wasit' => $request->input('pelanggaran_wasit'),
            'sanksi_wasit' => $request->input('sanksi_wasit'),
            'batas_wasit' => $request->input('batas_wasit'),
            'status_wasit' => $request->input('status_wasit'),
        ];

        if ($request->hasFile('foto_wasit')) {
            $request->validate([
                'foto_wasit' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'foto_wasit.mimes' => 'Hanya Berupa JPEG, JPG, PNG, dan GIF',
            ]);

            $foto_file = $request->file('foto_wasit');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto_wasit'), $foto_nama);

            // Hapus foto lama jika ada
            $data_foto = wasit::where('id', $id)->first();
            File::delete(public_path('foto_wasit') . '/' . $data_foto->foto);

            $data_wasit['foto_wasit'] = $foto_nama;
        }

        wasit::where('id', $id)->update($data_wasit);

        return redirect('adminwasit')->with('success', 'Data Berhasil di Perbaharui');
    }


    public function destroy($id)
    {

        $data_wasit = wasit::where('id', $id)->first();
        if ($data_wasit) {
            File::delete(public_path('foto') . '/' . $data_wasit->foto);
            wasit::where('id', $id)->delete();
            return redirect('adminwasit')->with('success', 'Data Berhasil di Hapus');
        }

        return redirect('adminwasit')->with('error', 'Data tidak ditemukan');
    }
}
