<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
$containerClass = ($arParams["SLIDER_STYLE"] === "style1") ? "container" : "about__sliderContainer";
?>

<section class="about swiper">
    <div class="container navButton navButton_bottom-margin_long">
        <div class="about__navContainer navButton__container">
            <h2 class="about__title title__second"><?= $arParams['TITLE'] ?></h2>
            <nav class="navButton__containerButtons">
                <button type="button" class="navButton__prev navButton__prev_color_pink swiper-button-prev">
                    <img class="navButton__prevImg"
                         src="<?= SITE_TEMPLATE_PATH ?>/img/prev-button-arrow-white.svg" alt="">
                </button>
                <button type="button" class="navButton__next navButton__prev_color_pink swiper-button-next">
                    <img class="navButton__nextImg"
                         src="<?= SITE_TEMPLATE_PATH ?>/img/next-button-arrow-white.svg" alt="">
                </button>
            </nav>
        </div>
    </div>

    <div class="<?= $containerClass ?> slider swiper-container">
        <ul class="slider__items swiper-wrapper">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <li class="slider__item about__item border-radius-30 bg-white swiper-slide"
                    id="<?= $this->GetEditAreaId($item['ID']); ?>">
                    <p class="about__paragraph"><?= $item['NAME'] ?></p>
                    <?php
                    if (!empty($item["PREVIEW_PICTURE"])) {

                        $resizedImage = CFile::ResizeImageGet(
                            $item["PREVIEW_PICTURE"]['ID'],
                            array("width" => 9999, "height" => 155)
                        );
                        ?>
                        <img class="about__img" src="<?= $resizedImage['src'] ?>" alt="<?= $item['NAME'] ?>">
                    <?php } ?>

                    <p class="about__description"><?= $item['PREVIEW_TEXT'] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="container">
        <div class="slider__line swiper-scrollbar"></div>
    </div>
</section>
