<?php

namespace App\Repositories;

use App\Http\Requests\LutasFormRequest;
use App\Models\{Lutador, Luta};
use Illuminate\Support\Facades\DB;

class EloquentLutasRepository implements LutasRepository
{
    public function lutasComAdversarios(Lutador $lutador): ?array
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

        return $adversarios;
    }

    public function adicionar(Lutador $lutador, LutasFormRequest $request)
    {
        DB::transaction(function () use ($request, $lutador) {
            
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
        });
    }
}