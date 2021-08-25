<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function Listar()
    {
        $categorias = Categoria::all();
        return $categorias;
    }
}
