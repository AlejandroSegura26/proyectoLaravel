<?php

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
//RUTA PARA ACCESAR A UN CONTROLADOR QUE INVOCA A UN MODELO LLAMADO CATEGORIA
Route::get('categoria', 'CategoriaController@index');
//RUTA PARA ACCESAR AL METODO STORE DEL CONTROLADOR CategoriaController
Route::post('categoria/registrar', 'CategoriaController@store');
//RUTA PARA ACCESAR AL METODO UPDATE DEL CONTROLADOR CategoriaController
Route::put('categoria/actualizar', 'CategoriaController@update');
//RUTA PARA ACTIVAR REGISTRO A PARITR DEL METODO "ACTIVAR" DEL CONTROLADOR CategoriaController
Route::put('categoria/activar', 'CategoriaController@activar');
//RUTA PARA DESACTIVAR REGISTRO A PARITR DEL METODO "DESACTIVAR" DEL CONTROLADOR CategoriaController
Route::put('categoria/desactivar', 'CategoriaController@desactivar');
//RUTA PARA MOSTRAR LAS CATEGORIAS A PARITR DEL METODO "SELECTCATEGORIA" DEL CONTROLADOR CategoriaController
Route::get('categoria/selectCategoria', 'CategoriaController@selectCategoria');
//RUTA PARA CREAR UN REPORTE EN PDF
Route::get('categoria/listarPdf','CategoriaController@listarPdf')->name('categorias_pdf');

/*LO MISMO PARA ARTICULO ----------------------------------------------------------------------*/
Route::get('articulo', 'ArticuloController@index');
Route::get('articulo/selectArticulo', 'ArticuloController@selectArticulo');
Route::post('articulo/registrar'. 'ArticuloController@store');
Route::put('articulo/actualizar', 'ArticuloController@update');
Route::put('articulo/activar', 'ArticuloController@activar');
Route::put('articulo/desactivar', 'ArticuloController@desactivar');
Route::get('articulo/listarPdf','ArticuloController@listarPdf')->name('articulos_pdf');
/*----------------------------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('contenido/contenido');
});

Route::get('/usr2/{id}', function ($id) {
    return "Mostrando datos del usuario: {$id}";
})->where ('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if($nickname){
      return "Saludos {$name} tu nickname es {$nickname}";
    }else{
      return "Saludos {$name} tú no tienes apodo";
    }
});
