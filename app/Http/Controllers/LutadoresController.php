<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categoria, Lutador};

class LutadoresController extends Controller
{
    public function index(Request $request)
    {
        $lutadores = Lutador::query()->where('categoria_id', $request->categoria)->get();

        $categoria = $request->categoria;

        return view('lutadores.index')->with('categoria', $categoria)->with('lutadores', $lutadores);
    }

    public function create(Request $request)
    {
        $categoria = $request->categoria;
        
        return view('lutadores.create')->with('categoria', $categoria);
    }

    public function store(Request $request)
    {   
        $categoria = $request->input('categoria');

        Lutador::create([
            'nome' => $request->nome,
            'categoria_id' => $request->categoria,
            'posicao' => $request->posicao,
            'vitorias' => $request->vitorias,
            'derrotas' => $request->derrotas,
        ]);

        return to_route('lutadores.index', $categoria);
    }
}
