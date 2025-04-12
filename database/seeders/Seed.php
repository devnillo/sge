<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Escola;
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
         $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => 'admin'
         ]);       
         $escola = Escola::create([
            'name' => 'escola',
            'email' => 'escola@gmail.com',
            'password' => 'escola',
            'admin_id' => '1'
         ]);
    }
}
