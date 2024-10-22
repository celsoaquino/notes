<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'admin1@gmail.com',
                    'password' => bcrypt('password'),
                    'created_at' => now(),
                ],
                [
                    'username' => 'admin2@gmail.com',
                    'password' => bcrypt('password'),
                    'created_at' => now(),
                ],
                [
                    'username' => 'admin3@gmail.com',
                    'password' => bcrypt('password'),
                    'created_at' => now(),
                ]
            ]
        );
    }
}
