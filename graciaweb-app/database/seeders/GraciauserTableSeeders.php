<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GraciauserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('graciauser')->insert([
            'username' => 'admin123',
            'nama_depan' => 'admin',
            'nama_belakang' => 'Null',
            'password' => Hash::make('admin123'),
            'gender' => 'lainnya',
            'alamat' => 'null',
            'nis' => 'null',
            'agama' => 'null',
            'nama_orangtua' => 'null',
            'tempat_lahir' => 'null',
            'role' => 'admin'
        ]);
    }
}
