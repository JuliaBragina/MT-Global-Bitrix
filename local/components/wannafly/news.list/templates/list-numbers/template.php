<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="results">
    <div class="results__container">
        <h2 class="results__title title__second"><?= $arParams['TITLE'] ?></h2>
        <ul class="results__list">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <li class="results__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    <div class="results__flex-row">
                        <span class="results__text">до</span>
                        <p class="results__number"><?= $item["PROPERTIES"]['RESULT']['VALUE'] ?></p>
                    </div>
                    <h4 class="results__description results__description_bold"><?= $item["NAME"] ?></h4>
                    <h5 class="results__description"><?= $item["PREVIEW_TEXT"] ?></h5>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

