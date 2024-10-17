<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

// Подключаем необходимые модули
use Bitrix\Main\Loader;

if (!Loader::includeModule("iblock")) {
    ShowError("Модуль Инфоблоков не установлен");
    return;
}

// Параметры компонента
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
$arParams["NEWS_COUNT"] = intval($arParams["NEWS_COUNT"]) > 0 ? intval($arParams["NEWS_COUNT"]) : 20;

// Фильтр для выборки элементов
$arFilter = [
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ACTIVE" => "Y",
];


// Получаем элементы инфоблока
$arResult["ITEMS"] = [];

$rsElements = CIBlockElement::GetList(
    ["SORT" => "ASC"],
    $arFilter,
    false,
    ["nTopCount" => $arParams["NEWS_COUNT"]],
);

while ($arElement = $rsElements->GetNextElement()) {
    $arFields = $arElement->GetFields(); // Получаем основные поля
    $props = $arElement->GetProperties(); // Получаем свойства
    $arFields['PROPERTIES'] = $props; // Сохраняем свойства в массив $arFields

    // Обработка PREVIEW_PICTURE
    if ($arFields["PREVIEW_PICTURE"]) {
        $arFields["PREVIEW_PICTURE"] = CFile::GetFileArray($arFields["PREVIEW_PICTURE"]);
    }

    // Обработка DETAIL_PICTURE (если нужно)
    if ($arFields["DETAIL_PICTURE"]) {
        $arFields["DETAIL_PICTURE"] = CFile::GetFileArray($arFields["DETAIL_PICTURE"]);
    }

    // Добавляем элемент в результат
    $arResult["ITEMS"][] = $arFields;
}

// Подключаем шаблон компонента
$this->IncludeComponentTemplate();

