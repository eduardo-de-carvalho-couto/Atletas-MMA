<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categoria, Lutador};

class LutadoresController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        
        $peso = $request->categoria;

        $lutadores = $categorias->lutadores;

        return view('lutadores.index')->with('peso', $peso)->with('lutadores', $lutadores);
    }

    public function create(Request $request)
    {
        $peso = $request->categoria;
        
        return view('lutadores.create')->with('peso', $peso);
    }

    public function store(Request $request)
    {
        $nomeLutador = $request->input('nome');
        $categoria = $request->input('peso');

        Lutador::create([
            'nome' => $nomeLutador,
            'categoria_id' => $categoria,
        ]);

        return to_route('categorias.index');
    }
}
