<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

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

Route::get('dashboard',[EquipoController::class,'listado'])->middleware(['auth'])->name('dashboard');

Route::get('listaJugadores/{id}',[JugadorController::class,'listadoJugadores'])->middleware(['auth'])->name('listaJugadores');


Route::get('crearEquipo',[EquipoController::class,'formCrear'])->middleware(['auth'])->name('crearEquipo');

Route::post('crearEquipo',[EquipoController::class,'guardar'])->middleware(['auth'])->name('crearEquipoPost');


Route::get('crearJugador',[JugadorController::class,'formCrear'])->middleware(['auth'])->name('crearJugador');

Route::post('crearJugador',[JugadorController::class,'guardar'])->middleware(['auth'])->name('crearJugadorPost');

require __DIR__.'/auth.php';
