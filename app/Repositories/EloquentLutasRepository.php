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
        
        $lutasComAdversarios = null;
        
        foreach($lutas as $luta){
            foreach($luta->lutadores()->where('id', '!=', $lutador->id)->get() as $adversario){
                $lutasComAdversarios[$luta->id] = [
                    'adversario' => $adversario->nome,
                    'adversario_vencedor' => $adversario->pivot->vencedor,
                ];
            }
        }

        return $lutasComAdversarios;
    }

    public function adicionar(Lutador $lutador, LutasFormRequest $request)
    {
        DB::transaction(function () use ($request, $lutador) {
            
            $luta = Luta::create([
                'data' => $request->data,
                'categoria_id' => $lutador->categoria->id,
            ]);

            if($request->resultado == 'vitoria'){
                $this->vitoriaDoLutador($luta, $lutador, $request);
            }else{
                $this->vitoriaDoAdversario($luta, $lutador, $request);
            }
        });
    }

    private function vitoriaDoLutador(Luta $luta, Lutador $lutador, LutasFormRequest $request): void
    {
        $luta->lutadores()->sync([
            $lutador->id => ['vencedor' => true],
            $request->adversario,
        ]);
    }

    private function vitoriaDoAdversario(Luta $luta, Lutador $lutador, LutasFormRequest $request): void
    {
        $luta->lutadores()->sync([
            $lutador->id,
            $request->adversario => ['vencedor' => true],
        ]);
    }
}