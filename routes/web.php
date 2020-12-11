<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*PRINCIPAL*/
/*Route::get('/', function () {
    return view('/principal/index');
});*/
Route::get('/','AlimentosController@mostrar_principal');

/*ACERCA DE*/
Route::get('/acercade', function () {
    return view('/principal/acercade');
});

/*CONTACTO*/
Route::get('/contacto', function () {
    return view('/principal/contacto');
});

/*VISTA DE INFORMACION DEL Producto*/
Route::get('/info_producto','AlimentosController@mostrar_platillo');
/*PRODUCTO*/
//Route::get('/producto', function () {
//    return view('/principal/producto');
//});

/*CATALOGO*/
//Route::get('/catalogo', function () {
//    return view('/principal/productos');
//});

/*VISTA DE TIENDA*/
Route::get('/tienda/{pagina?}/{categoria?}','AlimentosController@mostrar_tienda');

/*Loguin*/
Route::get('/danielquijanosesion', function () {
    return view('/principal/login');
});

//---------------------------------------------------------------------------------------------------------
    /*VISTA PRINCIPAL*/
//Route::get('/','AlimentosController@mostrar_principal');
/*VISTA DE TIENDA*/
//Route::get('/tienda/{pagina?}/{categoria?}/{buscar?}','AlimentosController@mostrar_tienda');
/*VISTA CONTACTOS*/
//Route::get('/contacto', function () {
  //  return view('/principal/contacto');
//});
/*MANDAR CONTACTOS*/
//Route::post('/contactar', 'EmailController@contact')->name('contact');
/*VISTA DE ACERCA DE*/
//Route::get('/acerca_de', function () {
//    return view('/principal/acerca_De');
//});

/*VISTA DEL CARRITO DE COMPRAS*/
//Route::get('/carrito_compras', function () {
//    return view('/principal/carrito_compras');
//});
/*VISTA PARA PAGAR LAS COMPRAS*/
//Route::get('/pagar', function () {
//    return view('/principal/pagar');
//});
/*FORMA PARA LOGIN*/
//Route::get('/Administrador_login', function () {
//    return view('/principal/login');
//});

/*Poder iniciar sesion*/
Route::post('/Admin_consola', 'LoguinController@login')->name('logueo');

/*CERRAR SESION*/
Route::get('/cerrar_sesion','LoguinController@Logout');

/*APARTADO PARA EL ADMINISTRADOR*/
/*INICIO PARA LA VENTANA DEL ADMINISTRADOR*/
Route::get('/Admin_restaurante', function () {
    return view('/Administrador/index');
});

/*FUNCIONES DEL CLIENTE*/

//Route::get('/info_carrito/{id?}','CarritoController@mostrar_producto_carrito');
//Route::post('/info_carrito','CarritoController@mostrar_producto_carrito');
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*ADMINISTRADOR ALIMENTOS*/

Route::get('/admin_alimentos','AlimentosController@alimentos_mostrar')->middleware('admin:1')->name('admin_alimentos');
Route::post('/admin_alimentos_borrar','AlimentosController@eliminar');
Route::get('/agregar_alimento','AlimentosController@mostrar_insertar')->middleware('admin:1')->name('agregar_alimento');
Route::post('/Admin_alimentos_nuevo','AlimentosController@insertar')->name('Admin_alimentos_nuevo');


Route::get('/actualizar_alimento','AlimentosController@mostrar_actualizar')->middleware('admin:1')->name('actualizar_alimento');
Route::post('/Admin_alimentos_editar','AlimentosController@actualizar')->name('Admin_alimentos_editar');

/*ADMINISTRADOR CATEGORIA*/

Route::get('/admin_categoria','CategoriaController@categorias_mostrar')->middleware('admin:1')->name('admin_categoria');
Route::post('/Admin_categoria_borrar','CategoriaController@eliminar');
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*ADMINISTRADOR MENSAJERIA*/
Route::get('/admin_mensaje','MensajesController@mensajes_mostrar')->middleware('admin:1')->name('admin_categoria');
Route::post('/Admin_mensaje_borrar','MensajesController@eliminar');
//Route::post('/Admin_mensaje_nuevo','CategoriaController@insertar');


/*ADMINISTRADOR HORARIO*/
//Route::get('/admin_horario','HorarioController@horario_mostrar')->middleware('admin:1')->name('admin_horario');
//Route::post('/admin_horario_editar','HorarioController@actualizar');

/*ADMINISTRADOR METODO DE PAGO*/
//Route::get('/admin_metodo_de_pago','Metodo_de_pagoController@metodo_pago_mostrar')->middleware('admin:1')->name('admin_metodo_de_pago');
//Route::post('/admin_metodo_de_pago_eliminar','Metodo_de_pagoController@eliminar');
//Route::post('/Admin_metodo_de_pago_insertar','Metodo_de_pagoController@insertar');
//Route::post('/Admin_metodo_de_pago_actualizar','Metodo_de_pagoController@actualizar');

/*ADMINISTRADOR PRODUCTO*/

//Route::get('/admin_producto','ProductoController@productos_mostrar')->middleware('admin:1')->name('admin_producto');
//Route::post('/Admin_producto_borrar','ProductoController@eliminar');
//Route::post('/Admin_producto_nuevo','ProductoController@insertar');
//Route::post('/Admin_producto_editar','ProductoController@actualizar');

/*ADMINISTRADOR DE IMAGENES MUESTRA*/
Route::get('/admin_imagenes_muestra/{alimento?}','Imagenes_muestraController@imagenes_de_muestra_mostrar')->middleware('admin:1')->name('admin_imagenes_muestra');
Route::post('/admin_imagenes_muestra_eliminar','Imagenes_muestraController@eliminar')->name('admin_imagenes_muestra_eliminar');
Route::post('/Admin_imagenes_muestra_insertar','Imagenes_muestraController@insertar')->name('Admin_imagenes_muestra_insertar');

/*ADMINISTRADOR DE IMAGENES COLOR*/
Route::get('/admin_imagenes_color/{alimento?}','Imagenes_colorController@imagenes_de_color_mostrar')->middleware('admin:1')->name('admin_imagenes_color');
Route::post('/admin_imagenes_color_eliminar','Imagenes_colorController@eliminar')->name('admin_imagenes_color_eliminar');
Route::post('/Admin_imagenes_color_insertar','Imagenes_colorController@insertar')->name('Admin_imagenes_color_insertar');
