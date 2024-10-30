<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"SLIDER_STYLE" => array(
        "NAME" => "Стиль отображения",
        "TYPE" => "LIST",
        "VALUES" => array(
            "style1" => "За пределами контейнера",
            "style2" => "В пределах контейенара"
        ),
        "DEFAULT" => "style1",
        "MULTIPLE" => "N",
        "ADDITIONAL_VALUES" => "N",
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
