<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categoria, Lutador};

class LutadoresController extends Controller
{
    public function index(Request $request)
    {
        $lutadores = Lutador::query()->where('categoria_id', $request->categoria)->get();

        $mensagemSucesso = session('mensagem.sucesso');

        return view('lutadores.index')
            ->with('categoria', $request->categoria)
            ->with('lutadores', $lutadores)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request)
    {   
        return view('lutadores.create')->with('categoria', $request->categoria);
    }

    public function store(Request $request)
    {
        $lutador = Lutador::create([
            'nome' => $request->nome,
            'categoria_id' => $request->categoria,
            'posicao' => $request->posicao,
        ]);

        return to_route('categorias.lutadores.index', $request->categoria)
            ->with('mensagem.sucesso', "Lutador '{$lutador->nome}' adicionado ao ranking");;
    }

    public function edit(Request $request)
    {
        $lutador = Lutador::find($request->lutador);

        return view('lutadores.edit')
            ->with('categoria', $request->categoria)
            ->with('lutador', $lutador);
    }

    public function update(Request $request)
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
