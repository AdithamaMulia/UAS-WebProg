<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('kelasID');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('userID')->on('graciauser');
            $table->string('nama_kelas');
            $table->string('deskripsi')->nullable();
            $table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->index('nama_kelas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
