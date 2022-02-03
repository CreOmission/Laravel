<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\PartidoController;
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

Route::get('/clasificacion', [EquiposController::class,'clasificacion'])->middleware(['auth'])->name('clasificacion');

Route::get('/crearEquipo', [EquiposController::class,'crear'])->middleware(['auth'])->name('crearEquipo');

Route::get('/guardarEquipo', [EquiposController::class,'guardar'])->middleware(['auth'])->name('guardarEquipo');

Route::get('/partidoNuevo', [PartidoController::class,'crearPartido'])->middleware(['auth'])->name('partidoNuevo');



Route::get('/guardarPartido', [PartidoController::class,'modifClasificacion'])->middleware(['auth'])->name('guardarPartido');


/*
		//nombre ruta//controladora del codigo que quiero ejecutar //solo si autenticado //dar nombre a la ruta por si hace falta para algo
Route::get('/listado',[EquiposController::class,'listado'])->middleware(['auth'])->name('listado');
*/
require __DIR__.'/auth.php';
