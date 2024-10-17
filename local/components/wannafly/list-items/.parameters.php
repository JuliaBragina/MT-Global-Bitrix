<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = [
    "PARAMETERS" => [
        "IMG_SRC" => [
            "NAME" => "Путь к картинке",
            "TYPE" => "FILE",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
            "FILE_TYPE" => "png, jpg, jpeg",
            "PARENT" => "BASE",
            "FD_USE_MEDIALIB" => true,
        ],
        "TITLE" => [
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ],
        "LIST" => [
            "NAME" => "Описание",
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
            "DEFAULT" => "",
            "PARENT" => "BASE",
        ],
    ],
];
