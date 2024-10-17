<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = [
    "PARAMETERS" => [
        "IMG_SRC" => [
            "NAME" => "Путь к картинке",
            "TYPE" => "FILE",
            "MULTIPLE" => "N", // Для одной картинки
            "DEFAULT" => "",
            "FILE_TYPE" => "png,jpg,jpeg", // Убедитесь, что нет пробелов после запятых
            "PARENT" => "BASE",
            "FD_USE_MEDIALIB" => true, // Используем медиабиблиотеку
            "FD_SHOW_LINK" => true, // Показываем ссылку на файл
        ],
        "TITLE" => [
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ],
        "SLOGANS" => [
            "NAME" => "Текст",
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
            "DEFAULT" => "",
            "PARENT" => "BASE",
        ],
    ],
];
