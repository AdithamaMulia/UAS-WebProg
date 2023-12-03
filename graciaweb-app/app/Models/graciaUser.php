<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class graciaUser extends Model
{
    use AuthenticableTrait;
    use HasFactory;

    protected $table = 'graciauser';
    protected $guarded = ['username', 'nama_depan', 'nama_belakang', 'password', 'gender', 'tanggal_lahir', 'alamat', 'nis', 'agama', 'nama_orangtua', 'tempat_lahir', 'kelasID', 'created_at', 'updated_at', 'role'];

    public function getAuthIdentifierName()
    {
        return 'username'; // Kolom yang menjadi identifier
    }

    public function getAuthPassword()
    {
        return $this->password; // Kolom password
    }

    public function absensi(): MorphTo
    {
        return $this->morphTo('absensi', 'absensi_type', 'absensi');
    }

    public function kelas()
    {
        return $this->belongsTo(graciaKelas::class, 'kelasID', 'kelasID');
    }

    public function nilai()
    {
        return $this->hasMany(graciaNilai::class, 'userID', 'userID');
    }
}

