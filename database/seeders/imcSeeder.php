<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\imc;
use Illuminate\Support\Facades\DB;

class ImcSeeder extends Seeder
{

    public function run()
    {
        DB::table('imcs')->insert([
        ]); 
    }
}