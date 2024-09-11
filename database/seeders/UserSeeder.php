<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama_lengkap' => 'Pak Bagus',
            'id_level' => 3,
            'email' => 'bagus@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
