<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<section class="readyProjects swiper">
    <div class="readyProjects__container container">
        <div class="navButton navButton_bottom-margin_long">
            <div class="navButton__container">
                <h2 class="readyProjects__title title__second"><?= $arParams['TITLE'] ?></h2>
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

        <div class="slider swiper-container">
            <ul class="slider__items swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $item): ?>
                    <?php
                        $link = !empty($item["PROPERTIES"]["LINK"]["VALUE"]) ? $item["PROPERTIES"]["LINK"]["VALUE"] : null; // Предположим, что ссылка хранится в свойствах "LINK"
                    ?>

                    <?php if ($link):?>
                        <a class="slider__link swiper-slide" href="<?= $link ?>">
                    <?php else: ?>
                        <div class="slider__link swiper-slide">
                    <?php endif; ?>
                            <li class="slider__item slider__item_hover" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                                <?php if (!empty($item["PREVIEW_PICTURE"])) {
                                    $resizedImage = CFile::ResizeImageGet(
                                        $item["PREVIEW_PICTURE"]['ID'],
                                        array("width" => 600, "height" => 600),
                                        BX_RESIZE_IMAGE_EXACT
                                    );
                                ?>
                                    <img class="slider__img" src="<?= $resizedImage['src'] ?>" alt="<?= $item['NAME'] ?>">
                                <?php } ?>
                                <div class="readyProjects__text">
                                    <?php if ($arParams['TAGS_STYLE'] == 'style2'): ?>
                                        <p class="slider__descriptioin readyProjects__description readyProjects__description_color_pink"><?php echo $item["PROPERTIES"]["TAGS"]["VALUE"]["TEXT"]; ?></p>
                                    <?php endif; ?>
                                    <h3 class="slider__title readyProjects__title title__third">
                                        <?php echo $item["NAME"]; ?>
                                    </h3>
                                    <?php if ($arParams['TAGS_STYLE'] == 'style1'): ?>
                                        <p class="slider__descriptioin readyProjects__description"><?php echo $item["PROPERTIES"]["TAGS"]["VALUE"]["TEXT"]; ?></p>
                                    <?php endif; ?>
                                </div>
                            </li>
                    <?php if ($link): ?>
                        </a>
                    <?php else: ?>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="slider__line swiper-scrollbar"></div>
    </div>
</section>
