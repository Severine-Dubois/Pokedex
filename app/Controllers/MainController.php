<?php

namespace Pokedex\Controllers;

class MainController extends CoreController 
{
    /** Class to display home page 
     * @return void;
    */

    public function home() {
        $this->show('main/home');
    }

}