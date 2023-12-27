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
        Schema::create('wasit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_wasit');
            $table->integer('usia_wasit');
            $table->date('tanggal_wasit');
            $table->text('pelanggaran_wasit');
            $table->text('pertandingan_wasit');
            $table->text('sanksi_wasit');
            $table->date('batas_wasit');
            $table->text('status_wasit');
            // Add any additional fields related to 'wasit'
        });
    }


        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('wasit');
        }
};
