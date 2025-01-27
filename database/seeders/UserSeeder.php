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
            'name' => 'Ali',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'sara',
            'email' => 'sara@gmail.com',
            'password' => Hash::make('12341234'),
            'role' => 'operator',
        ]);
    }
}
