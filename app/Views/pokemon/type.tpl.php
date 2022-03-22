
<h2> Pokémons de type <?= $typeId->getName() ?> </h2>

<div class="container">

<?php foreach ($pokemons as $pokemon) { ?>

    <?php foreach ($pokemon_type as $type) { ?>
        
    <?php if ($type->getPokemonNumber() == $pokemon->getNumber()) {
        echo  '<div class="poke-list">';
        echo '<a href="' . $router->generate('pokemon-detail', ['id' => $pokemon->getNumber() ]) . '">';
        echo '<img src="' . $assetsBaseUri . '/images/' . $pokemon->getNumber() . '.webp" alt="' . $pokemon->getName() . '">';
        echo '</a>';
        echo '<p> #'. $pokemon->getNumber() . '</p> ' . '<p>' . $pokemon->getName(); '</p>';
        echo '</div>';
        } else {
            echo '';
        }
    }; ?>

    

<?php }; ?>

</div>