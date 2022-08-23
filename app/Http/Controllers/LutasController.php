<?php

namespace App\Http\Controllers;

use App\Http\Requests\LutasFormRequest;
use App\Models\Lutador;
use App\Repositories\LutasRepository;

class LutasController extends Controller
{
    public function __construct(private LutasRepository $repository)
    {
    }

    public function index(Lutador $lutador)
    {
        $adversarios = $this->repository->lutasComAdversarios($lutador);

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

    public function store(Lutador $lutador, LutasFormRequest $request)
    {
        $this->repository->adicionar($lutador, $request);
        
        return to_route('lutadores.lutas.index', $lutador->id)
            ->with('mensagem.sucesso', "Luta adicionada com sucesso");
    }
}
