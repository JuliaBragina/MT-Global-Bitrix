<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);

?>

<section class="reviews swiper">
    <div class="readyProjects__container navButton">
        <div class="navButton__container">
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

    <div class="reviews__container reviews__sliderContainer slider swiper-container">
        <ul class="slider__items reviews__items swiper-wrapper">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
            <?php
                $resizedDetailImage = CFile::ResizeImageGet(
                    $item["DETAIL_PICTURE"]['ID'],
                    array("width" => 470, "height" => 9999)
                );
                $resizedPreviewImage = CFile::ResizeImageGet(
                    $item["PREVIEW_PICTURE"]['ID'],
                    array("width" => 0, "height" => 50),
                    BX_RESIZE_IMAGE_EXACT
                );
                $resizedReviewerImage = CFile::ResizeImageGet(
                    $item["PROPERTIES"]["REVIEWER_PHOTO"]['VALUE'],
                    array("width" => 60, "height" => 60),
                    BX_RESIZE_IMAGE_EXACT
                );
                ?>
                <li class="slider__item reviews__item swiper-slide" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                    <img class="reviews__diploma" src="<?= $resizedDetailImage['src']?>" alt="Отзыв">
                    <div class="reviews__reviewContainer">
                        <div class="reviews__scrollContainer">
                            <div class="reviews__headerContainer">
                                <h3 class="reviews__title title__third"><?= $item['NAME'] ?></h3>
                                <img class="reviews__logo" src="<?= $resizedPreviewImage['src']?>"
                                     alt="Фото клиента">
                            </div>
                            <p class="reviews__paragraph">
                                <?= $item["PREVIEW_TEXT"] ?>
                            </p>
                        </div>
                    </div>
                    <div class="reviews__profile">
                            <img class="reviews__avatar" src="<?= $resizedReviewerImage['src'] ?>" alt="<?= $item['NAME'] ?>">
                        <div class="reviews__profileContainer">
                            <p class="reviews__name"><?= $item['PROPERTIES']['REVIEWER_NAME']['VALUE'] ?></p>
                            <p class="reviews__position"><?= $item['PROPERTIES']['REVIEWER_DOLGNOST']['VALUE'] ?></p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="reviews__container">
        <div class="slider__line swiper-scrollbar"></div>
    </div>
</section>