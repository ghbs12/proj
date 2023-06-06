<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faixa;
use Illuminate\Support\Facades\DB;

class FaixasSeeder extends Seeder
{

    public function run()
    {
        DB::table('imcs')->insert([
        ]); 
    }
}