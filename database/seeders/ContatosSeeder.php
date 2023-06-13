<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;

class ContatosSeeder extends Seeder
{

    public function run()
    {
        DB::table('Contatos')->insert([
        ]); 
    }
}