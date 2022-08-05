<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lutador;

class LutasController extends Controller
{
    public function index()
    {
        dd('Lutas desse lutador desta categoria');
    }

    public function create(Lutador $lutador)
    {
        $adversarios = Lutador::query()
            ->where('categoria_id', $lutador->categoria_id)
            ->where('id', '!=', $lutador->id)
            ->get();

        return view('lutas.create')
            ->with('lutador', $lutador)
            ->with('adversarios', $adversarios);
    }

    public function store(Lutador $lutador, Request $request)
    {
        if($request->resultado == 'vitoria'){
            $request->resultado = true;
        }else{
            $request->resultado = false;
        }

        $lutador->lutas()->create([
            'adversario_id' => $request->adversario,
            'data' => $request->data,
            'vitoria' => $request->resultado,
        ]);
        
        return to_route('lutadores.lutas.index', $lutador->id)
            ->with('mensagem.sucesso', "Luta adicionada com sucesso");
    }
}
