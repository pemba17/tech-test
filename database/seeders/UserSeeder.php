<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Pemba Sherpa',
                'email' => 'workpemba@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'David Beckham',
                'email' => 'david@gmail.com',
                'password' => bcrypt('password')
            ]
        ];

        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
