<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Широкий ассортимент систем охраны в каталоге интернет магазина AX PRO.");
$APPLICATION->SetPageProperty("title", "Каталог систем безопасности для дома и офиса");
use Bitrix\Main\Loader;

$APPLICATION->SetTitle("Каталог");
?>

<?


if(isset($_GET['SCALED_PRICE_1']))
{
	$sortField = "SCALED_PRICE_1";
	$sortOrder = $_GET[$sortField];
}
else if(isset($_GET['shows']) )
{
	$sortField = "shows";
	$sortOrder = $_GET[$sortField];
}
else if(isset($_GET['name']))
{
	$sortField = "name";
	$sortOrder = $_GET[$sortField];
}
else 
{
	$sortField = "name";
	$sortOrder = 'asc';
}
?>

<?
$myFilter = [
	"IBLOCK_ID"=>57,
];

if($_REQUEST['SECTION_CODE'])
	$myFilter['SECTION_CODE'] = $_REQUEST['SECTION_CODE'];

$resPrice = CIBlockElement::GetList(
	["SCALED_PRICE_1" => "ASC"],
	[$myFilter], // Если нужно, получаем товары конкретного раздела по ID
	false,
	false,
	 ["SCALED_PRICE_1"]
  );
  while($getPrices = $resPrice->Fetch()) {
			$arPrices[] = $getPrices['SCALED_PRICE_1'];
  }

  if(isset($_GET['minPrice']))
  {
	$GLOBALS['priceFilter'] = [
		'><SCALED_PRICE_1' => [
			'0'=>$_GET['minPrice'], 
			'1'=>$_GET['maxPrice']
		],    
	  ];

  }
 
?>
<?
if (Loader::includeModule('search'))
{
	$arElements = $APPLICATION->IncludeComponent(
		"bitrix:search.page",
		".default",
		[
			"RESTART" => "N",
			"NO_WORD_LOGIC" => "N",
			"USE_LANGUAGE_GUESS" => "Y",
			"CHECK_DATES" => "N",
			"arrFILTER" => [
				"iblock_catalog",
			],
			"arrFILTER_iblock_catalog" => [
				57,
			]	,
			"USE_TITLE_RANK" => "N",
			"DEFAULT_SORT" => "rank",
			"FILTER_NAME" => "",
			"SHOW_WHERE" => "N",
			"arrWHERE" => [],
			"SHOW_WHEN" => "N",
			"PAGE_RESULT_COUNT" => ($arParams["PAGE_RESULT_COUNT"] ?? 50),
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "N",
		],
		$component,
		[
			'HIDE_ICONS' => 'Y',
		]
	);
	if (!empty($arElements) && is_array($arElements))
	{
		$GLOBALS['priceFilter']['ID'] = $arElements;
	
		if ($arParams['USE_SEARCH_RESULT_ORDER'] === 'Y')
		{
			$elementOrder = [
				"ELEMENT_SORT_FIELD" => "ID",
				"ELEMENT_SORT_ORDER" => $arElements,
			];
		}
	}
	else
	{
		if (is_array($arElements))
		{
			echo GetMessage("CT_BCSE_NOT_FOUND");
			//return;
		}
	}
}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog_axpro_2", 
	array(
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "priceFilter",
		"FILTER_PRICE_CATALOG_AXPRO" => $arPrices, // Список цен от минимальной к максимальной
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_axpro_2",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"CYCLIC_LOADING" => "N",
		"CYCLIC_LOADING_COUNTER_NAME" => "cycleCount",
		"DEFERRED_LOAD" => "N",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => $sortField,
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER" => $sortOrder,
		"ELEMENT_SORT_ORDER2" => "asc",
		"ENLARGE_PRODUCT" => "STRICT",
		// "FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "57",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"OFFSET_MODE" => "N",
		"OFFSET_VALUE" => "",
		"OFFSET_VARIABLE" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "catalog_axpro",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE_PRICE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array(
			0 => "SIGNATURE",
			1 => "",
		),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTIONS_OFFSET_MODE" => "N",
		"SECTIONS_OFFSET_VARIABLE" => "",
		"SECTIONS_SECTION_CODE" => "",
		"SECTIONS_SECTION_ID" => "",
		"SECTIONS_TOP_DEPTH" => "2",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PARENT_NAME" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SECTIONS" => "Y",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "site",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_OFFER_NAME" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "LINE"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>