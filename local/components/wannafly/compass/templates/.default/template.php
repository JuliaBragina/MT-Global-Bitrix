<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

// Подключаем CSS и JS для конкретного компонента
Asset::getInstance()->addCss($templateFolder . '/assets/css/style.css');
Asset::getInstance()->addJs($templateFolder . '/assets/js/compass.js');
?>

<section class="whyWe section-container">
    <div class="about__container container">
        <h2 class="title__second">Почему MT global?</h2>
        <div class="wrapper">
            <div class="compass">
                <div class="compass__base"></div>
                <svg class="compass__needle" width="31" height="49" viewBox="0 0 31 49" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.4992 0L30.6546 48.75L15.4993 46L0.34375 48.75L15.4992 0Z" fill="#ED7180"/>
                </svg>
                <svg class="compass__ticks" width="400" height="400" viewBox="0 0 400 400"></svg>
                <div class="compass__directions"></div>
            </div>
            <ul class="whyWe__list">
                <li class="whyWe__item whyWe__item_center whyWe__item_top"
                    id="<?= $this->GetEditAreaId($arResult['ITEMS'][0]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][0]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_center"><?= htmlspecialchars($arResult['ITEMS'][0]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_top">
                        <span class="whyWe__number">01</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_right"
                    id="<?= $this->GetEditAreaId($arResult['ITEMS'][1]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][1]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_right"><?= htmlspecialchars($arResult['ITEMS'][1]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_right">
                        <span class="whyWe__number">02</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_right"
                    id="<?= $this->GetEditAreaId($arResult['ITEMS'][2]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][2]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_right"><?= htmlspecialchars($arResult['ITEMS'][2]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_right">
                        <span class="whyWe__number">03</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_right"
                    id="<?= $this->GetEditAreaId($arResult['ITEMS'][3]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][3]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_right"><?= htmlspecialchars($arResult['ITEMS'][3]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_right">
                        <span class="whyWe__number">04</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_center whyWe__item_bottom"
                    id="<?= $this->GetEditAreaId($arResult['ITEMS'][4]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][4]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_center"><?= htmlspecialchars($arResult['ITEMS'][4]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_bottom">
                        <span class="whyWe__number">05</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_left" id="<?= $this->GetEditAreaId($arResult['ITEMS'][5]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][5]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_left"><?= htmlspecialchars($arResult['ITEMS'][5]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_left">
                        <span class="whyWe__number">06</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_left" id="<?= $this->GetEditAreaId($arResult['ITEMS'][6]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][6]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_left"><?= htmlspecialchars($arResult['ITEMS'][6]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_left">
                        <span class="whyWe__number">07</span>
                    </div>
                </li>
                <li class="whyWe__item whyWe__item_left" id="<?= $this->GetEditAreaId($arResult['ITEMS'][7]['ID']); ?>">
                    <p class="whyWe__advantage"><?= htmlspecialchars($arResult['ITEMS'][7]["NAME"]); ?></p>
                    <p class="whyWe__description whyWe__description_left"><?= htmlspecialchars($arResult['ITEMS'][7]["PREVIEW_TEXT"]); ?></p>
                    <div class="whyWe__numberContainer whyWe__numberContainer_left">
                        <span class="whyWe__number">08</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<script>
    const compassInstance = new Compass({
        compassSelector: '.compass',
        needleSelector: '.compass__needle',
        directionsSelector: '.compass__directions',
        ticksSelector: '.compass__ticks',
        listItemsContainerSelector: '.whyWe',
        listItemsSelector: '.whyWe__item',
        baseRadius: 65,
        outerRadius: 178,
        compassCenter: {x: 208, y: 208},
        majorTickCount: 4,
        minorTickCount: 28,
        initialAngle: 90
    });
</script>


