<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arFilter = array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'); 
$arSelect = array('ID', 'NAME', 'DESCRIPTION');
$rsSect = CIBlockSection::GetList(array(),$arFilter, false, $arSelect);
while ($arSect = $rsSect->GetNext())
{
	$arResult['SECTIONS'][$arSect['ID']] = $arSect;
}

foreach($arResult['ITEMS'] as $arItem) {
	$arId[] = $arItem['ID'];
}

$arResult['ELEMENTS_SECTIONS'] = [];

$arGroupElement = [];

$db_old_groups = CIBlockElement::GetElementGroups($arId, true);
while($ar_group = $db_old_groups->Fetch()) {
	$arGroupElement[$ar_group['IBLOCK_ELEMENT_ID']][] = $ar_group['ID'];
}

$arResult['ELEMENTS_SECTIONS'] = $arGroupElement;

