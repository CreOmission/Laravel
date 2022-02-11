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

    public function borrar($id){
        $e = equipo::find($id);

        //del quipo sacamos los jugadores y borramos
        foreach ($e->jugadores as $jugador) {
            $jugador->delete();
        }
        $e->delete();

        return view('dashboard',['le' => Equipo::All()]);
    }



    public function modificar($id){
        $e = equipo::find($id);

        return view('formularioCrearEquipo',['equipo'=>$e]);
    }




    public function modificarGuardarBD(Request $datos, $id){
        $e = equipo::find($id);

        $e->nombre = $datos->nombre;
        $e->entrenador = $datos->entrenador;
        $e->categoria = $datos->categoria;

        $e->save();
            //revisar esto
        return redirect()->route('dashboard');
    }
}
