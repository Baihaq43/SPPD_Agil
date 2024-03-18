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
        $tanggal_lahir = '2023-12-01';
        DB::table('users')->insert([
            'name' => 'Imam Baihaqi',
            'email' => 'imam@laravel.com',
            'nik' => '3215291606020001',
            'tanggal_lahir' => $tanggal_lahir,
            'password' => Hash::make($tanggal_lahir),
        ]);
    }
}
