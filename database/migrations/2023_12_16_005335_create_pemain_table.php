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
        Schema::create('pemain', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->integer('usia');
            $table->text('kategori');
            $table->text('posisi');
            $table->string('klub');
            $table->date('tanggal');
            $table->text('pertandingan');
            $table->text('pelanggaran');
            $table->text('sanksi');
            $table->date('batas');
            $table->text('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemain');
    }
};
