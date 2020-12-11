<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;
use DateTime; 


class EmailController extends Controller
{

     //$now= new DateTime(); 
    //echo $now->format('Y-m-d H:i:s'); 
        //echo $fecha;
    
    public function contact(Request $request){
        $dia=date('d');
        $mes=date('m');
        $anio=date('Y');
   
        $fecha=$anio.'-'.$mes.'-'.$dia;
        
        /*MENSAJE PARA NOSOTROS*/
        $subject ='Mensaje de la página web DQ';
        $for = "juanjesuspadrondiaz@gmail.com";
        Mail::send('/principal/correo_contacto',$request->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com");
            $msj->subject($subject);
            $msj->to($for);
        });
        
        $mensaje = $request['mensaje'];
        $nombre = $request['nombre'];
        $email = $request['email'];
        $telefono = $request['telefono'];
        
        $query=DB::insert('insert into mensajes (id_mensaje, nombre, email, telefono, mensaje, fecha) values ( ?, ?, ?, ?, ?, ?)', [null, $nombre, $email, $telefono, $mensaje, $fecha]);
        

        return redirect()->back();
    }
}
