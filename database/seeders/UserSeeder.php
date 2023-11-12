<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@fjkm-akv.mg',
            'email_verified_at' => now(),
            'password' => Hash::make('admin@fjkm-akv.mg')
        ]);

        User::create([
            'name' => 'Fafana',
            'email' => 'fafana@fjkm-akv.mg',
            'email_verified_at' => now(),
            'password' => Hash::make('akvzavamaneno2023')
        ]);
    }
}
