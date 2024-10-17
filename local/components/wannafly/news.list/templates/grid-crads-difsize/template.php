<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
?>

<section id="solutions" class="solutions section">

    <div class="solutions__container">
        <h2 class="solutions_title title__second title__second_color_white"><?= $arParams['TITLE'] ?></h2>
        <div class="solutions__imgs">
            <figure class="solutions__item solutions__item_span_2" id="<?= $this->GetEditAreaId($arResult['ITEMS'][0]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][0]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][0]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][0]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][1]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][1]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][1]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][1]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][2]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][2]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][2]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][2]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_4" id="<?= $this->GetEditAreaId($arResult['ITEMS'][3]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][3]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][3]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][3]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][4]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][4]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][4]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][4]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][5]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][5]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][5]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][5]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][6]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][6]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][6]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][6]['NAME'] ?></figcaption>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][7]['ID']); ?>">
                <img src="<?= $arResult['ITEMS'][7]['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $arResult['ITEMS'][7]['NAME'] ?>" class="solutions__img">
                <div class="solutions__gradient"></div>
                <figcaption class="solutions__caption"><?= $arResult['ITEMS'][7]['NAME'] ?></figcaption>
            </figure>
        </div>
    </div>
</section>

