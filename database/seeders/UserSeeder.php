<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 'admin'
            ],
            [
                'name' => 'Jhone Doe',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 'user'
            ]

            ]);
    }
}
