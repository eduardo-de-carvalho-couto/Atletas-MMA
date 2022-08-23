<?php

namespace App\Repositories;

use App\Http\Requests\LutasFormRequest;
use App\Models\Lutador;

interface LutasRepository
{
    /** @return Lutador[] */
    public function lutasComAdversarios(Lutador $lutador): ?array;
    public function adicionar(Lutador $lutador, LutasFormRequest $request);
}