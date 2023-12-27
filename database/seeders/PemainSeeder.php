<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pemain')->insert([
            'nama' => 'Ramos',
            'usia' => '35',
            'kategori' => 'Ringan',
            'posisi' => 'Bek Tengah',
            'klub' =>'Real Madrid',
            'tanggal' => '2019-04-15',
            'pertandingan' => 'psb VS MD',
            'pelanggaran' => 'Akumulasi Kartu Kuning',
            'sanksi' => 'Tidak dapat bermain selama 2 match dan denda Rp.200.000.000',
            'batas' => '2020-04-16',
            'status' => 'Belum selesai',

            'created_at'=> now()
        ]);
    }
}
