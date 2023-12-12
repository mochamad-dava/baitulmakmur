<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('adminbaitulmakmur')
            ],
            [
                'name' => 'Guru',
                'email' => 'guru@gmail.com',
                'role' => 'guru',
                'password' => bcrypt('gurubaitulmakmur')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
