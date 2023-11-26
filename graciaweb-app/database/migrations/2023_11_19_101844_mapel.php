<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelTable extends Migration
{
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->id('mapelID');
            $table->string('nama_mapel');
            $table->unsignedBigInteger('kelasID');
            $table->enum('tingkat', ['10', '11', '12']);
            $table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('kelasID')->references('kelasID')->on('kelas');
            $table->index('nama_mapel');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mapel');
    }
}
