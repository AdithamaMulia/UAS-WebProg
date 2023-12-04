<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class graciaKelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = ['kelasID', 'tingkat', 'nama_kelas', 'deskripsi', 'created_at', 'updated_at'];
    protected $fillable = ['kelasID', 'tingkat', 'nama_kelas', 'deskripsi', 'created_at', 'updated_at'];
    protected $primaryKey = 'kelasID';

    public function absensi(): MorphTo
    {
        return $this->morphTo('absensi', 'absensi_type', 'absensi');
    }

    public function user()
    {
        return $this->hasMany(graciaUser::class, 'kelasID', 'kelasID');
    }

    public function mapels()
    {
        return $this->hasManyThrough(graciaMapel::class, graciaNilai::class, 'kelasID', 'mapelID', 'kelasID', 'mapelID');
    }

}

