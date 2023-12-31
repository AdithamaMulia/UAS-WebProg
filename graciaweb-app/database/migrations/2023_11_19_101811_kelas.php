<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //untuk laravel versi dibawah 8.3.7 pakai ini (class CreateKelasTable extends Migration)
{
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('kelasID');
            $table->string('nama_kelas');
            $table->enum('tingkat', ['10', '11', '12']);
            $table->string('deskripsi')->nullable();
            $table->timestamps();
            $table->index('nama_kelas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
