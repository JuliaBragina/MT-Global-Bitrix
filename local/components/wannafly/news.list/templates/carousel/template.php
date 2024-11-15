<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);

?>

<section id="doneProjects" class="reviews doneProjects swiper section-container">
    <aside class="asideMenu">
        <nav class="asideMenu__nav asideMenu__nav_padding">
            <ul class="asideMenu__list">
                <li class="asideMenu__item"><a class="asideMenu__link" href="#solutions">Решения</a></li>
                <li class="asideMenu__item"><a class="asideMenu__link" href="#equipments">Оборудование</a></li>
                <li class="asideMenu__item asideMenu__item_active"><a class="asideMenu__link" href="#doneProjects">Кейсы</a></li>
                <li class="asideMenu__item"><a class="asideMenu__link" href="#ourApproach">Наш подход</a></li>
                <li class="asideMenu__item"><a class="asideMenu__link" href="#sertificates">Сертификаты</a></li>
            </ul>
        </nav>
    </aside>

    <div class="doneProjects__container container navButton">
        <div class="navButton__container navButton_bottom-margin_short">
            <h2 class="doneProjects__title title__second"><?= $arParams['TITLE'] ?></h2>
            <nav class="navButton__containerButtons">
                <button type="button" class="navButton__button swiper-button-prev">
                    <span class="navButton__img-span navButton__img-span_left"></span>
                </button>
                <button type="button" class="navButton__button swiper-button-next">
                    <span class="navButton__img-span navButton__img-span_right"></span>
                </button>
            </nav>
        </div>
        <div class="doneProjects__slider slider swiper-container">
            <ul class="slider__items swiper-wrapper">
                <?php if (!empty($arResult['ITEMS'])): ?>
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <li class="slider__item doneProjects__item swiper-slide" id="<?=$this->GetEditAreaId($item['ID']);?>">
                            <div class="doneProjects__imgContainer">
                                <?php if (!empty($item['PROPERTIES']['SLIDER_IMG']['VALUE'])): ?>
                                    <?php foreach ($item['PROPERTIES']['SLIDER_IMG']['VALUE'] as $imgID): ?>
                                        <?php
                                        $resizedImage = CFile::ResizeImageGet(
                                            $imgID,
                                            array("width" => 0, "height" => 600),
                                            BX_RESIZE_IMAGE_PROPORTIONAL,
                                            false
                                        );
                                        ?>
                                        <img src="<?= $resizedImage['src'] ?>" class="doneProjects__img" alt="<?= $item['NAME'] ?>">
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="doneProjects__reviewContainer">
                                <div class="doneProjects__scrollContainer">
                                    <h3 class="doneProjects__title title__third"><?= $item['NAME'] ?></h3>
                                    <p class="doneProjects__paragraph">
                                        <?= $item['PREVIEW_TEXT'] ?>
                                    </p>
                                </div>
                                <button type="button"
                                    class="btn btn-arrow-white btn-primary doneProjects__button openGetSolutionsPopup"
                                    data-fancybox href="#popup__getCatalog"  data-options='{"touch" : false, "momentum" : false}'>Подробнее о проекте
                                </button>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="slider__item slider__item_doneProjects doneProjects__item">
                        <div class="doneProjects__reviewContainer">
                            <p>Нет реализованных проектов.</p>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="slider__line swiper-scrollbar"></div>
    </div>
</section>
