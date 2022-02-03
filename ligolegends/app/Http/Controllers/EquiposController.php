<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipos;

class EquiposController extends Controller
{
    public function clasificacion(){

    	$equipos = Equipos::All()->sortByDesc('puntos'); //select * from equipos order by puntos
    					//este listaEquipos se usará en el blade
    	return view('clasificacion',['listaEquipos' => $equipos]);
    }
    public function crear(){
    	return view('formCrear');
    }
    				//en las rutas que vienen de un formulario
    				//Laravel crea un objeto Request
    public function guardar(Request $datosForm){
    	//validar los datos

    	$equipo = new Equipos();

    	$equipo->nombre = $datosForm->nombre;
    	$equipo->puntos = $datosForm->puntos;
    	$equipo->victorias = $datosForm->victorias;
    	$equipo->derrotas = $datosForm->derrotas;

    	//guardar en la bd
    	$equipo->save();
/*
    	//devolver la vista clasificacion
    	$equipos = Equipos:All()->sortByDesc('puntos');

    	return view('clasificacion',['listaEquipos' => $equipos]);
*/
    	return redirect()->route('clasificacion');
    }
}
