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
 
Route::get('categoria', 'CategoriaController@index');
Route::post('categoria/registrar', 'CategoriaController@store');
Route::put('categoria/actualizar', 'CategoriaController@update');
Route::put('categoria/activar', 'CategoriaController@activar');
Route::put('categoria/desactivar', 'CategoriaController@desactivar');
Route::get('categoria/selectCategoria', 'CategoriaController@selectCategoria');
Route::get('categoria/listarPdf','CategoriaController@listarPdf')->name('categorias_pdf');

Route::get('articulo', 'ArticuloController@index');
Route::get('articulo/selectArticulo', 'ArticuloController@selectArticulo');
Route::post('articulo/registrar', 'ArticuloController@store');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
