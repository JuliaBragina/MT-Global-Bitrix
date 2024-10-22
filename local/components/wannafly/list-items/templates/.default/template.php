<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<section class="modernTecnologies">
    <div class="modernTecnologies__container">
        <div class="modernTecnologies__titleContainer">
            <h2 class="modernTecnologies__title title__second title__second_color_white">
                <?= $arResult['TITLE'];?>
            </h2>

            <?php if (!empty($arResult['IMG_SRC'])): ?>
                <img class="modernTecnologies__img" src="<?= htmlspecialchars($arResult['IMG_SRC']); ?>" alt="">
            <?php endif; ?>
        </div>

        <ol class="modernTecnologies__list">
            <?php foreach ($arResult['LIST'] as $listItem) {
                if (!empty($listItem)) {
            ?>
                <li class="modernTecnologies__item">
                    <?= htmlspecialchars($listItem); ?>
                </li>
            <?php 
                }
            } ?>
        </ol>

    </div>
</section>
