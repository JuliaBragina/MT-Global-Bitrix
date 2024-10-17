<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult['NOINDEX'] == 'Y') {
	$APPLICATION->SetPageProperty("robots", "noindex, nofollow");
}
?>
