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
        $user = [
            [
                'name' => 'Anas AlAssi',
                'email' => 'anas@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Account 2',
                'email' => 'account@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        User::insert($user);
    }
}
