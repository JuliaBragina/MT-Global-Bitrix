<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="trustUs">
    <div class="trustUs__container trustUs__container_animation trustUs__container_runningLine">
        <div class="trustUs__containerTitle">
            <h2 class="trustUs__title title__second"><?= $arParams['TITLE'] ?></h2>
        </div>
        
        <div class="trustUs__grid trustUs__grid_animation trustUs__grid_firstLine">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                    <div class="trustUs__item">
                        <img class="trustUs__img" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="trustUs__grid trustUs__grid_animationReverse trustUs__grid_firstLine">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                    <div class="trustUs__item">
                        <img class="trustUs__img" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>