<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonEvolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_evolucion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pokemon_id')->unsigned();
            $table->integer('evolucion_id')->unsigned();
            $table->timestamps();
            //relation
            $table->foreign('pokemon_id')->references('id')->on('pokemons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('evolucion_id')->references('id')->on('evoluciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_evolucion');
    }
}
