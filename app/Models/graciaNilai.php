<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graciaNilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['mapelID', 'userID', 'nilaiUTS', 'nilaiUAS', 'nilaiUH1', 'nilaiUH2', 'nilaiUH3', 'nilaiUH4', 'nilaiAkhir', 'semester', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(graciaUser::class, 'userID', 'userID');
    }

    public function mapel()
    {
        return $this->belongsTo(graciaMapel::class, 'mapelID');
    }
}
