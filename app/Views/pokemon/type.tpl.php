
<h2> Pokémons de type <?= $typeId->getName() ?> </h2>

<?php foreach ($pokemons as $pokemon) {

    foreach ($pokemon_type as $type) {

    if ($type->getPokemonNumber() == $pokemon->getNumber()) {
        echo '<div> <a href="' . $router->generate('pokemon-detail', ['id' => $pokemon->getNumber() ]) . '">
        <img src="' . $assetsBaseUri . '/images/' . $pokemon->getNumber() . '.webp" alt="' . $pokemon->getName() . '"></a>
         <p> #' . $pokemon->getNumber() . ' ' . $pokemon->getName(); '</p> </div>' ;
    
    }; 
    };
};
?>