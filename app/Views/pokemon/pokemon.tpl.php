
<h2>Détails de <?= $pokemon->getName(); ?></h2>

<div class="container poke-solo change-theme"> 
<div class="poke-image">
    <img src="<?= $assetsBaseUri ?>/images/<?= $pokemon->getNumber(); ?>.webp" alt="" srcset="">



    <p>#<?= $pokemon->getNumber(); ?> <?= $pokemon->getName(); ?></p>

    <?php foreach ($types as $type) : ?>
    <?= $type->getId()==$pokemon_type['0']->getTypeId() ? '<p style="color: #' . $type->getColor() . '" >' . $type->getName() . '</p>' : '' ?>
    <?php if (isset($pokemon_type['1']) && $type->getId()==$pokemon_type['1']->getTypeId()) {
        echo '<p style="color: #' . $type->getColor() . '" >' . $type->getName() . '</p>';
    }; ?>
    <?php endforeach; ?>
    </div>
    
    <div class="description">
    <h3>Statistiques</h3>
    <ul>
        <li>PV : <?= $pokemon->getHp(); ?>
            <div class="bar">
                <div class="stat red" style="width:<?= $pokemon->getHp()?>px""></div>
            </div>
        </li>

        <li>Attaque : <?= $pokemon->getAttack(); ?>
            <div class="bar">
                <div class="stat blue" style="width:<?= $pokemon->getAttack()?>px""></div>
            </div>
        </li>

        <li>Défense : <?= $pokemon->getDefense(); ?>
            <div class="bar">
                <div class="stat yellow" style="width:<?= $pokemon->getDefense()?>px""></div>
            </div>
        </li>

        <li>Attaque spé : <?= $pokemon->getSpeAttack(); ?>
            <div class="bar">
                <div class="stat green" style="width:<?= $pokemon->getSpeAttack()?>px""></div>
            </div>
        </li>

        <li>Défense spé : <?= $pokemon->getSpeDefense(); ?>
            <div class="bar">
                <div class="stat brown" style="width:<?= $pokemon->getSpeDefense()?>px""></div>
            </div>
        </li>

        <li>Vitesse : <?= $pokemon->getSpeed(); ?>
            <div class="bar">
                <div class="stat purple" style="width:<?= $pokemon->getSpeed()?>px""></div>
            </div>
        </li>
    </ul>

</div>
</div>

<div class="describe">
<button class="accordion">Description</button>
<div class="panel change-theme">
  <p>Il peut survivre plusieurs jours sans manger. Le bulbe sur son dos emmagasine de l'énergie.</p>
</div>
</div>