<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use DB;

class CarritoController extends Controller
{
   public function mostrar_producto_carrito(Request $input)
    {
		$id=$input['id'];
		$info=DB::select("select id_alimento,fotografia_miniatura,precio,nombre_alimento from alimentos
        where id_alimento=$id");
        //print_r($info);
        
        $json=json_encode($info);

       //return response('Hola pp') ;
		return response()->json($json);
        
        //return Response::json(['data'=>$json]);
       //ob_clean();
       //header_remove();
        //echo json_encode( "Hola mundo");
       //exit();
    }
}
