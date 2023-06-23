<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nomor' => '081234563456',
            'nama' => 'admin',
            'username' => 'adminAlia',
            'tglLahir' => '20230623',
            'password' => Hash::make('123456'),
        ]);
    }
}
