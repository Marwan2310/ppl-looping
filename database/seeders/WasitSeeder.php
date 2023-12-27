<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WasitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('wasit')->insert([
            'nama_wasit' => 'Ramos',
            'tanggal_wasit' => '2019-04-15',
            'pelanggaran_wasit' => 'Akumulasi Kartu Kuning',
            'pertandingan_wasit' => 'psb VS MD',
            'sanksi_wasit' => 'Tidak dapat bermain selama 2 match dan denda Rp.200.000.000',
            'batas_wasit' => '2020-04-16',
            'status_wasit' => 'Belum selesai',

            'created_at'=> now()
        ]);
    }
    }

