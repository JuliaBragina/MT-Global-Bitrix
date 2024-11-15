<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */

use Bitrix\Main\Page\Asset;

$this->setFrameMode(true);

Asset::getInstance()->addJs($templateFolder . '/assets/js/scripts.js');
?>

<section class="services">
    <div class="services__container container">
        <nav class="services__nav">
            <h2 class="services__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
            <ul class="services__list">
                <?php foreach ($arResult["ITEMS"] as $index => $service): ?>
                    <li class="services__item" id="<?=$this->GetEditAreaId($service['ID']);?>">
                        <a class="services__link" data-index="<?= $index ?>" href="javascript:void(0);">
                            <?= htmlspecialchars($service["NAME"]) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <div class="services__description">
            <div class="services__navContainer">
                <div class="services__counter">
                    <span class="services__currentCounter">01</span>/<span class="services__maxCounter"><?= str_pad(count($arResult["ITEMS"]), 2, '0', STR_PAD_LEFT) ?></span>
                </div>
                <h4 class="services__currentTitle"><?= htmlspecialchars($arResult["ITEMS"][0]["NAME"]) ?></h4>
                <div class="navButton">
                    <nav class="navButton__containerButtons">
                        <button class="navButton__button navButton__button_white navButton__prev_services">
                            <span class="navButton__img-span navButton__img-span_left"></span>
                        </button>
                        <button class="navButton__button navButton__button_white navButton__next_services">
                            <span class="navButton__img-span navButton__img-span_right"></span>
                        </button>
                    </nav>
                </div>
            </div>

            <div class="services__imgContainer">
                <?php
                    if (!empty($arResult["ITEMS"][0]["PREVIEW_PICTURE"]["ID"])) {
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult["ITEMS"][0]["PREVIEW_PICTURE"]["ID"],
                            ['width' => 147, 'height' => 9999],
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    }
                ?>
                <img class="services__img" src="<?= $resizedImage['src'] ?>" alt="">
            </div>
            <p class="services__paragraph"><?= htmlspecialchars($arResult["ITEMS"][0]["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]) ?></p>

        </div>
    </div>
</section>
<script type="text/javascript">
    const sliderConfig = {
        servicesData: <?=CUtil::PhpToJSObject($arResult["ITEMS"])?>, // данные услуг из PHP
        currentCounter: '.services__currentCounter',
        maxCounter: '.services__maxCounter',
        currentTitle: '.services__currentTitle',
        serviceImage: '.services__img',
        serviceParagraph: '.services__paragraph',
        prevButton: '.navButton__prev_services',
        nextButton: '.navButton__next_services',
        linkSelector: '.services__link'
    };

    // Создаем экземпляр класса с переданными параметрами
    const serviceSlider = new ServiceSlider(sliderConfig);
</script>
