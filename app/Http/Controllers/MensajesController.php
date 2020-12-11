<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MensajesController extends Controller
{
    public function mensajes_mostrar()
	{
		$mensajes=DB::select('select * from mensajes ');
		return view('/Administrador/Mensaje/index',compact('mensajes'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_mensaje'];
		//$query=DB::update("update categoria set eliminado='$eliminado' where id_categoria=?",[$id]);
		$query=DB::update("DELETE FROM mensajes where id_mensaje=?",[$id]);
		return redirect()->action('MensajesController@mensajes_mostrar')->withInput();
	}
    
	/*public function insertar(Request $input)
	{
        $nombre_categoria = $input['nombre_categoria'];
        $categoria_padre = $input['categoria_padre'];
        $eliminado = 0;
        
        $query=DB::insert('insert into categoria (id_categoria, nombre_categoria, categoria_padre, eliminado) values ( ?, ?, ?, ?)', [null, $nombre_categoria, $categoria_padre, $eliminado]);
        return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}*/

	/*public function actualizar(Request $input)
	{	    
        $id_categoria=$input['id_categoria'];
        $nombre_categoria = $input['nombre_categoria'];
        //$categoria_padre=$input['categoria_padre'];
        $eliminado=$input['eliminado'];
        
        $query=DB::update("update categoria set nombre_categoria='$nombre_categoria', eliminado='$eliminado' where id_categoria=?",[$id_categoria]);
        return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}*/
}
