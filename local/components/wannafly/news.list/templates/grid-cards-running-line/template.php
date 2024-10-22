<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="grid-cards-running-line">
    <div class="grid-cards-running-line__container grid-cards-running-line__container_animation grid-cards-running-line__container_runningLine">
        <div class="grid-cards-running-line__containerTitle">
            <h2 class="grid-cards-running-line__title title__second"><?= $arParams['TITLE'] ?></h2>
        </div>

        <div class="grid-cards-running-line__line swiper">
            <div class="swiper-container">
                <div class="grid-cards-running-line__swiper grid-cards-running-line__grid swiper-wrapper">
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                            <div class="swiper-slide grid-cards-running-line__item">
                                <img class="grid-cards-running-line__img" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="grid-cards-running-line__lineReverse swiper">
            <div class="swiper-container">
                <div class="grid-cards-running-line__swiper grid-cards-running-line__grid swiper-wrapper">
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                            <div class="swiper-slide grid-cards-running-line__item">
                                <img class="grid-cards-running-line__img" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
