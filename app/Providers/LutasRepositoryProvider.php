<?php

namespace App\Providers;

use App\Repositories\EloquentLutasRepository;
use App\Repositories\LutasRepository;
use Illuminate\Support\ServiceProvider;

class LutasRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        LutasRepository::class => EloquentLutasRepository::class
    ];
}
