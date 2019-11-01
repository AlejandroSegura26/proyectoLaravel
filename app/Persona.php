<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable =[
        'nombre', 'tipo_documento', 'num_documento', 'direccion', 'telefono', 'email'
    ];

    public function personas()
    {
        return $this->hasMany('App\Persona');
    }
}