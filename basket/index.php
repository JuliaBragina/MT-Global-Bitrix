<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");
?><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket", 
	"axpro_basket", 
	array(
		"ACTION_VARIABLE" => "basketAction",
		"AUTO_CALCULATION" => "Y",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"COLUMNS_LIST_EXT" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DISCOUNT",
			2 => "DELETE",
			3 => "DELAY",
			4 => "SUM",
		),
		"COLUMNS_LIST_MOBILE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DISCOUNT",
			2 => "DELETE",
			3 => "DELAY",
			4 => "SUM",
		),
		"COMPATIBLE_MODE" => "Y",
		"CORRECT_RATIO" => "Y",
		"DEFERRED_REFRESH" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_MODE" => "extended",
		"EMPTY_BASKET_HINT_PATH" => "/catalog/",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "N",
		"LABEL_PROP" => array(
		),
		"PATH_TO_ORDER" => "/basket/",
		"PRICE_DISPLAY_MODE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
		"QUANTITY_FLOAT" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_FILTER" => "N",
		"SHOW_RESTORE" => "Y",
		"TEMPLATE_THEME" => "blue",
		"TOTAL_BLOCK_DISPLAY" => array(
			0 => "top",
		),
		"USE_DYNAMIC_SCROLL" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N",
		"USE_PRICE_ANIMATION" => "Y",
		"COMPONENT_TEMPLATE" => "axpro_basket",
		"ADDITIONAL_PICT_PROP_57" => "-"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.small.mail",
	"",
	Array(
		"COLUMNS_LIST" => array("NAME","PRICE_FORMATED","QUANTITY_FORMATED","SUM","DETAIL_PICTURE"),
		"PATH_TO_BASKET" => "/personal/basket.php",
		"PATH_TO_ORDER" => "/personal/order.php",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_SUBSCRIBE" => "N",
		"USER_ID" => "{#USER_ID#}"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>