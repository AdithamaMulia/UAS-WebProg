<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //untuk laravel versi dibawah 8.3.7 pakai ini (class CreateGraciauserTable extends Migration)
{
    public function up()
    {
        Schema::create('graciauser', function (Blueprint $table) {
            $table->id('userID');
            $table->string('username');
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->string('password');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat');
            $table->string('nis');
            $table->string('agama');
            $table->string('nama_orangtua');
            $table->string('tempat_lahir');
            $table->timestamps();
            $table->enum('role', ['student', 'teacher', 'admin']);
            $table->index('nama_depan');
            $table->index('nama_belakang');
        });
    }

    public function down()
    {
        Schema::dropIfExists('graciauser');
    }
};
