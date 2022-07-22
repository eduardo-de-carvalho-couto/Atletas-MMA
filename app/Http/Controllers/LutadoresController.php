<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class LutadoresController extends Controller
{
    public function index(Request $request)
    {
        $categorias = new Categoria;

        $peso = $request->categoria;

        $lutadores = $categorias->lutadores;

        return view('lutadores.index')->with('peso', $peso)->with('lutadores', $lutadores);
    }

    public function create(Request $request)
    {
        $peso = $request->categoria;
        
        return view('lutadores.create')->with('peso', $peso);
    }
}
