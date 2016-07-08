<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = \App\Legacy\Entities\Categoria::all();

        foreach ($categorias as $categoria){
            \App\Entities\Category::create([
                'id'            => $categoria->idCategoria,
                'categoryName'  => $categoria->nomeCategoria
            ]);
        }
    }
}
