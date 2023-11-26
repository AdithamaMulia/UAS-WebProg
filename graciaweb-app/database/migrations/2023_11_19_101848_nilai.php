<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id('nilaiID');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('mapelID');
            $table->double('nilaiUTS')->nullable();
            $table->double('nilaiUAS')->nullable();
            $table->double('nilaiUH1')->nullable();
            $table->double('nilaiUH2')->nullable();
            $table->double('nilaiUH3')->nullable();
            $table->double('nilaiUH4')->nullable();
            $table->double('nilaiAkhir')->nullable();
            $table->enum('semester', ['Ganjil', 'Genap']);
            $table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('userID')->references('userID')->on('graciauser');
            $table->foreign('mapelID')->references('mapelID')->on('mapel');
            $table->index('semester');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}
