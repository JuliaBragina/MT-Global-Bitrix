<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

    $arComponentParameters = [
        "PARAMETERS" => [
            "VIDEO_SRC" => [
                "NAME" => "Путь к видео",
                "TYPE" => "FILE",
                "MULTIPLE" => "N",
                "DEFAULT" => "",
                "FILE_TYPE" => "mp4, avi, mov",
                "PARENT" => "BASE",
                "FD_USE_MEDIALIB" => true,
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


