<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
if (isset($arResult['SEO_H1']))
    $APPLICATION->SetTitle($arResult['SEO_H1']);
?>