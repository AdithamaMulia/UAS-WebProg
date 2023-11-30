<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaMapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['nama_mapel', 'tingkat', 'created_at', 'updated_at'];
}
