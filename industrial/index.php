<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Промышленные IT-решения от MTGlobal - Эффективность и надежность");
$APPLICATION->SetPageProperty("description", "Интегрированные IT-решения для промышленности и сельского хозяйства, обеспечивающие автоматизацию и оптимизацию процессов.");
$APPLICATION->SetTitle("Индустриальные решения");

use Bitrix\Main\Application;
$request = Application::getInstance()->getContext()->getRequest();

$CACHE_TYPE = 'A';

$isPost = $request->isPost();
if($isPost)
    $CACHE_TYPE = 'N';

?><?
$TITLE_BLOCK_pagination = "Читать про другие индустриальные решения MT global";
$TITLE_BLOCK_industrial = "Индустриальные ИТ решения";
$TITLE_BLOCK_info = "Почему еще клиенты выбирают нас:";
$TITLE_BLOCK_service = "Для ИТ-инфраструктуры предприятий мы оказываем услуги:";
$TITLE_BLOCK_info_ID = "11";
$TITLE_BLOCK_service_ID = "31";
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"industrial", 
	array(
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
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "BLOCK1_IMG",
			1 => "BLOCK1_TEXT",
			2 => "BLOCK2_TITLE",
			3 => "BLOCK2_ITEMS",
			4 => "BLOCK2_ITEMS_TEXT",
			5 => "BLOCK3_TITLE",
			6 => "BLOCK3_ITEMS",
			7 => "TEXT2SECTION",
			8 => "SERVICE_TITLE",
			9 => "BLOCK4_TITLE",
			10 => "BLOCK4_IMG",
			11 => "BLOCK4_ITEMS",
			12 => "POC_T",
			13 => "POC_N1",
			14 => "POC_TT1",
			15 => "POC_TE1",
			16 => "POC_N2",
			17 => "POC_TT2",
			18 => "POC_TE2",
			19 => "POC_N3",
			20 => "POC_TT3",
			21 => "POC_TE3",
			22 => "POC_SUBT",
			23 => "TEXT_MOREDETAILS",
			24 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "34",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "BLOCK1_IMG",
			1 => "ICON_LIST",
			2 => "",
		),
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
		"SEF_FOLDER" => "/industrial/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_BLOCK_info" => "",
		"TITLE_BLOCK_info_ID" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "industrial",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>