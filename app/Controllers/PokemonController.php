<?php

namespace Pokedex\Controllers;
use Pokedex\Models\Pokemon;
use Pokedex\Models\PokemonType;
use Pokedex\Models\Type;

class PokemonController extends CoreController 
{
    /** Class to display home page 
     * @return void;
    */

    public function pokemon($params) {

        $id = $params;

        $pokemonType = PokemonType::findAllPokemonByNumber($id);
        $pokemon = Pokemon::find($id);
        $types = Type::findAll();

        $data = [
            'pokemon' => $pokemon,
            'pokemon_type' => $pokemonType,
            'types' => $types,
            'title' => $pokemon->getName(),
        ];

        $this->show('pokemon/pokemon', $data);
    }

    public function typeList() {

        $types = Type::findAll();

        $data = [
            'types' => $types,
            'title' => 'Sélection du type',
        ];

        $this->show('pokemon/typelist', $data);
    }

    public function pokemonType($params) {

        $id = $params;

        $pokemons = Pokemon::findAll();
        $type = Type::find($id);

        $pokemonTypeObject = new PokemonType();
        $pokemonType = $pokemonTypeObject->findAllPokemonByTypeId($id);


        $data = [
            'typeId' => $type,
            'id' => $id,
            'pokemons' => $pokemons,
            'pokemon_type' => $pokemonType,
            'title' => 'Pokémons de type ' . $type->getName(),
        ];

        $this->show('pokemon/type', $data);
    }
}