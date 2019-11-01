<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if ($buscar==''){
        $articulos = Articulo::orderBy('id', 'desc')->paginate(10);
        }
        else{
        $articulos = Articulo::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(10);
        }

        return [
            'pagination' => [
            'total' => $articulos->total(),
            'current_page' => $articulos->currentPage(),
            'per_page' => $articulos->perPage(),
            'last_page' => $articulos->lastPage(),
            'from' => $articulos->firstItem(),
            'to' => $articulos->lastItem(),],
            'articulos' => $articulos];
            
    }

    public function selectArticulo(Request $request){
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::where('condicion','=','1')
        ->select('id','nombre')->orderBy('nombre', 'asc')->get();
        return ['articulos' => $articulos];
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = new Articulo();
        $articulos->codigo = $request->codigo;
        $articulos->nombre = $request->nombre; //Accesar a los datos
        $articulos->precio_venta = $request->precio_venta;
        $articulos->stock = $request->stock;
        $articulos->descripcion = $request->descripcion;
        $articulos->condicion = '1';
        $articulos->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::findOrFail($request->id);
        $articulos->codigo = $request->codigo;
        $articulos->nombre = $request->nombre; //Accesar a los datos
        $articulos->precio_venta = $request->precio_venta;
        $articulos->stock = $request->stock;
        $articulos->descripcion = $request->descripcion;
        $articulos->condicion = '1';

        $articulos->save();
    }

    //ACTIVAR
    public function activar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::findOrFail($request->id);
        $articulos->condicion = '1';
        $articulos->save();
    }

    //DESACTIVAR
    public function desactivar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::findOrFail($request->id);
        $articulos->condicion = '0';
        $articulos->save();
    }
}
