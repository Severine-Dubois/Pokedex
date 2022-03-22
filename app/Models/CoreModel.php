<?php 

namespace Pokedex\Models;
use Pokedex\Utils\Database;
use PDO;

class CoreModel 
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }
}