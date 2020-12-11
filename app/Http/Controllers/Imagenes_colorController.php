<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File; 
use DB;
class Imagenes_colorController extends Controller
{
    public function imagenes_de_color_mostrar($id_alimento)
	{
		$imagenes=DB::select("select imagenes_color.id_imagen_color,alimentos.id_alimento, imagenes_color.imagen_color,alimentos.nombre_alimento from imagenes_color inner join alimentos on alimentos.id_alimento=imagenes_color.id_alimento where alimentos.id_alimento=$id_alimento");
        
        $json=json_encode($imagenes);
		return response()->json($json);
        //return Response::json(['data'=>$json]);
    }

	public function eliminar(Request $input)
    {
		$id_imagen_color=$input['id_imagen_color'];
        $query2=DB::select("select * from imagenes_color where id_imagen_color='$id_imagen_color'");
        $foto=$query2[0]->imagen_color;
        
        
        //File::delete(public_path().'/../../public_html'.$foto);
        File::delete(public_path().'/img/',$foto);
		$query=DB::update("DELETE FROM imagenes_color where id_imagen_color=?",[$id_imagen_color]);
		//return redirect()->action('Imagenes_muestraController@imagenes_de_muestra_mostrar')->withInput();
        //return response()->json(['mensaje' => 'satisfactorio']);
         
	}
    
	public function insertar(Request $input)
	{
        $foto="";
        $i=0;
        $files=$input->file;
        $id_alimento=$input->id_alimento;
        //var_dump($file);
    
        $query2=DB::select("select *  FROM alimentos WHERE id_alimento='$id_alimento'");
        $nombre=$query2[0]->nombre_alimento;
        
         if(empty($files))
         {
             echo "No Hay archivos";

         }
        else
        {
            foreach($files as $file)
             {
                 $name=time()+$i."color_".$nombre;
                 $file->move(public_path().'/img/',$name);
                 $foto=$name;
                 
                $query=DB::insert('insert into imagenes_color(id_imagen_color, id_alimento, imagen_color) values ( ?, ?, ?)', [null, $id_alimento, $foto]);
                $foto="";
                $i++;
             }
            
            
            $imagenes=DB::select("select imagenes_color.id_imagen_color,alimentos.id_alimento, imagenes_color.imagen_color,alimentos.nombre_alimento from imagenes_color inner join alimentos on alimentos.id_alimento=imagenes_color.id_alimento where alimentos.id_alimento=$id_alimento");
        
        $json=json_encode($imagenes);
		return response()->json($json);
        }    
	}
}
