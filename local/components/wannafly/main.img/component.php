<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arResult['IMG_SRC'] = $arParams["IMG_SRC"];
$arResult['TITLE'] = $arParams["TITLE"];
$arResult['SLOGANS'] = $arParams['SLOGANS'];

$this->IncludeComponentTemplate();
