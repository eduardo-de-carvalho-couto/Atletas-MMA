<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CategoriasController, LutadoresController, LutasController};
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias', CategoriasController::class)
    ->except(['show']);

// Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias.index');
// Route::get('/categorias/create', [CategoriasController::class, 'create'])->name('categorias.create');
// Route::post('/categorias', [CategoriasController::class, 'store'])->name('categorias.store');

Route::resource('categorias.lutadores', LutadoresController::class)
    ->except(['show'])
    ->parameters(['lutadores' => 'lutador']);

Route::resource('lutadores.lutas', LutasController::class)
    ->except(['show'])
    ->parameters(['lutadores' => 'lutador']);;