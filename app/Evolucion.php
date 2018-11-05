<?php

namespace Pokeapp;

use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
    //
    protected $table = 'evoluciones';
    
    protected $fillable = [
        'nombre', 'tipo', 'descripcion', 'imagen', 'rango'
    ];
    
    public function pokemons(){
        return $this->belongsToMany('Pokeapp\Pokemon');
    }
}
