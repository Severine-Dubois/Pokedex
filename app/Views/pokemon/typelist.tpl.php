
<h2>Sélectionnez le type de Pokémon que vous souhaitez voir :</h2>


<ul class="container">
<?php foreach($types as $type) : ?>
<a class="list-color change-theme" href=" <?= $router->generate('pokemon-type', ['id' => $type->getId()]); ?>" style="color: #<?= $type->getColor(); ?>" >
<li><?= $type->getName(); ?></li>
</a>
<?php endforeach; ?>
</ul>