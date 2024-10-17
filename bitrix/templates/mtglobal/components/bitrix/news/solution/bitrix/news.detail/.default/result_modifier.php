<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult) {

	// result
	$cp = $this->__component; // объект компонента

	if (is_object($cp))
	{
	   // добавим в arResult компонента поля
	   $cp->arResult['NOINDEX'] = $arResult['PROPERTIES']['NOINDEX']['VALUE'];
	   $cp->SetResultCacheKeys(array('NOINDEX'));

	   // сохраним их в копии arResult, с которой работает шаблон
	   $arResult['NOINDEX'] = $cp->arResult['NOINDEX'];
	}

}