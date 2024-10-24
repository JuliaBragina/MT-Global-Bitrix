<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="grid-cards-running-line">
    <div class="grid-cards-running-line__container grid-cards-running-line__container_runningLine">
        <div class="grid-cards-running-line__containerTitle">
            <h2 class="grid-cards-running-line__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        </div>

        <div class="grid-cards-running-line__grid running-line-container">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                    <div class="grid-cards-running-line__item running-line-container__item">
                        <img class="grid-cards-running-line__img" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="grid-cards-running-line__grid running-line-container running-line-container_reverse">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                    <div class="grid-cards-running-line__item running-line-container__item">
                        <img class="grid-cards-running-line__img" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
