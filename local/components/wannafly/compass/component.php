<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

// Параметры компонента
$arParams["IBLOCK_ID"] = (int)$arParams["IBLOCK_ID"];
$arResult = [];

// Проверка наличия ID инфоблока
if ($arParams["IBLOCK_ID"] > 0) {
    $arFilter = [
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ACTIVE" => "Y"
    ];

    $arSelect = ["ID", "NAME", "PREVIEW_TEXT"]; // Выбор полей

    // Получение элементов инфоблока
    $res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
    while ($element = $res->GetNext()) {
        $arResult["ITEMS"][] = $element;
    }
}

// Подключаем шаблон
$this->IncludeComponentTemplate();
?>
