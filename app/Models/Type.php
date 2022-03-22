<?php 

namespace Pokedex\Models;
use Pokedex\Utils\Database;
use PDO;

class Type extends CoreModel
{  
    /**
     * Name of the type
     * @var string
     */
    private $name;

    /**
     * Color (in hexa) to display
     * @var string
     */
    private $color;

    /**
     * Get name of the type
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the type
     *
     * @param  string  $name  Name of the type
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get color (in hexa) to display
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color (in hexa) to display
     *
     * @param  string  $color  Color (in hexa) to display
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    public static function find($id) 
    {
         // récupérer un objet PDO = connexion à la BDD
         $pdo = Database::getPDO();

         // on écrit la requête SQL pour récupérer le produit
         $sql = '
             SELECT *
             FROM `type`
             WHERE id = ' . $id;
 
         // query ? exec ?
         // On fait de la LECTURE = une récupration => query()
         // si on avait fait une modification, suppression, ou un ajout => exec
         $pdoStatement = $pdo->query($sql);
 
         // fetchObject() pour récupérer un seul résultat
         // si j'en avais eu plusieurs => fetchAll
         $result = $pdoStatement->fetchObject('Pokedex\Models\Type');
 
         return $result;
    }

    public static function findAll() 
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `type`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\Models\Type');

        return $results;
    }
}