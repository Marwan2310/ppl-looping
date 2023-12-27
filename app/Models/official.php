<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class official extends Model
{
    use HasFactory;



    protected $table = "official"; // The table name should be pluralized
    protected $fillable = [
        'nama_official',
        'usia_official',
        'kategori_official',
        'klub_official',
        'tanggal_official',
        'pertandingan_official',
        'pelanggaran_official',
        'sanksi_official',
        'batas_official',
        'status_official',
        'foto_official',
    ];

}
