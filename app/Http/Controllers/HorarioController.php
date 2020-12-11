<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HorarioController extends Controller
{
    public function horario_mostrar()
	{
		$horarios=DB::select('select * from horario');
		return view('/Administrador/Horario/index',compact('horarios'));
    }


	public function actualizar(Request $input)
	{	    
        $id_horario=$input['id_horario'];
        $hora_inicial = $input['hora_inicial'];
        $hora_final = $input['hora_final'];
        
        //$categoria_padre=$input['categoria_padre'];
        
        
        $query=DB::update("update horario set hora_inicial='$hora_inicial', hora_final='$hora_final' where id_horario=?",[$id_horario]);
        return redirect()->action('HorarioController@horario_mostrar')->withInput();
	}
}
