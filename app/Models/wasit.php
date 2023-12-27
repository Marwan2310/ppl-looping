<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wasit extends Model
{
    use HasFactory;

    protected $table = "wasit"; // The table name should be pluralized
    protected $fillable = [
        'nama_wasit',
        'usia_wasit',
        'tanggal_wasit',
        'pelanggaran_wasit',
        'pertandingan_wasit',
        'sanksi_wasit',
        'batas_wasit',
        'status_wasit',
        'foto_wasit',
    ];

}
