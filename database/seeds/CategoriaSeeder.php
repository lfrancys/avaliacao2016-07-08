<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Legacy\Entities\Categoria::create(['nomeCategoria' => 'Informatica']);
        \App\Legacy\Entities\Categoria::create(['nomeCategoria' => 'Moda']);
        \App\Legacy\Entities\Categoria::create(['nomeCategoria' => 'Esporte']);
    }
}
