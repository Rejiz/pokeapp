<?php

namespace Pokeapp;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    //
    
    protected $table = 'pokemons';
   
    protected $fillable = [
        'nombre', 'tipo_id', 'peso', 'altura', 'lvl', 'imagen', 'poderes'
    ]; 

    public function users(){
        return $this->belongsToMany('Pokeapp\User'); 
    }
    public function tipo()
    {
        return $this->hasOne('Pokeapp\Tipo');
    }
    public function evoluciones(){
        return $this->belongsToMany('Pokeapp\Evolucion');
    }
}
