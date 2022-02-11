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

//crear jugador
Route::get('crearJugador',[JugadorController::class,'formCrear'])->middleware(['auth'])->name('crearJugador');
Route::post('crearJugador',[JugadorController::class,'guardar'])->middleware(['auth'])->name('crearJugadorPost');

//modificar jugador
Route::get('modificarJugador/{id}',[JugadorController::class,'modificar'])->middleware(['auth'])->name('modificarJugador');
Route::post('modificarJugador/{id}',[JugadorController::class,'modificarGuardarBD'])->middleware(['auth'])->name('postModificarJugador');

//borrar jugador
Route::get('borrarJugador/{id}',[JugadorController::class,'borrar'])->middleware(['auth'])->name('borrarJugador');

//modificar equipo
Route::get('modificarEquipo/{id}',[EquipoController::class,'modificar'])->middleware(['auth'])->name('modificarEquipo');
Route::post('modificarEquipo/{id}',[EquipoController::class,'modificarGuardarBD'])->middleware(['auth'])->name('postModificarEquipo');
//borrar equipo
Route::get('borrarEquipo/{id}',[EquipoController::class,'borrar'])->middleware(['auth'])->name('borrarEquipo');

require __DIR__.'/auth.php';
