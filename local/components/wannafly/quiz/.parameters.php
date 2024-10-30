<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = [
    "PARAMETERS" => [
        "TITLE" => [
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "DEFAULT" => "Текстовый блок",
            "PARENT" => "BASE",
        ],
        "DESCRIPTION" => [
            "NAME" => "Текст",
            "TYPE" => "HTML",
            "ROWS" => 10,
            "PARENT" => "BASE",
        ],
    ],
];

