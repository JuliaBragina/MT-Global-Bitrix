<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
$containerClass = ($arParams["SLIDER_STYLE"] === "style2") ? "container" : "about__sliderContainer";
?>

<section class="about swiper">
    <div class="container navButton navButton_bottom-margin_long">
        <div class="about__navContainer navButton__container">
            <h2 class="about__title title__second"><?= $arParams['TITLE'] ?></h2>
            <nav class="navButton__containerButtons">
                <button type="button" class="navButton__button swiper-button-prev">
                    <span class="navButton__img-span navButton__img-span_left"></span>
                </button>
                <button type="button" class="navButton__button swiper-button-next">
                    <span class="navButton__img-span navButton__img-span_right"></span>
                </button>
            </nav>
        </div>
    </div>

    <div class="<?= $containerClass ?>">
        <div class="slider swiper-container">
            <ul class="slider__items swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $item): ?>
                    <li class="slider__item about__item border-radius-30 bg-white swiper-slide"
                        id="<?= $this->GetEditAreaId($item['ID']); ?>">
                        <p class="about__paragraph"><?= $item['NAME'] ?></p>
                        <?php
                        if (!empty($item["PREVIEW_PICTURE"])) {

                            $resizedImage = CFile::ResizeImageGet(
                                $item["PREVIEW_PICTURE"]['ID'],
                                array("width" => 120, "height" => 9999),
                                BX_RESIZE_IMAGE_PROPORTIONAL,
                                false
                            );
                            ?>
                            <img class="about__img" src="<?= $resizedImage['src'] ?>" alt="<?= $item['NAME'] ?>">
                        <?php } ?>

                        <p class="about__description"><?= $item['PREVIEW_TEXT'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="slider__line swiper-scrollbar"></div>
    </div>
</section>
