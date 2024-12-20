<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
?>

<section id="solutions" class="solutions section section-container">

    <div class="solutions__container container">
        <h2 class="solutions_title title__second title__second_color_white title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        <div class="solutions__imgs">
            <figure class="solutions__item solutions__item_span_2" id="<?= $this->GetEditAreaId($arResult['ITEMS'][0]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][0]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][0]['PREVIEW_PICTURE']['ID'],
                            array("width" => 500, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][0]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][0]['NAME'] ?></figcaption>
                </a>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][1]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][1]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][1]['PREVIEW_PICTURE']['ID'],
                            array("width" => 220, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][1]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][1]['NAME'] ?></figcaption>
                </a>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][2]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][2]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][2]['PREVIEW_PICTURE']['ID'],
                            array("width" => 220, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][2]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][2]['NAME'] ?></figcaption>
                </a>
            </figure>
            <figure class="solutions__item solutions__item_span_4" id="<?= $this->GetEditAreaId($arResult['ITEMS'][3]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][3]['PROPERTIES']['LINK'] ['VALUE']?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][3]['PREVIEW_PICTURE']['ID'],
                            array("width" => 500, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][3]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][3]['NAME'] ?></figcaption>
                </a>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][4]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][4]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][4]['PREVIEW_PICTURE']['ID'],
                            array("width" => 220, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][4]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][4]['NAME'] ?></figcaption>
                </a>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][5]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][5]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][5]['PREVIEW_PICTURE']['ID'],
                            array("width" => 220, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][5]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][5]['NAME'] ?></figcaption>
                </A>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][6]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][6]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][6]['PREVIEW_PICTURE']['ID'],
                            array("width" => 220, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][6]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][6]['NAME'] ?></figcaption>
                </a>
            </figure>
            <figure class="solutions__item solutions__item_span_1" id="<?= $this->GetEditAreaId($arResult['ITEMS'][7]['ID']); ?>">
                <a class="solutions__link" href="<?= $arResult['ITEMS'][7]['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">
                    <?php
                        $resizedImage = CFile::ResizeImageGet(
                            $arResult['ITEMS'][7]['PREVIEW_PICTURE']['ID'],
                            array("width" => 220, "height" => 9999),
                            BX_RESIZE_IMAGE_PROPORTIONAL,
                            false
                        );
                    ?>
                    <img src="<?= $resizedImage["src"] ?>" alt="<?= $arResult['ITEMS'][7]['NAME'] ?>" class="solutions__img">
                    <div class="solutions__gradient"></div>
                    <figcaption class="solutions__caption"><?= $arResult['ITEMS'][7]['NAME'] ?></figcaption>
                </a>
            </figure>
        </div>
    </div>
</section>

