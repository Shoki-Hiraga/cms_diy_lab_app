<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TESTUsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'taro', 'email' => 'taro@example.com'],
            ['username' => 'hanako', 'email' => 'hanako@example.com'],
            ['username' => 'jiro', 'email' => 'jiro@example.com'],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
