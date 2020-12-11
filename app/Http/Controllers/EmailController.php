<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
        /*MENSAJE PARA NOSOTROS*/
        $subject ='Mensaje por pagina web';
        $for = "juanjesuspadrondiaz@gmail.com";
        Mail::send('/principal/correo_contacto',$request->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com");
            $msj->subject($subject);
            $msj->to($for);
        });

        return redirect()->back();
    }
}
