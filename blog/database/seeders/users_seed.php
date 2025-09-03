<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => 'Andres Morales',
            "email" => 'admin123@gmail.com',
            "nickname" => 'equisd',
            "img" => 'default.jpg',
            "password" => Hash::make('123'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here

        DB::table("users")->insert([
            "name" => 'Sebastian Morales',
            "email" => 'sebas@gmail.com',
            "nickname" => 'SebasCochon',
            "img" => 'default.jpg',
            "password" => Hash::make('321'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here

        for ($i = 0; $i < 50; $i++) { // Fixed missing $ and semicolons in the for loop
            DB::table("users")->insert([
                "name" => 'Admin'.$i,
                "email" => 'sebas' . $i . '@gmail.com', // Ensure unique email for each user
                "nickname" => 'admin' . $i, // Ensure unique nickname for each user
                "img" => 'default.jpg',
                "password" => Hash::make('321'),
                "created_at" => date('Y-m-d h:m:s')
            ]);
        }
    }
}