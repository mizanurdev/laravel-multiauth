<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
        ]);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        $master = User::create([
            'name' => 'master',
            'email' => 'master@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'master',
        ]);
    }
}
