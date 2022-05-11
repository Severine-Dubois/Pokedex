<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= $assetsBaseUri ?>/images/pokeball.png" />
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/style.css">
    <title><?= $title ?></title>
</head>
<body class="change-theme">
    <header class="change-theme">
    <h1>Pokédex</h1>
    <nav>
        <ul>
            <a href="<?= $router->generate('main-home') ?>"><li>Liste</li></a>
            <a href="<?= $router->generate('type-list') ?>"><li>Type</li></a>
        </ul>
    </nav>

    <div>
    <img class="pika" src="<?= $assetsBaseUri ?>/images/pikachu.gif" alt="pikachu gif">
    <img class="gengar" src="<?= $assetsBaseUri ?>/images/gengar.gif" alt="gengar gif">
    </div>
</header>

<div class="wrapper">
