<?php 

namespace Pokedex\Models;

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
}