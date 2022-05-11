<?php

namespace Pokedex\Controllers;

class CoreController 
{
    protected function show($viewName, $viewData = []) {
        /**
     * Méthode to display HTML code depending on views
     *
     * @param string $viewName Nom of view's file
     * @param array $viewData Data array to convey to views
     * @return void
     */

    // Using $router as a global (can't do better for the moment)
    global $router;

    // viewData is declared as a parameter for the show method
    // so views can access it
    // here a value we need for all of our views
    // so we define it inside of this method
    $viewData['currentPage'] = $viewName;

    // absolute URL for assets
    $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/assets/';
    // absolute url for site's root
    // /!\ here we're talking about the public repisotory, not the root of the project
    $viewData['baseUri'] = $_SERVER['BASE_URI'];

    extract($viewData);

    require_once __DIR__ . '/../views/layout/header.tpl.php';
    require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../views/layout/footer.tpl.php';

    }
}