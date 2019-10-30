<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable =[
            'codigo', 'nombre', 'precio_venta', 'stock', 'descripcion', 'condicion'
    ];

    public function articulos(){
        return $this->hasMany('App\Articulo');
    }
}