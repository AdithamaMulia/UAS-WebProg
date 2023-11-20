<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaKelas extends Model
{
    public $timestamps = false;
    protected $table = 'kelas';
    protected $fillable = ['kelasID', 'nama_kelas', 'deskripsi'];
}

