
<?php foreach ($pokemons as $pokemon) : ?>
<div>
    <a href="<?= $router->generate('pokemon-detail', ['id' => $pokemon->getNumber() ]); ?>">
    <img src="<?= $assetsBaseUri ?>/images/<?= $pokemon->getNumber(); ?>.webp" alt="<?= $pokemon->getName(); ?>"></a>
    <p>#<?= $pokemon->getNumber(); ?> <?= $pokemon->getName(); ?></p>
</div>

<?php endforeach; ?>