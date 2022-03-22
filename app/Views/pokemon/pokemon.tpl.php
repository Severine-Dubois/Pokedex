
<h2>Détails de <?= $pokemon->getName(); ?></h2>

<div class="poke-image">
    <img src="<?= $assetsBaseUri ?>/images/<?= $pokemon->getNumber(); ?>.webp" alt="" srcset="">
</div>

<div class="description">
    <p>#<?= $pokemon->getNumber(); ?> <?= $pokemon->getName(); ?></p>

    <?php foreach ($types as $type) : ?>
    <?= $type->getId()==$pokemon_type['0']->getTypeId() ? '<p>' . $type->getName() . '</p>' : '' ?>
    <?php if (isset($pokemon_type['1']) && $type->getId()==$pokemon_type['1']->getTypeId()) {
        echo '<p>' . $type->getName() . '</p>';
    }; ?>
    <?php endforeach; ?>
    <h3>Statistiques</h3>
    <ul>
        <li>PV : <?= $pokemon->getHp(); ?>
            <div class="bar">
                <div class="stat" style="width:<?= $pokemon->getHp()?>px""></div>
            </div>
        </li>

        <li>Attaque : <?= $pokemon->getAttack(); ?>
            <div class="bar">
                <div class="stat" style="width:<?= $pokemon->getAttack()?>px""></div>
            </div>
        </li>

        <li>Défense : <?= $pokemon->getDefense(); ?>
            <div class="bar">
                <div class="stat" style="width:<?= $pokemon->getDefense()?>px""></div>
            </div>
        </li>

        <li>Attaque spéciale : <?= $pokemon->getSpeAttack(); ?>
            <div class="bar">
                <div class="stat" style="width:<?= $pokemon->getSpeAttack()?>px""></div>
            </div>
        </li>

        <li>Défense spéciale : <?= $pokemon->getSpeDefense(); ?>
            <div class="bar">
                <div class="stat" style="width:<?= $pokemon->getSpeDefense()?>px""></div>
            </div>
        </li>

        <li>Vitesse : <?= $pokemon->getSpeed(); ?>
            <div class="bar">
                <div class="stat" style="width:<?= $pokemon->getSpeed()?>px""></div>
            </div>
        </li>
    </ul>
</div>