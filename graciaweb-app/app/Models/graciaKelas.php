<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class graciaKelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = ['kelasID', 'tingkat', 'nama_kelas', 'deskripsi', 'created_at', 'updated_at'];

    public function absensi(): MorphTo
    {
        return $this->morphTo('absensi', 'absensi_type', 'absensi');
    }

    public function user()
    {
        return $this->hasOne(graciaUser::class, 'kelasID', 'kelasID');
    }
}

