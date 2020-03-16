<?php

use Illuminate\Database\Seeder;
use App\Responsavel;

class ResponsaveisTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Responsavel::class, 5)->create();
    }
}
