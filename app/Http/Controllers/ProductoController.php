<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    public function productos_mostrar()
	{
		$productos=DB::select('select * from producto');
		return view('/Administrador/Producto/index',compact('productos'));
    }

	public function eliminar(Request $input)
    {
		$id_producto=$input['id_producto'];
		$query=DB::delete("delete from producto where id_producto=?",[$id_producto]);
		return redirect()->action('ProductoController@productos_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $nombre = $input['nombre'];
        $descripcion = $input['descripcion'];
        
        
        if($input->hasFile('fotografia_miniatura'))
         {
             $file=$input->file('fotografia_miniatura');
             $name=time().'_'.$nombre;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
        
        $query=DB::insert('insert into producto (id_producto, nombre, descripcion, imagen_producto) values ( ?, ?, ?, ?)', [null, $nombre, $descripcion, $foto]);
        return redirect()->action('ProductoController@productos_mostrar')->withInput();
        }
        
	}

	public function actualizar(Request $input)
	{	    
        $id_producto=$input['id_producto'];
        $nombre = $input['nombre'];
        $descripcion=$input['descripcion'];
        
        if($input->hasFile('fotografia_miniatura'))
         {
             $file=$input->file('fotografia_miniatura');
             $name=time().'_'.$nombre;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
        
        $query=DB::update("update producto set nombre='$nombre', descripcion='$descripcion' , imagen_producto='$foto' where id_producto=?",[$id_producto]);
        return redirect()->action('ProductoController@productos_mostrar')->withInput();
            
        }
        else
        {
                    $query=DB::update("update producto set nombre='$nombre', descripcion='$descripcion' where id_producto=?",[$id_producto]);
                    return redirect()->action('ProductoController@productos_mostrar')->withInput();
        }
	}
}
