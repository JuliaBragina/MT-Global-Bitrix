<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сервисы MTGlobal - Полный спектр IT-услуг для вашего бизнеса");
$APPLICATION->SetTitle("Услуги");
$APPLICATION->SetPageProperty('description', 'Полный спектр IT-сервисов от MTGlobal: аутсорсинг, поддержка, консалтинг и интеграция для эффективности вашего предприятия.');

use Bitrix\Main\Application;
$request = Application::getInstance()->getContext()->getRequest();

$CACHE_TYPE = 'A';

$isPost = $request->isPost();
if($isPost)
    $CACHE_TYPE = 'N';

?><?php
$TITLE_BLOCK_pagination = "Читать про другие услуги MT global";
$TITLE_BLOCK_service = "Обслуживание ИТ инфраструктуры";
$TITLE_BLOCK_info = "Почему еще клиенты выбирают нас:";
if($_SERVER['REQUEST_URI'] == '/service/it-autsorsing-podderzhka-i-obsluzhivanie-it-infrastruktury-i-rabochikh-mest/') {
	$TITLE_BLOCK_info_ID = "52";
	$TITLE_BLOCK_info_type = "services_blocks";
} else {
	$TITLE_BLOCK_info_ID = "11";
	$TITLE_BLOCK_info_type = "main";
}
$TITLE_BLOCK_licensed = "Поддерживаемое и лицензируемое ПО:";
$TITLE_BLOCK_licensed_ID = "29";
?>
<?php $APPLICATION->IncludeComponent(
	"bitrix:news",
	"service",
	Array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => $CACHE_TYPE,
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("","ICON_LIST","BLOCK1_IMG","BLOCK1_ITEM1","BLOCK1_ITEM2","BLOCK1_ITEM3","NUM1_NUM","NUM1_PIC","NUM1_TITLE","NUM1_TTEXT","BLOCK2_TITLE","BLOCK2_ITEMS","BLOCK3_TITLE","BLOCK3_ITEMS","BLOCK3_FOOTER","TEXT2SECTION","BLOCK4_TITLE","BLOCK4_ITEMS","NUM2_NUM","NUM2_PIC","NUM2_TITLE","NUM2_TTEXT","BLOCK5_TITLE","BLOCK5_ITEMS","BLOCK6_TITLE","BLOCK6_ITEMS","BLOCK7_TITLE","BLOCK7_ITEMS","NUM3_NUM","NUM3_PIC","NUM3_TITLE","NUM3_TTEXT","BLOCK8_TITLE","BLOCK8_ITEMS","BLOCK9_TITLE","BLOCK9_ITEMS","BLOCK10_ITEMS","BLOCK10_TITLE","TEXT_MOREDETAILS",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "31",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("ICON_LIST",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/service/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","news"=>"","section"=>""),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_BLOCK_info" => "Почему еще клиенты выбирают нас:",
		"TITLE_BLOCK_info_ID" => "11",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>