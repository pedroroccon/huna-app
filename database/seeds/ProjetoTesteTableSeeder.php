<?php

use Illuminate\Database\Seeder;
use App\Responsavel;
use App\Cliente;
use App\Projeto;
use App\ProjetoAmbiente;
use App\ProjetoAmbienteEtapaItem;

class ProjetoTesteTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $responsavel = Responsavel::create([
            'nome' => 'John Doe', 
            'cargo' => 'Gerente industrial', 
            'celular' => '+55 19 9 85985547', 
            'email' => 'contato@johndoe.com', 
        ]);

        $cliente = Cliente::create([
            'nome' => 'Mary A. Joseph', 
            'cpf' => '458.589.789-89', 
        ]);

        $projeto = $cliente->projetos()->save(new Projeto([
            'nome' => 'Projeto residencial - Rua 08 - JP N856 - Jardim Portugal', 
            'orcamento' => 35000, 
            'dt_contrato' => today()->subDays(5)->format('Y-m-d'), 
            'dt_inicio' => today()->format('Y-m-d'), 
            'dt_prev_entrega' => today()->addMonth()->format('Y-m-d'), 
            'dt_fim' => null, 
        ]));

        $ambientes = ['Sala #1', 'Banheiro #1', 'Banheiro #2', 'Quarto #1', 'Quarto #2', 'Quarto #3'];

        foreach($ambientes as $ambiente) {
            $projeto->ambientes()->save(new ProjetoAmbiente([
                'nome' => $ambiente, 
                'descricao' => 'Ambiente cadastrado como teste no projeto', 
            ]));
        }

        foreach($projeto->ambientes as $ambiente) {

            $etapa = $ambiente->etapas()->where('nome', 'Corte')->first();

            if ( ! empty($etapa)) {

                $contagem = mt_rand(1, 10);
                for ($i = 0; $i < $contagem; $i++) {
                    $etapa->itens()->save(new ProjetoAmbienteEtapaItem([
                        'titulo' => 'Madeira ' . (mt_rand(10, 80) * 10) . 'mm x ' . (mt_rand(10, 80) * 10) . 'mm'
                    ]));
                }
            }
        }
    }
}
