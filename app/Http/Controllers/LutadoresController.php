<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LutadoresFormRequest;
use App\Models\{Categoria, Lutador};

class LutadoresController extends Controller
{
    public function index(Categoria $categoria)
    {
        //$lutadores = Lutador::query()->where('categoria_id', $request->categoria)->get();
        $lutadores = $categoria->lutadores()->orderBy('posicao')->get();

        $mensagemSucesso = session('mensagem.sucesso');

        return view('lutadores.index')
            ->with('categoria', $categoria->id)
            ->with('lutadores', $lutadores)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Categoria $categoria)
    {
        return view('lutadores.create')->with('categoria', $categoria);
    }

    public function store(LutadoresFormRequest $request)
    {
        $lutador = Lutador::create([
            'nome' => $request->nome,
            'categoria_id' => $request->categoria,
            'posicao' => $request->posicao,
        ]);

        return to_route('categorias.lutadores.index', $request->categoria)
            ->with('mensagem.sucesso', "Lutador '{$lutador->nome}' adicionado ao ranking");
    }

    public function edit(Request $request)
    {
        $lutador = Lutador::find($request->lutador);

        return view('lutadores.edit')
            ->with('categoria', $request->categoria)
            ->with('lutador', $lutador);
    }

    public function update(LutadoresFormRequest $request)
    {
        $lutador = Lutador::find($request->lutador);

        $lutador->fill($request->all());
        $lutador->save();

        return to_route('categorias.lutadores.index', $request->categoria)
            ->with('mensagem.sucesso', "lutador '{$lutador->nome}' atualizado com sucesso");
    }

    public function destroy(Request $request)
    {
        $lutador = Lutador::find($request->lutador);
        $lutador->delete();

        return to_route('categorias.lutadores.index', $request->categoria)
            ->with('mensagem.sucesso', "Lutador '{$lutador->nome}' removido do ranking");
    }
}
