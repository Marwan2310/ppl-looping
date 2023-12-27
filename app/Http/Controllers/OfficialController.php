<?php

namespace App\Http\Controllers;

use App\Models\official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_official = official::orderBy('id')->paginate(5); // Mengambil data dari model official

        return view('adminofficial')->with('data_official', $data_official);
    }


    public function create()
    {
        // Handle the view for creating an official
        return view('official/create');
    }

    public function cariofficial(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('search');

        // Initialize the query builder
        $query = official::orderBy('id');

        // If a search query exists, filter the results
        if ($searchQuery) {
            $query->where('nama_official', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('klub_official', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('status_official', 'LIKE', '%' . $searchQuery . '%');
        }

        // Retrieve paginated data based on the query
        $data_official = $query->paginate(5);

        // Pass the data to the view
        return view('/adminofficial')->with('data_official', $data_official);
    }




    public function officialm(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('search');

        // Initialize the query builder
        $query = official::orderBy('id');

        // If a search query exists, filter the results
        if ($searchQuery) {
            $query->where('nama_official', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('klub_official', 'LIKE', '%' . $searchQuery . '%')
                  ->orWhere('status_official', 'LIKE', '%' . $searchQuery . '%');
        }

        // Retrieve paginated data based on the query
        $data_official = $query->paginate(5);

        // Pass the data to the view
        return view('/officialsanksi/officialm')->with('data_official', $data_official);
    }


    public function sanksiofficial($id)
    {
        $data_official = official::where('id', $id)->first();

        if ($data_official) {
            return view('officialsanksi.sanksiofficial')->with('data_official', $data_official);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }



    public function sanksihistoriofficial($id)
    {
        $data_official = official::where('id', $id)->first();

        if ($data_official) {
            return view('officialsanksi.sanksihistoriofficial')->with('data_official', $data_official);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function sanksiprosesofficial($id)
    {
        $data_official = official::where('id', $id)->first();

        if ($data_official) {
            return view('officialsanksi.sanksiprosesofficial')->with('data_official', $data_official);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }





    public function store(Request $request)
    {
        $request->validate([

            'nama_official' => 'required',
            'usia_official' => 'required',
            'kategori_official' => 'required',
            'klub_official' => 'required',
            'tanggal_official' => 'required',
            'pertandingan_official' => 'required',
            'pelanggaran_official' => 'required',
            'sanksi_official' => 'required',
            'batas_official' => 'required',
            'status_official' => 'required',
            'foto_official' => 'required|mimes:jpeg,jpg,png,gif',
        ], [
            'nama_official.required' => 'Nama Official wajib diisi',
            'usia_official.required' => 'Usia Official wajib diisi',
            'kategori_official.required' => 'Kategori Official wajib diisi',
            'klub_official.required' => 'Klub Official wajib diisi',
            'tanggal_official.required' => 'Tanggal Official wajib diisi',
            'pertandingan_official.required' => 'Pertandingan Official wajib diisi',
            'pelanggaran_official.required' => 'Pelanggaran Official wajib diisi',
            'sanksi_official.required' => 'Sanksi Official wajib diisi',
            'batas_official.required' => 'Batas Official wajib diisi',
            'status_official.required' => 'Status Official wajib diisi',
            'foto_official.required' => 'Silahkan Masukan foto',
            'foto_official.mimes' => 'Hanya Berupa JPEG, JPG, PNG, dan GIF',

        ]);

        $foto_file = $request->file('foto_official');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto_official'), $foto_nama);


        $data_official = [
            'nama_official' => $request->input('nama_official'),
            'usia_official' => $request->input('usia_official'),
            'kategori_official' => $request->input('kategori_official'),
            'klub_official' => $request->input('klub_official'),
            'tanggal_official' => $request->input('tanggal_official'),
            'pertandingan_official' => $request->input('pertandingan_official'),
            'pelanggaran_official' => $request->input('pelanggaran_official'),
            'sanksi_official' => $request->input('sanksi_official'),
            'batas_official' => $request->input('batas_official'),
            'status_official' => $request->input('status_official'),
            'foto_official' => $foto_nama, // Make sure to handle this properly for 'foto_official' if needed
        ];

        $data_official = official::create($data_official);



        if ($data_official) {
            return redirect('/adminofficial')->with('success', 'Data Berhasil di Tambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data');
        }
    }


    public function show($id)
    {

        $data_official = official::where('id', $id)->first();

        if ($data_official) {
            return view('showofficial')->with('data_official', $data_official);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }



    public function edit($id)
    {

        $data_official = official::where('id', $id)->first();

        if ($data_official) {
            return view('editofficial')->with('data_official', $data_official);
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }


    public function update(Request $request, $id)
    {
        // Validasi umum
        $request->validate([
            'nama_official' => 'required',
            'usia_official' => 'required',
            'kategori_official' => 'required',
            'klub_official' => 'required',
            'tanggal_official' => 'required',
            'pertandingan_official' => 'required',
            'pelanggaran_official' => 'required',
            'sanksi_official' => 'required',
            'batas_official' => 'required',
            'status_official' => 'required',
        ], [
            'nama_official.required' => 'Nama Official wajib diisi',
            'usia_official.required' => 'Usia Official wajib diisi',
            'kategori_official.required' => 'Kategori Official wajib diisi',
            'klub_official.required' => 'Klub Official wajib diisi',
            'tanggal_official.required' => 'Tanggal Official wajib diisi',
            'pertandingan_official.required' => 'Pertandingan Official wajib diisi',
            'pelanggaran_official.required' => 'Pelanggaran Official wajib diisi',
            'sanksi_official.required' => 'Sanksi Official wajib diisi',
            'batas_official.required' => 'Batas Official wajib diisi',
            'status_official.required' => 'Status Official wajib diisi',


        ]);


        $data_official = [
            // Tangkap input dari form
            'nama_official' => $request->input('nama_official'),
            'usia_official' => $request->input('usia_official'),
            'kategori_official' => $request->input('kategori_official'),
            'klub_official' => $request->input('klub_official'),
            'tanggal_official' => $request->input('tanggal_official'),
            'pertandingan_official' => $request->input('pertandingan_official'),
            'pelanggaran_official' => $request->input('pelanggaran_official'),
            'sanksi_official' => $request->input('sanksi_official'),
            'batas_official' => $request->input('batas_official'),
            'status_official' => $request->input('status_official'),
        ];

        if ($request->hasFile('foto_official')) {
            $request->validate([
                'foto_official' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'foto_official.mimes' => 'Hanya Berupa JPEG, JPG, PNG, dan GIF',
            ]);

            $foto_file = $request->file('foto_official');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto_official'), $foto_nama);

            // Hapus foto lama jika ada
            $data_foto = official::where('id', $id)->first();
            File::delete(public_path('foto_official') . '/' . $data_foto->foto);

            $data_official['foto_official'] = $foto_nama;
        }

        official::where('id', $id)->update($data_official);

        return redirect('adminofficial')->with('success', 'Data Berhasil di Perbaharui');
    }


    public function destroy($id)
    {

        $data_official = official::where('id', $id)->first();
        if ($data_official) {
            File::delete(public_path('foto') . '/' . $data_official->foto);
            official::where('id', $id)->delete();
            return redirect('adminofficial')->with('success', 'Data Berhasil di Hapus');
        }

        return redirect('adminofficial')->with('error', 'Data tidak ditemukan');
    }
}
