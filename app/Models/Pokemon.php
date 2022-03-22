<?php 

namespace Pokedex\Models;
use Pokedex\Utils\Database;
use PDO;

class Pokemon extends CoreModel
{ 
    /**
     * Name of the Pokemon
     * @var string
     */
    private $name;

    /**
     * Health Point stat
     * @var int
     */
    private $hp;

    /**
     * Attack stat
     * @var int
     */
    private $attack;

    /**
     * Defense stat
     * @var int
     */
    private $defense;

    /**
     * Special attack stat
     * @var int
     */
    private $spe_attack;

    /**
     * Special Defense stat
     * @var int
     */
    private $spe_defense;

    /**
     * Speed stat
     * @var int
     */
    private $speed;

    /**
     * Entry number in the pokedex
     * @var int
     */
    private $number;


    /**
     * Get name of the Pokemon
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the Pokemon
     *
     * @param  string  $name  Name of the Pokemon
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get health Point stat
     *
     * @return  int
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set health Point stat
     *
     * @param  int  $hp  Health Point stat
     *
     * @return  self
     */ 
    public function setHp(int $hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get attack stat
     *
     * @return  int
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set attack stat
     *
     * @param  int  $attack  Attack stat
     *
     * @return  self
     */ 
    public function setAttack(int $attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get defense stat
     *
     * @return  int
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set defense stat
     *
     * @param  int  $defense  Defense stat
     *
     * @return  self
     */ 
    public function setDefense(int $defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get special attack stat
     *
     * @return  int
     */ 
    public function getSpeAttack()
    {
        return $this->spe_attack;
    }

    /**
     * Set special attack stat
     *
     * @param  int  $spe_attack  Special attack stat
     *
     * @return  self
     */ 
    public function setSpeAttack(int $spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get special Defense stat
     *
     * @return  int
     */ 
    public function getSpeDefense()
    {
        return $this->spe_defense;
    }

    /**
     * Set special Defense stat
     *
     * @param  int  $spe_defense  Special Defense stat
     *
     * @return  self
     */ 
    public function setSpeDefense(int $spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get speed stat
     *
     * @return  int
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set speed stat
     *
     * @param  int  $speed  Speed stat
     *
     * @return  self
     */ 
    public function setSpeed(int $speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get hP stat
     *
     * @return  int
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set hP stat
     *
     * @param  int  $number  HP stat
     *
     * @return  self
     */ 
    public function setNumber(int $number)
    {
        $this->number = $number;

        return $this;
    }


    public static function find($pokemonId)
    {
        // récupérer un objet PDO = connexion à la BDD
        $pdo = Database::getPDO();

        // on écrit la requête SQL pour récupérer le produit
        $sql = '
            SELECT *
            FROM `pokemon`
            WHERE id = ' . $pokemonId;

        // query ? exec ?
        // On fait de la LECTURE = une récupration => query()
        // si on avait fait une modification, suppression, ou un ajout => exec
        $pdoStatement = $pdo->query($sql);

        // fetchObject() pour récupérer un seul résultat
        // si j'en avais eu plusieurs => fetchAll
        $result = $pdoStatement->fetchObject('Pokedex\Models\Pokemon');

        return $result;
    }

    public static function findAll() 
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\Models\Pokemon');

        return $results;
    }

}