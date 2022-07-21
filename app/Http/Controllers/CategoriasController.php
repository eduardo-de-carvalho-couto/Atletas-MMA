<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::query()->orderBy('id')->get();

        return view('categorias.index')->with('categorias', $categorias);
    }
}
