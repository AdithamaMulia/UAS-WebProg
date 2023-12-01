<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class graciaAbsensi extends Model
{
    protected $table = 'absensi';
    protected $guarded = ['absenID', 'kelasID', 'userID', 'tanggal', 'keterangan', 'semester', 'created_at', 'updated_at'];

    public function absensi(): MorphMany
    {
        return $this->morphMany(graciaAbsensi::class, 'absensi', 'absensi_type', 'absensi');
    }
}
