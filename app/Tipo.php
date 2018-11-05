<?php

namespace Pokeapp;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
    protected $table = 'tipos';
    
    protected $fillable = [
        'name', 'descripcion'
    ];
    public function pokemon()
    {
        return $this->hasOne('Pokeapp\Pokemon');
    }
}
