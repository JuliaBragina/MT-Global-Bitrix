<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (!empty($arResult)) {
    $arResult[0]["TITLE"] = "Главная";
}

if(empty($arResult))
	return "";

$strReturn = '';

$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<nav class="breadcrumbs__nav" aria-label="breadcrumb">';
$strReturn .= '<ul class="breadcrumbs__list">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumbs__item">
				<a href="'.$arResult[$index]["LINK"].'" class="breadcrumbs__link breadcrumbs__link_isnt_active" title="'.$title.'">
					'.$title.'
				</a>
			</li>';
		$strReturn .= '<li class="breadcrumbs__separator">/</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadcrumbs__item">
				<span class="breadcrumbs__current">'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ul>';
$strReturn .= '</nav>';

return $strReturn;
