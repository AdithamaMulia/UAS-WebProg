<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graciauser extends Model
{
    protected $table = 'graciauser';
    protected $fillable = ['nama_depan', 'nama_belakang', 'password', 'gender', 'tanggal_lahir', 'alamat', 'foto', 'role'];
}