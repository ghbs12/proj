<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class exercicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercicios')->insert([
            'nome' => "alongamento",
            'desc' => "Alongue seu corpo",
            'local' => "A onde preferir",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "Crunch abdominal",
            'desc' => "Deite-se de costas, dobre os joelhos e coloque os pés no chão",
            'local' => "A onde preferir",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "agachamento",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "",
            'desc' => "",
            'local' => "",
            'tipo_id' => "1"
        ]); 
    }
}
