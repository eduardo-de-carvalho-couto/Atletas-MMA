<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CategoriasController, LutadoresController};
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

Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias.index');

Route::controller(LutadoresController::class)->group(function () {
    Route::get('/categorias/{categoria}/lutadores', 'index')->name('lutadores.index');
    Route::get('/categorias/{categoria}/lutadores/create', 'create');
    Route::post('/categorias/{categoria}/lutadores', 'store');
    Route::delete('/categorias/{categoria}/lutadores/{lutador}', 'destroy')->name('lutadores.destroy');
});