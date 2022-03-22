<?php 

namespace Pokedex\Models;
use Pokedex\Utils\Database;
use PDO;

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

    public static function find($id) 
    {
         // récupérer un objet PDO = connexion à la BDD
         $pdo = Database::getPDO();

         // on écrit la requête SQL pour récupérer le produit
         $sql = '
             SELECT *
             FROM `pokemon_type`
             WHERE id = ' . $id;
 
         // query ? exec ?
         // On fait de la LECTURE = une récupration => query()
         // si on avait fait une modification, suppression, ou un ajout => exec
         $pdoStatement = $pdo->query($sql);
 
         // fetchObject() pour récupérer un seul résultat
         // si j'en avais eu plusieurs => fetchAll
         $result = $pdoStatement->fetchObject('Pokedex\Models\PokemonType');
 
         return $result;
    }

    public static function findAll() 
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon_type`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\Models\PokemonType');

        return $results;
    }

} 