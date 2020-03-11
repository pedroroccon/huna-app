<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'BYUS Tecnologia', 
            'email' => 'byus@byus.com.br', 
            'password' => bcrypt('secret'), 
        ]);

        $this->call(AmbientesTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
    }
}
