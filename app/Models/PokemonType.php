<?php 

namespace Pokedex\Models;

class PokemonType extends CoreModel
{   
    /**
     * Entry number in the pokedex
     * @var int
     */
    private $pokemon_number;

    /**
     * Id of Pokemon type
     * @var int
     */
    private $type_id;

    /**
     * Get entry number in the pokedex
     *
     * @return  int
     */ 
    public function getPokemonNumber()
    {
        return $this->pokemon_number;
    }

    /**
     * Set entry number in the pokedex
     *
     * @param  int  $pokemon_number  Entry number in the pokedex
     *
     * @return  self
     */ 
    public function setPokemonNumber(int $pokemon_number)
    {
        $this->pokemon_number = $pokemon_number;

        return $this;
    }

    /**
     * Get id of Pokemon type
     *
     * @return  int
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set id of Pokemon type
     *
     * @param  int  $type_id  Id of Pokemon type
     *
     * @return  self
     */ 
    public function setTypeId(int $type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
} 