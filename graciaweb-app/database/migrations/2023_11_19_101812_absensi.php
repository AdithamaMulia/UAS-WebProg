<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('absenID');
            $table->unsignedBigInteger('kelasID');
            $table->unsignedBigInteger('userID');
            $table->date('tanggal');
            $table->enum('keterangan', ['Hadir', 'Sakit', 'Izin', 'Tanpa Keterangan']);
            $table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('kelasID')->references('kelasID')->on('kelas');
            $table->foreign('userID')->references('userID')->on('graciauser');
        });
    }

    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
