<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
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
	"TITLE_BLOCK_program" => Array(
		"NAME" => "Заголовок блока",
		"TYPE" => "STRING",
	),
	"TITLE_TEXT_program" => Array(
		"NAME" => "Текст блока",
		"TYPE" => "STRING",
	),
	"SUBTITLE_BLOCK_program" => Array(
		"NAME" => "Подзаголовок блока",
		"TYPE" => "STRING",
	),
	"IMG_BLOCK_program" => Array(
		"NAME" => "1-я картинка блока",
		"TYPE" => "STRING",
	),
	"IMG2_BLOCK_program" => Array(
		"NAME" => "2-я картинка блока",
		"TYPE" => "STRING",
	),
);
?>
