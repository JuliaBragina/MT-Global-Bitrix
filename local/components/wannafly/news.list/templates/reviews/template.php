<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);

?>

<section class="reviews swiper section-container">
    <div class="reviews__container container">
        <div class="navButton navButton_bottom-margin_long">
            <div class="navButton__container">
                <h2 class="title__second"><?= $arParams['TITLE'] ?></h2>
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

        <div class="slider swiper-container">
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
                        <img class="reviews__diploma <?= empty($item["PROPERTIES"]["REVIEWER_PHOTO"]['VALUE']) ? 'reviews__diploma_single-row' : '' ?>" src="<?= $resizedDetailImage['src']?>" alt="Отзыв">
                        <div class="reviews__reviewContainer <?= empty($item["PROPERTIES"]["REVIEWER_PHOTO"]['VALUE']) ? 'reviews__reviewContainer_height' : '' ?>">
                            <div class="reviews__scrollContainer <?= empty($item["PROPERTIES"]["REVIEWER_PHOTO"]['VALUE']) ? 'reviews__scrollContainer_height' : '' ?>">
                                <div class="reviews__headerContainer">
                                    <h3 class="reviews__title title__third"><?= $item['NAME'] ?></h3>
                                    <?php if (!empty($item["PREVIEW_PICTURE"]['ID'])): ?>
                                        <img class="reviews__logo" src="<?= $resizedPreviewImage['src'] ?>" alt="Фото клиента">
                                    <?php endif; ?>

                                </div>
                                <p class="reviews__paragraph">
                                    <?= $item["PREVIEW_TEXT"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="reviews__profile <?= empty($item["PROPERTIES"]["REVIEWER_PHOTO"]['VALUE']) ? 'reviews__profile_hidden' : '' ?>">
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

        <div class="slider__line swiper-scrollbar"></div>
    </div>
</section>