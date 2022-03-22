<?php

namespace Pokedex\Controllers;

class ErrorController extends CoreController 
{
    /** Class to display home page 
     * @return void;
    */

    public function err404() {
        $this->show('error/404');
    }

}