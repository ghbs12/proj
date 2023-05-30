<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;
use Illuminate\Support\Facades\DB;

class Tipos extends Seeder
{

    public function run()
    {
        DB::table('tipos')->insert([
            'nome' => "acima"
        ]); 
        DB::table('tipos')->insert([
            'nome' => "abaixo"
        ]);   
        DB::table('tipos')->insert([
            'nome' => "dentro"
        ]);     
    }
}
