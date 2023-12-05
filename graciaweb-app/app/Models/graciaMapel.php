<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaMapel extends Model
{
    protected $table = 'mapel';
    protected $primaryKey = 'mapelID';
    protected $fillable = ['mapelID', 'nama_mapel', 'tingkat', 'created_at', 'updated_at'];

    public function nilai()
    {
        return $this->hasMany(graciaNilai::class, 'nilaiID', 'nilaiID');
    }

    public function kelas()
    {
        return $this->hasManyThrough(graciaKelas::class, graciaNilai::class, 'mapelID', 'kelasID', 'mapelID', 'kelasID');
    }
}
