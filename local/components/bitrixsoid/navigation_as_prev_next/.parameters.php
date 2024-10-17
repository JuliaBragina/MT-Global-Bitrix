<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true){
    die();
}
if(!\Bitrix\Main\Loader::includeModule('iblock')){
    return;
}
$arTypes = CIBlockParameters::GetIBlockTypes();
$arIBlocks = [];
$db_iblock = CIBlock::GetList(
    ["SORT" => "ASC", 'NAME' => 'ASC'],
    ["SITE_ID" => $_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")]
);
while($arRes = $db_iblock->Fetch()){
    $arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];
}
$arComponentParameters = [
	'PARAMETERS' => [
		"IBLOCK_TYPE" => [
			"NAME" => 'Тип информационного блока (используется только для проверки)',
			"TYPE" => "LIST",
			"VALUES" => $arTypes,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		],
		"IBLOCK_ID" => [
			"NAME" => 'Код информационного блока',
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		],
		"ELEMENT_ID" => [
			"NAME" => 'ID текущего элемента',
			"TYPE" => "STRING",
		],
		"CACHE_TIME"  => ["DEFAULT"=>86400],
		"CACHE_GROUPS" => [
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => 'Учитывать права доступа',
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		],
	]
];