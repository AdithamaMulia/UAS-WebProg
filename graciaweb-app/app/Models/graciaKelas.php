<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaKelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = ['kelasID', 'tingkat', 'nama_kelas', 'deskripsi', 'created_at', 'updated_at'];

    // Definisikan relasi antara kelas dan siswa
    public function siswa()
    {
        // Mengambil siswa dari kelas berdasarkan foreign key kelasID
        return $this->hasMany(graciaUser::class, 'kelasID', 'kelasID');
    }
}

