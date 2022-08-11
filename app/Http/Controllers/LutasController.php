<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Lutador, Luta};

class LutasController extends Controller
{
    public function index(Lutador $lutador)
    {
        $lutas = $lutador->lutas()->with('lutadores')->orderBy('data', 'desc')->get();
        
        if(!empty($lutas->toArray())){
            foreach($lutas as $luta){
                foreach($luta->lutadores()->where('id', '!=', $lutador->id)->get() as $adversario){
                    $adversarios[] = $adversario->nome;
                }
            }
        }else{
            $adversarios = null;
        }

        //dd($adversarios);
        return view('lutas.index')
            ->with('lutador', $lutador)
            ->with('adversarios', $adversarios);
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
            $request->resultado = $lutador->id;
        }else{
            $request->resultado = $request->adversario;
        }


        $adversario = Lutador::find($request->adversario);
        
        $luta = Luta::create([
            'data' => $request->data,
            'lutador_vencedor_id' => $request->resultado,
        ]);

        $luta->lutadores()->saveMany([
            $lutador,
            $adversario
        ]);
        
        return to_route('lutadores.lutas.index', $lutador->id)
            ->with('mensagem.sucesso', "Luta adicionada com sucesso");
    }
}
