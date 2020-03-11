<?php

use Illuminate\Database\Seeder;
use App\Ambiente;

class AmbientesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ambientes = ['Sala', 'Cozinha', 'Lavanderia', 'Quarto', 'Banheiro', 'Área de lazer', 'Varanda'];

        foreach ($ambientes as $ambiente) {
            Ambiente::create(['nome' => $ambiente]);
        }
    }
}
