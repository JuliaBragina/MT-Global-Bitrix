<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<section class="modernTecnologies section-container section-container_margin_top">
    <div class="modernTecnologies__container container">
        <div class="modernTecnologies__titleContainer">
            <h2 class="modernTecnologies__title title__first title__second_color_white title__bottom-margin">
                <?= $arResult['TITLE'];?>
            </h2>

            <?php if (!empty($arResult['IMG_SRC'])): ?>
                <img class="modernTecnologies__img" src="<?= htmlspecialchars($arResult['IMG_SRC']); ?>" alt="">
            <?php endif; ?>
        </div>

        <ol class="modernTecnologies__list">
            <?php 
                $counter = 1;
                foreach ($arResult['LIST'] as $listItem) {
                    if (!empty($listItem)) {
                ?>
                    <li class="modernTecnologies__item">
                        <span class="modernTecnologies__counter"><?= str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span> <?= htmlspecialchars($listItem); ?>
                    </li>
                <?php 
                        $counter++;
                    }
            } ?>
        </ol>

    </div>
</section>
