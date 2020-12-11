<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use DB;
class AlimentosController extends Controller
{ 
    /*ADMINISTRADOR PRODUCTOS*/
        public function alimentos_mostrar()
	{
		$alimentos=DB::select('select alimentos.id_alimento,alimentos.nombre_alimento,alimentos.id_categoria,alimentos.descripcion,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.eliminado!=1');
		return view('/Administrador/Alimentos/index',compact('alimentos'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_alimento'];
        $eliminado=1;
		$query=DB::update("update alimentos set  eliminado='$eliminado' where id_alimento=?",[$id]);
		return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
	}
    
     public function mostrar_insertar()
	{  
		return view('/Administrador/Alimentos/insertar');
    }
    
    
	public function insertar(Request $input)
	{
       
        
        $nombre_alimento = $input['nombre_alimento'];
        $id_categoria = $input['id_categoria'];
        $descripcion = $input['descripcion'];
        $color = $input['color'];
        $talla = $input['talla'];
        $precio = $input['precio'];
        $eliminado = 0;
        $disponible=$input['disponible'];
        
       
        $imagen="";
        $i=0;
        $j=0;
        $dispon="";
        if(empty($disponible))
        {
            $dispon=0;
        }
        else
        {
            $dispon=1;
        }

         if($input->hasFile('fotografia_miniatura'))
         {
             $file=$input->file('fotografia_miniatura');
             $name=time().'_'.$nombre_alimento;
             $file->move(public_path().'/img/',$name);
             $foto=$name;
        
             $query=DB::insert('insert into alimentos (id_alimento, id_categoria, descripcion, fotografia_miniatura, precio, color, talla, eliminado, nombre_alimento,disponible) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_categoria, $descripcion, $foto, $precio, $color, $talla, $eliminado, $nombre_alimento, $dispon]);
            /*Ingresar a la tabla imagenes_muestra*/
             $id=DB::select('select id_alimento from alimentos order by id_alimento desc limit 1');
             $id_alimento=$id[0]->id_alimento;
        
        if($input->hasFile('miarchivo'))
        {
              foreach($input->file('miarchivo') as $files)
            {
                $nombre=time()+$i."_".$nombre_alimento;
                $files->move(public_path().'/img/',$nombre);
                $imagen=$nombre;
                $query2=DB::insert('insert into imagenes_de_muestra (id_imagen_muestra, id_alimento, imagen_muestra) values( ?, ?, ?)', [null, $id_alimento, $imagen]);
                $imagen="";
                 $i++;
            }
           
        }
             
        if($input->hasFile('miarchivo2'))
        {
              foreach($input->file('miarchivo2') as $file2)
            {
                $nombre2=time()+$j."color_".$nombre_alimento;
                $file2->move(public_path().'/img/',$nombre2);
                $imagen2=$nombre2;
                $query3=DB::insert('insert into imagenes_color (id_imagen_color, id_alimento, imagen_color) values( ?, ?, ?)', [null, $id_alimento, $imagen2]);
                $imagen="";
                 $j++;
            }
        }
         return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
      }
	}

      public function mostrar_actualizar()
	{
        $id=$_GET['alimento'];
        $alimentos=DB::select("select * from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.id_alimento=$id");
		return view('/Administrador/Alimentos/actualizar',compact('alimentos'));
    }
    
	public function actualizar(Request $input)
	{	    
        $id_alimento=$input['id_alimento'];
        $id_categoria = $input['id_categoria'];
        $nombre_alimento=$input['nombre_alimento'];
        $descripcion=$input['descripcion'];
        $talla=$input['talla'];
        $color=$input['color'];
        $precio=$input['precio'];
        $eliminado=$input['eliminado'];
        $disponible=$input['disponible'];
        
        $dispon="";
        if(empty($disponible))
        {
            $dispon=0;
        }
        else
        {
            $dispon=1;
        }
        
        if($input->hasFile('fotografia_miniatura'))
        {
            $file=$input->file('fotografia_miniatura');
            $name=time()."_".$nombre_alimento;
            $file->move(public_path().'/img/',$name);
            $foto=$name;
            
            $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento',  descripcion='$descripcion', color='$color', talla='$talla', fotografia_miniatura='$foto', precio='$precio', eliminado='$eliminado',  disponible='$dispon' where id_alimento=?",[$id_alimento]);
            return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
        }
        else
        {
            $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento', descripcion='$descripcion', color='$color', talla='$talla', precio='$precio', eliminado='$eliminado' , disponible='$dispon' where id_alimento=?",[$id_alimento]);
            return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
        }
	}
    
/*_---------------------------------------------------------------------------------------------------------------------------------*/    
    /*MOSTRAR EN LA VENTANA PRINCIPAL INDEX*/
    
    public function mostrar_principal()
    {
        /*Viejo*/
        $oViejos = new \stdClass();
        $aViejos = array();
        $aImagenes_viejo = array();
        $auxidviejo = -1;
        /*Nuevo*/
        $oNuevos = new \stdClass();
        $aNuevos= array();
        $aImagenes_nuevo = array();
        $auxidnuevo = -1;
        
		//$nuevos=DB::select('select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos group by alimentos.id_alimento desc limit 4) as t) order by alimentos.id_alimento DESC');
        
        $nuevos=DB::select("select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos group by alimentos.id_alimento desc limit 4) as t) order by alimentos.id_alimento DESC");
        
        //$viejos=DB::select('select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos group by id_alimento asc limit 4) as t)order by alimentos.id_alimento asc');
        
        $viejos=DB::select("select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos group by id_alimento asc limit 4) as t)order by alimentos.id_alimento asc");
        
          foreach($viejos as $viejo)
          {
               if($viejo->id_alimento!==$auxidviejo && $auxidviejo!==-1)
               {
                  $oViejos->imagen_muestra = $aImagenes_viejo;
                  array_push($aViejos,$oViejos);
                  $oViejos = new \stdClass();
                  $aImagenes_viejo= array();
                  array_push($aImagenes_viejo, $viejo->imagen_muestra);
               }
              else{
                  array_push($aImagenes_viejo, $viejo->imagen_muestra);
              }
              $auxidviejo = $viejo->id_alimento;
              $oViejos->nombre_alimento = $viejo->nombre_alimento;
              $oViejos->precio = $viejo->precio;
              $oViejos->fotografia_miniatura = $viejo->fotografia_miniatura;
              $oViejos->nombre_categoria = $viejo->nombre_categoria;
              $oViejos->id_alimento = $viejo->id_alimento;
              if($viejo === end($viejos))
              {
                    $oViejos->imagen_muestra = $aImagenes_viejo;
                    array_push($aViejos,$oViejos);
              }
          }
        
        /************************************************************************************/
            foreach($nuevos as $nuevo)
          {
               if($nuevo->id_alimento!==$auxidnuevo && $auxidnuevo!==-1)
               {
                  $oNuevos->imagen_muestra = $aImagenes_nuevo;
                  array_push($aNuevos,$oNuevos);
                  $oNuevos = new \stdClass();
                  $aImagenes_nuevo= array();
                  array_push($aImagenes_nuevo, $nuevo->imagen_muestra);
               }
              else{
                  array_push($aImagenes_nuevo, $nuevo->imagen_muestra);
              }
              $auxidnuevo = $nuevo->id_alimento;
              $oNuevos->nombre_alimento = $nuevo->nombre_alimento;
              $oNuevos->precio = $nuevo->precio;
              $oNuevos->fotografia_miniatura = $nuevo->fotografia_miniatura;
              $oNuevos->id_alimento = $nuevo->id_alimento;
              $oNuevos->nombre_categoria = $nuevo->nombre_categoria;
              if($nuevo === end($nuevos))
              {
                    $oNuevos->imagen_muestra = $aImagenes_nuevo;
                    array_push($aNuevos,$oNuevos);
              }
          }
        //print_r($aNuevos);
        //die();
        
		return view('/principal/index',compact('aNuevos','aViejos')); 
    }
    
    /*Informacion del platillo*/
    
    public function mostrar_platillo()
    {
        
        $oSimilares = new \stdClass();
        $aSimilares= array();
        $aImagenes_similar = array();
        $auxidsimilar = -1;
        
        $id_producto=$_GET['producto'];
            
        $productos=DB::select("select * from alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where id_alimento=$id_producto");
        
        $id_categoria=$productos[0]->id_categoria;
        $fotos_muestra=DB::select("SELECT imagenes_de_muestra.imagen_muestra FROM alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento where alimentos.id_alimento=$id_producto");
        
        $fotos_color=DB::select("SELECT imagenes_color.imagen_color FROM alimentos inner join imagenes_color on alimentos.id_alimento=imagenes_color.id_alimento where alimentos.id_alimento=$id_producto");
        
        //$similares=DB::select("select * from alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where categoria.nombre_categoria='$categoria' && id_alimento!=$id_platillo limit 4");
        //$similares=DB::select("select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_alimento in (select id_alimento from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where categoria.id_categoria='$id_categoria' and alimentos.id_alimento!=$id_producto)");
        $similares=DB::select("select alimentos.id_alimento,alimentos.id_categoria,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where categoria.id_categoria='$id_categoria' and alimentos.id_alimento!=$id_producto LIMIT 0,4)as t)");
        
           foreach($similares as $similar)
          {
               if($similar->id_alimento!==$auxidsimilar && $auxidsimilar!==-1)
               {
                  $oSimilares->imagen_muestra = $aImagenes_similar;
                  array_push($aSimilares,$oSimilares);
                  $oSimilares = new \stdClass();
                  $aImagenes_similar= array();
                  array_push($aImagenes_similar, $similar->imagen_muestra);
               }
              else{
                  array_push($aImagenes_similar, $similar->imagen_muestra);
              }
              $auxidsimilar = $similar->id_alimento;
              $oSimilares->nombre_alimento = $similar->nombre_alimento;
              $oSimilares->precio = $similar->precio;
              $oSimilares->fotografia_miniatura = $similar->fotografia_miniatura;
              $oSimilares->id_alimento = $similar->id_alimento;
             $oSimilares->id_categoria = $similar->id_categoria;
              $oSimilares->nombre_categoria = $similar->nombre_categoria;
              if($similar === end($similares))
              {
                    $oSimilares->imagen_muestra = $aImagenes_similar;
                    array_push($aSimilares,$oSimilares);
              }
          }
        //print_r($aSimilares);
        //die();
        
        
        return view('/principal/producto',compact('productos','fotos_muestra','fotos_color','aSimilares'));
    }
    
    
    /*Mostrar en la tienda*/
    public function mostrar_tienda($pagina=1,$categoria='')
    {
        $oSimilares = new \stdClass();
        $aSimilares= array();
        $aImagenes_similar = array();
        $auxidsimilar = -1;
        
        //$nuevos=DB::select('select * from alimentos order by id_alimento desc limit 6');
		//return view('/principal/tienda',compact('nuevos','categorias')); 
        
        if($pagina<=0 )
        {
            $pagina=1;
        }
        $valor=($pagina*4)-4;
        

            if($categoria!='')
            {
                 $similares=DB::select("select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where categoria.id_categoria='$categoria' LIMIT $valor,4)as t)");
                
                 foreach($similares as $similar)
                {
                       if($similar->id_alimento!==$auxidsimilar && $auxidsimilar!==-1)
                       {
                          $oSimilares->imagen_muestra = $aImagenes_similar;
                          array_push($aSimilares,$oSimilares);
                          $oSimilares = new \stdClass();
                          $aImagenes_similar= array();
                          array_push($aImagenes_similar, $similar->imagen_muestra);
                       }
                      else{
                          array_push($aImagenes_similar, $similar->imagen_muestra);
                      }
                      $auxidsimilar = $similar->id_alimento;
                      $oSimilares->nombre_alimento = $similar->nombre_alimento;
                      $oSimilares->precio = $similar->precio;
                      $oSimilares->fotografia_miniatura = $similar->fotografia_miniatura;
                      $oSimilares->id_alimento = $similar->id_alimento;
                      $oSimilares->nombre_categoria = $similar->nombre_categoria;
                      if($similar === end($similares))
                      {
                            $oSimilares->imagen_muestra = $aImagenes_similar;
                            array_push($aSimilares,$oSimilares);
                      }
                }

                 $numero_platillos=DB::select("select count(*)as numero_platillos from alimentos where id_categoria=$categoria");
                
                 return view('/principal/productos',compact('aSimilares','pagina','categoria','numero_platillos'));
            }
            else{
                 //$alimentos=DB::select("SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria, alimentos.precio, alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 limit $valor,12");
                
                  $similares=DB::select("select alimentos.id_alimento,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria,imagenes_de_muestra.id_imagen_muestra,alimentos.nombre_alimento,imagenes_de_muestra.imagen_muestra from alimentos inner join imagenes_de_muestra on alimentos.id_alimento=imagenes_de_muestra.id_alimento inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_alimento in (select id_alimento from (select id_alimento from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria LIMIT $valor,4)as t)");
                
                   foreach($similares as $similar)
                {
                       if($similar->id_alimento!==$auxidsimilar && $auxidsimilar!==-1)
                       {
                          $oSimilares->imagen_muestra = $aImagenes_similar;
                          array_push($aSimilares,$oSimilares);
                          $oSimilares = new \stdClass();
                          $aImagenes_similar= array();
                          array_push($aImagenes_similar, $similar->imagen_muestra);
                       }
                      else{
                          array_push($aImagenes_similar, $similar->imagen_muestra);
                      }
                      $auxidsimilar = $similar->id_alimento;
                      $oSimilares->nombre_alimento = $similar->nombre_alimento;
                      $oSimilares->precio = $similar->precio;
                      $oSimilares->fotografia_miniatura = $similar->fotografia_miniatura;
                      $oSimilares->id_alimento = $similar->id_alimento;
                      $oSimilares->nombre_categoria = $similar->nombre_categoria;
                      if($similar === end($similares))
                      {
                            $oSimilares->imagen_muestra = $aImagenes_similar;
                            array_push($aSimilares,$oSimilares);
                      }
                }
                
                 $numero_platillos=DB::select('select count(*)as numero_platillos from alimentos');
                
                 return view('/principal/productos',compact('aSimilares','pagina','categoria','numero_platillos'));
            }
         
    }
    
}
