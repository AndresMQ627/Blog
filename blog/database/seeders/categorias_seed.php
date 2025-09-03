<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorias_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categorias")->insert([
            "nombre" => 'Arboles',
            "img" => 'default.jpg',
            "created_at" => date('Y-m-d H:i:s')
        ]); 

        DB::table("categorias")->insert([
            "nombre" => 'Arbustos', 
            "img" => 'default.jpg',
            "created_at" => date('Y-m-d H:i:s')
        ]);
    }
}