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
        return view('lutas.create')->with('lutador', $lutador);
    }
}
