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
        ],);

        DB::table('graciauser')->insert([
        'username' => 'agus',
        'nama_depan' => 'agus',
        'nama_belakang' => 'Null',
        'password' => Hash::make('aguslapar'),
        'gender' => 'Laki-Laki',
        'tanggal_lahir' => '2022-12-09',
        'alamat' => 'jalan UMN',
        'nis' => '000123',
        'agama' => 'universal',
        'nama_orangtua' => 'ibu',
        'tempat_lahir' => 'diumn',
        'role' => 'student'
        ],);
    }
}
