<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function listado(){
    	$listaEquipos = equipo::All();
			//lp es una variable que recogerá los datos y los pasará
    	return view('dashboard',['le' => $listaEquipos]);
    }

    public function formCrear(){
    	return view('formularioCrearEquipo');
    }

    public function guardar(Request $datos){

    	$respuesta = $datos->validate([
    		'nombre' => 'required|max:100',
    		'entrenador' => 'required|max:100',
    		'categoria' => 'required|max:100'
    	]);

    	$equipo = new equipo();

    	$equipo->nombre = $datos->nombre;
    	$equipo->entrenador = $datos->entrenador;
    	$equipo->categoria = $datos->categoria;

    	$equipo->save();

    	return redirect()->route('dashboard',['le' => Equipo::All()]);
    }
}
