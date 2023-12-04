<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //untuk laravel versi dibawah 8.3.7 pakai ini (class CreateAbsensiTable extends Migration)
{
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('absenID');
            $table->unsignedBigInteger('kelasID');
            $table->unsignedBigInteger('userID');
            $table->date('tanggal');
            $table->enum('keterangan', ['Hadir', 'Sakit', 'Izin', 'Tanpa Keterangan']);
            $table->enum('semester', ['Ganjil', 'Genap']);
            $table->timestamps();
            $table->foreign('userID')->references('userID')->on('graciauser');
            $table->foreign('kelasID')->references('kelasID')->on('kelas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('absensi');
    }
};
