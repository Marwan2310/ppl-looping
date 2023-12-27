<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('official', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('nama_official');
        $table->integer('usia_official');
        $table->text('kategori_official');
        $table->string('klub_official');
        $table->date('tanggal_official');
        $table->text('pertandingan_official');
        $table->text('pelanggaran_official');
        $table->text('sanksi_official');
        $table->date('batas_official');
        $table->text('status_official');
        // Add any additional fields related to 'official'
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('official');
    }
};
