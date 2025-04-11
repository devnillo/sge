<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'seduc',
            'email' => 'seduc@gmail.com',
            'password' => '121212',
            'cidade' => 'passagem franca',
            'cep' => '65680000',
            'uf' => 'ma',
        ]);
        
    }
}
