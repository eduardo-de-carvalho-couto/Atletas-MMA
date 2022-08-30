<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CategoriasController, LutadoresController, LutasController};

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
    return redirect('/categorias');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('categorias', CategoriasController::class)
    ->except(['show']);

Route::resource('categorias.lutadores', LutadoresController::class)
    ->except(['show'])
    ->parameters(['lutadores' => 'lutador']);

Route::resource('lutadores.lutas', LutasController::class)
    ->except(['show', 'edit'])
    ->parameters(['lutadores' => 'lutador']);
