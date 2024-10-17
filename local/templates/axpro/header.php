<?php

use Bitrix\Main\Page\Asset;
use LocalLib\Helpers\SessionFlashHelper;

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
	die();
}
//CJSCore::Init(['jquery2']);
$obAsset = Asset::getInstance();
$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/plugins.js'); // здесь jQuery 3.5.1
$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/scripts.js');
$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/extra.js');
$obAsset->addCss(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup/magnific-popup.min.css');
$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup/jquery.magnific-popup.min.js');
$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.inputmask/jquery.inputmask.min.js');
$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/local/mtglobal.min.js');

$obAsset->addJs(SITE_TEMPLATE_PATH.'/js/axpro_js/cases.js');

?>

<?php
//Убираем знак вопроса в конце URL (/?)
$uri = $_SERVER['REQUEST_URI']; 
$q = strpos($uri, '?');  
if ($q === strlen($uri) - 1) { 
    header('HTTP/1.1 301 Moved Permanently'); 
    header('Location: ' . substr($uri, 0, $q)); 
}
?>

<!DOCTYPE html>
<html>
	<head>
  <meta name="yandex-verification" content="9488bfba478aa772" />
  <meta name="google-site-verification" content="dX2L7ERZIuEjVHScwSoZy6ezAtrPKZYSxlQbdCIXASE" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="copyright" lang="<?=LANGUAGE_ID == 'ru'?'ru':''?><?=LANGUAGE_ID == 'en'?'en':''?>" content="Axpro" />
     

        <title><?$APPLICATION->ShowTitle();?></title>
        <?/*?>
        <meta name="description" content="<?$APPLICATION->ShowProperty('description');?>" />
        <?*/?>
        <meta name="keywords" content="<?$APPLICATION->ShowProperty('keywords');?>" />
        <?$APPLICATION->ShowHead();?>

        <?if(isset($_GET['PAGEN_1']) || isset($_GET['shows']) || isset($_GET['name']) || isset($_GET['minPrice'])):?>
          <meta name="googlebot" content="noindex"/>
        <?endif;?>
      
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.maskedinput.min.js");?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/custom-js.js");?>
        <?IncludeTemplateLangFile(__FILE__);?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/css/plugins.css" as="style">
        <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" as="style">
        <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/js/plugins.js" as="script">
        <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/js/scripts.js" as="script">
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/plugins.css">
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
				<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/extra.css">     
         
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>    
        <script type="text/javascript" async src="https://mtglobal.megapbx.ru/callback.js" charset="utf-8"></script>
        
        <script src="<?=SITE_TEMPLATE_PATH?>/js/axpro_js/index_5.js"></script>
        <!-- <script type="module" src="<?=SITE_TEMPLATE_PATH?>/js/axpro_js/itc-custom-select.js"></script> -->
        <?if(strpos($APPLICATION->GetCurPage(),'/catalog/') !== false):?>
          <script type="module" src="<?=SITE_TEMPLATE_PATH?>/js/axpro_js/catalog_6.js"></script>
          <script type="module" src="<?=SITE_TEMPLATE_PATH?>/js/axpro_js/dualRangeSlider.js"></script>
        <?endif;?>
        
        <script src="<?=SITE_TEMPLATE_PATH?>/js/axpro_js/cases.js"></script>

        <script language="JavaScript" src="https://dunsregistered.dnb.com" type="text/javascript"></script>

        <?php if ($_SERVER['SERVER_NAME'] == "mtglobal.ru"  ) { ?>  
          <link rel="alternate" hreflang="ru" href="https://mtglobal.ru/" /> 
        <?php } elseif  ($_SERVER['SERVER_NAME'] == "en.mtglobal.ru"  )  { ?>
          <link rel="alternate" hreflang="en" href="https://en.mtglobal.ru/" />
          <meta name="yandex-verification" content="9488bfba478aa772" />
        <?php }  ?> 



	</head>
  
  <?global $USER;
    if ($USER->IsAdmin()) {?>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <?}?>
  
 <body>
		
    <section class="top-contacts">
      <?$APPLICATION->IncludeFile('/include/axpro_main/top_contact.php',Array(),Array('MODE'=>'php'));?>
    </section>
  <header class="header">
      <div class="container">
        <?$APPLICATION->IncludeFile('/include/axpro_main/logo_top.php',Array(),Array('MODE'=>'php'));?>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_top_axpro", Array(
          "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
              0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
          ),
          false
        );?>

        <div class="header__buttons">
         <?$APPLICATION->IncludeFile('/include/axpro_main/top_search.php',Array(),Array('MODE'=>'php'));?>
         <?$APPLICATION->IncludeFile('/include/axpro_main/top_basket.php',Array(),Array('MODE'=>'php'));?>
         <?$APPLICATION->IncludeFile('/include/axpro_main/top_feedback.php',Array(),Array('MODE'=>'php'));?>
        </div>

      </div>

      <?$APPLICATION->IncludeComponent("bitrix:search.title", "search_axpro_catalog", Array(
        "CATEGORY_0" => array(	// Ограничение области поиска
            0 => "no",
          ),
          "CATEGORY_0_TITLE" => "",	// Название категории
          "CHECK_DATES" => "N",	// Искать только в активных по дате документах
          "CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
          "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
          "INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
          "NUM_CATEGORIES" => "1",	// Количество категорий поиска
          "ORDER" => "date",	// Сортировка результатов
          "PAGE" => "#SITE_DIR#catalog/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
          "PREVIEW_HEIGHT" => "75",	// Высота картинки
          "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода
          "PREVIEW_WIDTH" => "75",	// Ширина картинки
          "PRICE_CODE" => array(	// Тип цены
            0 => "BASE_PRICE",
          ),
          "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
          "SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
          "SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
          "SHOW_PREVIEW" => "Y",	// Показать картинку
          "TOP_COUNT" => "5",	// Количество результатов в каждой категории
          "USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
          "COMPONENT_TEMPLATE" => "catalog"
        ),
        false,
        [
          'HIDE_ICONS' => 'Y',
        ]
      );?>

    </header>
  <!--/header-->
<?if($APPLICATION->GetCurPage() !== '/'):?>
  <main class="main">
  <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "axpro_breadcrumb", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s3",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
 
<?endif;?>
<?
SessionFlashHelper::showFlashBlock();