<?php

namespace Database\Seeders;

use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
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
        $categorias = [
            [
                'descricao' => 'Tecnologia'
            ],
            [
                'descricao' => 'Eletodoméstico'
            ],
            [
                'descricao' => 'Alimentação'
            ],
        ];
        foreach($categorias as $categoria){
            Categoria::UpdateOrCreate($categoria);
        }
    }
}
