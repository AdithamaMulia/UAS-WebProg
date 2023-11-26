<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaUser extends Model
{
    protected $table = 'graciauser';
    protected $guarded = ['username', 'nama_depan', 'nama_belakang', 'password', 'gender', 'tanggal_lahir', 'alamat', 'nis', 'agama', 'nama_orangtua', 'tempat_lahir', 'created_at', 'updated_at', 'role'];
}