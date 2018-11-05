<?php

namespace Pokeapp;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    protected $fillable = [
        'name', 'email', 'password', 'lvl', 'avatar', 'pokemon_id'
    ];

    public function pokemons(){
        return $this->belongsToMany('Pokeapp\Pokemon');
    }
    public function medallas(){
        return $this->belongsToMany('Pokeapp\Medalla');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
