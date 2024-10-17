<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
    "TAGS_STYLE" => array(
        "NAME" => "Стиль тегов",
        "TYPE" => "LIST",
        "VALUES" => array(
            "style1" => "Теги под заголовком",
            "style2" => "Теги над заголовком"
        ),
        "DEFAULT" => "style1", // Значение по умолчанию
        "MULTIPLE" => "N", // Одиночный выбор
        "ADDITIONAL_VALUES" => "N", // Отключить возможность пользовательского ввода
    ),
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"TITLE" => array(
        "NAME" => "Заголовок",
        "TYPE" => "TEXT",
    ),
);
