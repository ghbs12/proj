<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faixa;
use Illuminate\Support\Facades\DB;

class FaixasSeeder extends Seeder
{

    public function run()
    {
        DB::table('faixas')->insert([
            'nome' => "acima"
        ]); 
        DB::table('faixas')->insert([
            'nome' => "abaixo"
        ]);   
        DB::table('faixas')->insert([
            'nome' => "dentro"
        ]);     
    }
}
