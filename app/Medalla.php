<?php

namespace Pokeapp;

use Illuminate\Database\Eloquent\Model;

class Medalla extends Model
{
    //
    protected $table = 'medallas';
    
    protected $fillable = [
        'nombre', 'imagen'
    ];
    
    public function users(){
        return $this->belongsToMany('Pokeapp\User');
    }
}
