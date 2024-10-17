<?php

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<div class="page-navigation_boxs"><?
    if (!empty($arResult['PREV'])) {?>
        <a href="<?=$arResult['PREV']['DETAIL_PAGE_URL']?>" class="page-navigation_box">
            <span><?=$arResult['PREV']['NAME']?></span>
            <span>
                <svg class="slider-arrow" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22.6348" cy="22.5" r="22" />
                    <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <?=GetMessage("PREV")?>
            </span><?
            if (!empty($arResult['PREV']['IMG_SRC'])) {?>
                <img src="<?=$arResult['PREV']['IMG_SRC']?>" alt="photo"><?
            } ?>
        </a><?
    }
    if (!empty($arResult['NEXT'])) {?>
        <a href="<?=$arResult['NEXT']['DETAIL_PAGE_URL']?>" class="page-navigation_box">
            <span><?=$arResult['NEXT']['NAME']?></span>
            <span>
                <?=GetMessage("NEXT")?>
                <svg class="slider-arrow" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
                    <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span><?
            if (!empty($arResult['NEXT']['IMG_SRC'])) {?>
                <img src="<?=$arResult['NEXT']['IMG_SRC']?>" alt="photo"><?
            } ?>
        </a><?
    }?>
</div>
