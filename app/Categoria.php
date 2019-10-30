<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//MODELO CATEGORIA
class Categoria extends Model
{
    protected $fillable =[
    		'nombre', 'descripcion', 'condicion'
    ];

    public function categorias(){
    	return $this->hasMany('App\Categoria');
    }
}
