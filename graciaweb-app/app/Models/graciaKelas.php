<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaKelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = ['kelasID', 'tingkat', 'nama_kelas', 'deskripsi', 'created_at', 'updated_at'];
}

