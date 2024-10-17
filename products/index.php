<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сервисы MTGlobal - Полный спектр IT-услуг для вашего бизнеса");
$APPLICATION->SetPageProperty("description", "Полный спектр IT-сервисов от MTGlobal: аутсорсинг, поддержка, консалтинг и интеграция для эффективности вашего предприятия.");
$APPLICATION->SetTitle("Продукты");
use Bitrix\Main\Application;
$request = Application::getInstance()->getContext()->getRequest();

$CACHE_TYPE = 'A';

$isPost = $request->isPost();
if($isPost)
    $CACHE_TYPE = 'N';

?><section class="section-single products">
 <div class="container">
  <!--/-->
  <div class="products-text">
   <div class="products-text_top">
    <h1><?$APPLICATION->IncludeFile('/include/products/products_topblock_h1.php',Array(),Array('MODE'=>'php'));?></h1>
    <p class="descr-sm"><?$APPLICATION->IncludeFile('/include/products/products_topblock_text.php',Array(),Array('MODE'=>'php'));?></p>
   </div>
   <button class="page-button btn-modal_six">Заказать продукт</button>
  </div>
  <?$APPLICATION->IncludeFile('/include/products/products_topblock_img.php',Array(),Array('MODE'=>'php'));?>
 </div>
</section>
<!--/products-->
<!--equipment-->
<section class="section equipment">
    <div class="container">
    <? $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "mtglobal",
        array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    ); ?>
    </div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"products_equipment",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => $CACHE_TYPE,
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "27",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ICON",
			1 => "NUMBER",
			2 => "FILE",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "products_equipment",
		"TITLE_BLOCK_equipment" => "Поставляемое оборудование"
	),
	false
);?>
</section>
<!--/equipment-->
<!--licensed-->
<section class="section licensed">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"products_licensed",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "29",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "WE",
			1 => "ICON",
			2 => "NUMBER",
			3 => "FILE",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "products_licensed",
		"TITLE_BLOCK_licensed" => "Поставляемое и лицензируемое ПО:"
	),
	false
);?>
</section>
<!--/licensed -->
<!--info-->
<section class="section info">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_info",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ICON",
			2 => "WE",
			3 => "NUMBER",
			4 => "FILE",
			5 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_info",
		"TITLE_BLOCK_info" => "Почему еще клиенты выбирают нас:"
	),
	false
);?>
</section>
<!--/info-->
<!--request-->
<div class="section request-five section-indent">
 <div class="container">
  <!--/-->
  <?/*<form class="request-form" autocomplete="off">
   <div class="form-top">
    <input class="form-input" type="tel" placeholder="Телефон" required>
    <button class="form-button" type="submit">Проконсультироваться</button>
   </div>
   <div class="form-bottom">
    <label class="input-checkbox">
     <input type="checkbox" required checked>
     <span class="input-checkbox_icon">
      <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
      </svg>
     </span>
     <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
    </label>
   </div>
  </form>*/?>
<?$APPLICATION->IncludeComponent(
	"bitrixsoid:feedback",
	"request_1",
	array(
		"COMPONENT_TEMPLATE" => "request_1",
		"EVENT_MESSAGE_ID" => array(
			0 => "50",
		),
//		"FIELDS" => "[{\"code\":\"phone\",\"name\":\"Телефон\"}]",
		"FIELDS" => "[{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"}]",
		"ACTION_CODE" => "request_1"
	),
	false
);?>
  <!--/-->
 </div>
</div>
<!--/request-->
<!--partners-->
<section class="section partners">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><?$APPLICATION->IncludeFile('/include/products/products_partners-title.php',Array(),Array('MODE'=>'php'));?></h2>
  </div>
  <!--/-->
  <ul class="partners-tabs">
  	<?$APPLICATION->IncludeFile('/include/about/about_partners-tabs.php',Array(),Array('MODE'=>'php'));?>
</ul>
<div class="partners-boxs">
 <div class="partners-wrap">
  <ul class="partners-wrap_top">
  	<?$APPLICATION->IncludeFile('/include/about/about_partners-boxs_vendors_top.php',Array(),Array('MODE'=>'php'));?>
  </ul>
  <ul class="partners-wrap_bottom">
  	<?$APPLICATION->IncludeFile('/include/about/about_partners-boxs_vendors_bottom.php',Array(),Array('MODE'=>'php'));?>
  </ul>
 </div>
 <!---->
 <div class="partners-wrap">
  <ul class="partners-wrap_top">
  	<?$APPLICATION->IncludeFile('/include/about/about_partners-boxs_distrib_top.php',Array(),Array('MODE'=>'php'));?>
  </ul>
 </div>
 <!---->
</div>
  <!--/-->
 </div>
</section>
<!--/partners-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>