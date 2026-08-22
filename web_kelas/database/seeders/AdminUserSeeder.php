<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengecek apakah user admin sudah ada agar tidak duplikat
        User::updateOrCreate(
            ['email' => ''],
            [
                'name'     => '',
                'password' => Hash::make(''), // Password terenkripsi
            ]
        );
    }
}
