<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaUser extends Model
{
    protected $table = 'graciauser';
    protected $guarded = ['username', 'email', 'nama_depan', 'nama_belakang', 'password', 'gender', 'tanggal_lahir', 'alamat', 'nik', 'role', 'created_at', 'updated_at'];
}