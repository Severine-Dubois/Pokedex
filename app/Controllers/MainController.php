<?php

namespace Pokedex\Controllers;
use Pokedex\Models\Pokemon;
use Pokedex\Models\PokemonType;
use Pokedex\Models\Type;

class MainController extends CoreController 
{
    /** Class to display home page 
     * @return void;
    */

    public function home() {

        $pokemons = Pokemon::findAll();

        $data = [
            'pokemons' => $pokemons,
        ];

        $this->show('main/home', $data);
    }

}