
<h2>Liste de tous les Pokémons</h2>

<div class="container">
<?php foreach ($pokemons as $pokemon) : ?>
<div class="poke-list change-theme">
    <a href="<?= $router->generate('pokemon-detail', ['id' => $pokemon->getNumber() ]); ?>">
    <img src="<?= $assetsBaseUri ?>/images/<?= $pokemon->getNumber(); ?>.webp" alt="<?= $pokemon->getName(); ?>"></a>
    <p>#<?= $pokemon->getNumber(); ?> </p> <p> <?= $pokemon->getName(); ?></p>
</div>

<?php endforeach; ?>

</div>