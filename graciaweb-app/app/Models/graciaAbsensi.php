<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaAbsensi extends Model
{
    protected $table = 'absensi';
    protected $guarded = ['absenID', 'kelasID', 'userID', 'tanggal', 'keterangan', 'created_at', 'updated_at'];
}
