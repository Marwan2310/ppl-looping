<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('official')->insert([
            'nama_official' => 'Ramos',
            'usia_official' => '35',
            'kategori_official' => 'Ringan',
            'klub_official' =>'Real Madrid',
            'tanggal_official' => '2019-04-15',
            'pertandingan_official' => 'psb VS MD',
            'pelanggaran_official' => 'Akumulasi Kartu Kuning',
            'sanksi_official' => 'Tidak dapat bermain selama 2 match dan denda Rp.200.000.000',
            'batas_official' => '2020-04-16',
            'status_official' => 'Belum selesai',
            'created_at'=> now()
        ]);
    }
}
