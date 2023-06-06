<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercicios;
use Illuminate\Support\Facades\DB;

class ExerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercicios')->insert([
            'nome' => "Crunch abdominal",
            'desc' => "Deite-se de costas, dobre os joelhos e coloque os pés no chão",
            'local' => "A onde preferir",
            'faixa_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "agachamento",
            'desc' => "flexionar os joelhos e quadris, mantendo a postura ereta",
            'local' => "A onde preferir",
            'faixa_id' => "1"
        ]); 
        DB::table('exercicios')->insert([
            'nome' => "Caminhada",
            'desc' => "Atividade de baixo impacto que fortalece o condicionamento cardiovascular.",
            'local' => "Ao ar livre ou em esteira",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Natação",
            'desc' => "Exercício de baixo impacto que trabalha todo o corpo.",
            'local' => "Piscina",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Ciclismo",
            'desc' => "Atividade de baixo impacto que fortalece as pernas e melhora a resistência.",
            'local' => "Ao ar livre ou bicicleta estacionária",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Treinamento com pesos leves",
            'desc' => "Fortalece os músculos e melhora a composição corporal.",
            'local' => "Academia ou em casa com pesos leves",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Alongamento",
            'desc' => "Melhora a flexibilidade e a mobilidade.",
            'local' => "Qualquer lugar",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Aeróbica aquática",
            'desc' => "Exercício de baixo impacto que trabalha todo o corpo na água.",
            'local' => "Piscina",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Ioga suave",
            'desc' => "Combinação de posturas suaves e respiração para relaxamento e fortalecimento.",
            'local' => "Estúdio de ioga ou em casa",
            'faixa_id' => "1"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Dança de baixo impacto",
            'desc' => "Atividade divertida que trabalha o corpo todo com baixo impacto nas articulações.",
            'local' => "Estúdio de dança ou em casa",
            'faixa_id' => "1"
        ]);
        DB::table('exercicios')->insert([
            'nome' => "Levantamento de peso",
            'desc' => "Exercício de resistência que visa fortalecer e construir massa muscular.",
            'local' => "Academia ou em casa com pesos",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Agachamento com barra",
            'desc' => "Exercício composto que trabalha os músculos das pernas e glúteos.",
            'local' => "Academia ou em casa com barra",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Supino com halteres",
            'desc' => "Exercício para fortalecer os músculos do peito, ombros e tríceps.",
            'local' => "Academia ou em casa com halteres",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Remada com barra",
            'desc' => "Trabalha os músculos das costas, ombros e braços.",
            'local' => "Academia ou em casa com barra",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Flexão de braço",
            'desc' => "Exercício para fortalecer os músculos do peito, ombros e tríceps.",
            'local' => "Qualquer lugar",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Levantamento terra",
            'desc' => "Exercício para trabalhar os músculos das costas, pernas e glúteos.",
            'local' => "Academia ou em casa com barra",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Flexão de pernas",
            'desc' => "Exercício para fortalecer os músculos das pernas.",
            'local' => "Academia ou em casa com máquina de extensão de pernas",
            'faixa_id' => "3"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Desenvolvimento de ombros",
            'desc' => "Exercício para fortalecer e desenvolver os músculos dos ombros.",
            'local' => "Academia ou em casa com halteres",
            'faixa_id' => "3"
        ]);
        DB::table('exercicios')->insert([
            'nome' => "Treinamento funcional",
            'desc' => "Combinação de exercícios que trabalham força, resistência e flexibilidade.",
            'local' => "Academia ou em casa",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Corrida",
            'desc' => "Atividade aeróbica que melhora o condicionamento cardiovascular e queima calorias.",
            'local' => "Ao ar livre ou esteira",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Aulas de grupo",
            'desc' => "Participação em aulas de dança, aeróbica, ciclismo indoor, entre outros.",
            'local' => "Academia",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Treinamento em circuito",
            'desc' => "Combinação de exercícios em sequência para trabalhar diferentes grupos musculares.",
            'local' => "Academia ou em casa",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Pilates",
            'desc' => "Método que fortalece o core, melhora a postura e a flexibilidade.",
            'local' => "Estúdio de pilates ou em casa",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Yoga",
            'desc' => "Combinação de posturas, respiração e meditação para melhorar a saúde e o bem-estar.",
            'local' => "Estúdio de yoga ou em casa",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Ciclismo ao ar livre",
            'desc' => "Atividade aeróbica que fortalece as pernas e melhora a resistência.",
            'local' => "Ao ar livre",
            'faixa_id' => "2"
        ]);
        
        DB::table('exercicios')->insert([
            'nome' => "Aulas de dança",
            'desc' => "Participação em aulas de dança como zumba, salsa, hip-hop, entre outras.",
            'local' => "Estúdio de dança ou em casa",
            'faixa_id' => "2"
        ]);
    }
}
