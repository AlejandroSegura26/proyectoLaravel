<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable =[
        'codigo', 'nombre', 'precio_venta', 'stock', 'descripcion', 'condicion'
];
public function clientes(){
    return $this->hasMany('App\Cliente');
}
}
