<?php

require_once '../vendor/autoload.php';

//* ROUTER */

$router = new AltoRouter();

// le répertoire (après le nom de domaine) dans lequel on travaille est celui-ci
// Mais on pourrait travailler sans sous-répertoire
// Si il y a un sous-répertoire
if (array_key_exists('BASE_URI', $_SERVER)) {
// Alors on définit le basePath d'AltoRouter
$router->setBasePath($_SERVER['BASE_URI']);
// ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
} else { // sinon
// On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
$_SERVER['BASE_URI'] = '/';
}

// Let's declare our paths :

// For home page
$router->map (
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\Pokedex\Controllers\MainController'
    ],
    'main-home',
);


//* DISPATCH /

// Asking AltoRouter to find a path corresponding to the current URL
$match = $router->match();

// First arg : $match returned by AltoRouter
// Sec arg : target (controller + method) to display the 404 error's page
$dispatcher = new Dispatcher($match, '\Pokedex\Controllers\ErrorController::err404');
// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();