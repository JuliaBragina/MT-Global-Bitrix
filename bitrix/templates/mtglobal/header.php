<?php

use Bitrix\Main\Page\Asset;
use LocalLib\Helpers\SessionFlashHelper;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

//CJSCore::Init(['jquery2']);
$obAsset = Asset::getInstance();
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/plugins.js'); // здесь jQuery 3.5.1
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/extra.js');
$obAsset->addCss(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup/magnific-popup.min.css');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup/jquery.magnific-popup.min.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.inputmask/jquery.inputmask.min.js');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/local/mtglobal.min.js');
?>
    <!DOCTYPE html>
<html>
<head>
    <?//параметры в js ?>
    <script>
        var UF_KEY_RECATCHA = '<?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_KEY_RECATCHA");?>';
        var CURRENT_URL = '<?=$APPLICATION->GetCurUri("",false);?>';
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94954073, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/94954073" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="JAQRd3xk4diRVJlltyf7OeLYhEq5l3S0xpQCfli8UVw"/>
    <!-- Google Search Console -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W0FGJBRNM0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-W0FGJBRNM0');
    </script>
    <!-- Google tag (gtag.js) -->

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PMSDNVQL');</script>
    <!-- End Google Tag Manager -->

    <meta name="yandex-verification" content="9488bfba478aa772"/>
    <meta name="google-site-verification" content="dX2L7ERZIuEjVHScwSoZy6ezAtrPKZYSxlQbdCIXASE"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="copyright" lang="<?= LANGUAGE_ID == 'ru' ? 'ru' : '' ?><?= LANGUAGE_ID == 'en' ? 'en' : '' ?>"
          content="MT global"/>


    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? /*?>
        <meta name="description" content="<?$APPLICATION->ShowProperty('description');?>" />
        <?*/ ?>
    <meta name="keywords" content="<? $APPLICATION->ShowProperty('keywords'); ?>"/>
    <? $APPLICATION->ShowHead(); ?>
    <? IncludeTemplateLangFile(__FILE__); ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/css/plugins.css" as="style">
    <link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css" as="style">
    <? /*<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/js/plugins.js" as="script">
        <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/js/scripts.js" as="script">*/ ?>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/plugins.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/extra.css">
    <script type="text/javascript">
        BX.ready(function () {
            BX.message({
                FEEDBACK__AGREE_REQUIRED: '<?=GetMessageJS("FEEDBACK__AGREE_REQUIRED")?>',
            });
        });
        $(document).ready(function () {
            $.MTglobal();
        });
    </script>
  <? /*  <script type="text/javascript" async src="https://mtglobal.megapbx.ru/callback.js" charset="utf-8"></script> */?>
    <script language="JavaScript" src="https://dunsregistered.dnb.com" type="text/javascript"></script>

    <?php if ($_SERVER['SERVER_NAME'] == "mtglobal.ru") { ?>
        <link rel="alternate" hreflang="ru" href="https://mtglobal.ru/"/>
    <?php } elseif ($_SERVER['SERVER_NAME'] == "en.mtglobal.ru") {
        ?>
        <link rel="alternate" hreflang="en" href="https://en.mtglobal.ru/"/>
        <meta name="yandex-verification" content="9488bfba478aa772"/>
    <?php } ?>

    <? switch ($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']) {
        case 'mtglobal.ru/?p=16':
        case 'mtglobal.ru/?citified-52su1r526ytj94z2mltlvwgzxq':
        case 'mtglobal.ru/?projective-0zz9rowvx2qv6gbkl':
        case 'mtglobal.ru/?rocking-tmkeb9jltlie':
        case 'mtglobal.ru/?galvanotaxis-2b0isocphs0swtuqadom20ty6kez':
        case 'mtglobal.ru/?flammulated-j49lc7q6ujl':
        case 'mtglobal.ru/?perception-jpnjiw3erv20aohhfos':
        case 'mtglobal.ru/?concessioner-zmoy5':
        case 'mtglobal.ru/?breathalyser-wcpx2tl8':
        case 'mtglobal.ru/?refashionment-n4afo2m7w5328ioru1ub8':
        case 'mtglobal.ru/?referral-ymz414x18pf3zp':
        case 'mtglobal.ru/?katalyze-my19eo1pyrbt44jj3jg80s5':
        case 'mtglobal.ru/?question-6102clju8ncmmw':
        case 'mtglobal.ru/?hinduize-q8uwpw5ube17zb852s6':
        case 'mtglobal.ru/?fender-z7lkcc':
        case 'mtglobal.ru/?fille-io39ujmtnqbq71lqch6kr':
        case 'mtglobal.ru/?stoplight-n2eilp9l6ldp7btu0dvnkir4xd':
        case 'mtglobal.ru/?perfectness-v64sr5mkb0dmre':
        case 'mtglobal.ru/?lethal-or0m8':
        case 'mtglobal.ru/?turkic-3iiff':
        case 'mtglobal.ru/?fletschhorn-e2k7':
        case 'mtglobal.ru/?epilator-t2mh7aoeb04bjtvs9yd7':
        case 'mtglobal.ru/?ecumene-vx885wglw':
        case 'mtglobal.ru/?pahlavi-y7xomxn5z1usxzujj6':
        case 'mtglobal.ru/?dormitive-7a2i444ddrehmv3fp3884i':
        case 'mtglobal.ru/?necrolatry-u8rfgc7na6vnco9j1noqowv971l39':
        case 'mtglobal.ru/?outbound-td9u7fqy3bvxlq1f':
        case 'mtglobal.ru/?occupant-v4dq5ck':
        case 'mtglobal.ru/?ullmannite-dozfogwb':
        case 'mtglobal.ru/?frenetical-h5z6i9zm16d':
        case 'mtglobal.ru/?hermoupolis-qxme4o5hd':
        case 'mtglobal.ru/?dictatorship-tyrntusjgkjb8ig9n43bme2':
        case 'mtglobal.ru/?chaffcutter-7ya':
        case 'mtglobal.ru/?obligate-3vdvda7vspbv':
        case 'mtglobal.ru/?acidogenic-03s':
        case 'mtglobal.ru/?frenetical-ctjylz5suqgkknc':
            echo '<meta name="googlebot" content="noindex">';
            break;
    } ?>

</head>
<!-- Facebook Pixel Code -->
<script>!function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1054962681987438');
    fbq('track', 'PageView');</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1054962681987438&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMSDNVQL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!--wrapper-->
<div class="wrapper">
    <!--header-->
    <header class="bgWhite w-100 header">
        <div class="container ">
            <div class="header-wrap d-flex align-items-center w-100 bbGray3-md bbTransparent btTransparent">
                <!--/-->

                <div class="header-logo d-flex align-items-center mr-auto fz-0">
                    <a href="/"><? $APPLICATION->IncludeFile('/include/logo.php', array(), array("MODE" => "php")); ?></a>
                    <? $APPLICATION->IncludeFile('/include/main/logo-text.php', array(), array("MODE" => "php")); ?>
                </div>
                <div class="header-middle w-md-100 d-flex align-items-center justify-content-end flex-wrap flex-xl-nowrap ml-auto">
                    <div class="px-xl-10 col-xl-auto col-6 d-md-block d-none">
                        <div class="w-100  d-inline-flex align-items-center infoContact">
                            <? /*<div class="ic mr-2 my-custom-1 infoContact-time">

                            </div>
                            <div class="col fz-14 colorGray8 infoContactText">
                                <div class="d-block">
                                    Ежедневно
                                </div>
                                <div class="d-block">
                                    с 10:00 до 18:00
                                </div>
                            </div> */ ?>
                        </div>
                    </div>
                    <div class="px-xl-10 col-xl-auto col-6 d-md-block d-none">
                        <div class="w-100  d-inline-flex align-items-center infoContact">
                            <div class="ic mr-2 my-custom-1 infoContact-phone">

                            </div>
                            <div class="col infoContactText">
                                <a class="d-table fz-xl-16 fz-14 colorGray8"
                                   onclick="ym(53077474,'reachGoal','phone'); return true;"
                                   href="tel:+74995021817"><? $APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'php')); ?></a>
                                <a href="tel:+78003334000" class="d-table fz-xl-16 fz-14 colorGray8">+7 800 333-40-00</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-xl-10 col-xl-auto col-6 d-md-block d-none">
                        <div class="w-100  d-inline-flex align-items-center infoContact">
                            <?/*<div class="ic mr-2 my-1 infoContact-point">

                            </div>
                            <div class="col fz-14 colorGray8 infoContactText">
                                <div class="d-block mb-1">
                                    г. Москва
                                </div>
                                <div class="d-block fz-xl-12 fz-10 miniText">
                                    Работаем
                                    по всей стране
                                </div>
                            </div>*/?>
                        </div>
                    </div>
                    <div class="px-xl-10 col-xl-auto col-md-6 ">
                        <button class="page-button revert w-auto ml-auto mr-md-0 mr-3 d-table fz-xl-15 fz-md-12 fz-0 ic btnPhone-h btn-modal_callback">
                            Обратный звонок
                        </button>
                    </div>

                </div>
                <!--/-->
                <div class="header-right ml-xl-1 ml-md-3 pl-xl-10 pl-md-4 d-xl-inline-flex d-md-block d-inline-flex align-items-center justify-content-between w-xl-100 position-relative">

                    <svg class="header-burger ml-auto" viewBox="0 0 32 32" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M0 0H6.53061V6.53061H0V0ZM12.7344 0H19.265V6.53061H12.7344V0ZM31.9994 0H25.4688V6.53061H31.9994V0ZM0 12.7344H6.53061V19.265H0V12.7344ZM19.265 12.7344H12.7344V19.265H19.265V12.7344ZM25.4688 12.7344H31.9994V19.265H25.4688V12.7344ZM6.53061 25.4694H0V32H6.53061V25.4694ZM12.7344 25.4694H19.265V32H12.7344V25.4694ZM31.9994 25.4694H25.4688V32H31.9994V25.4694Z"/>
                    </svg>
                    <svg class="header-close mt-xl-0 mt-md-n2 ml-auto" viewBox="0 0 50 50" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="25"/>
                        <path d="M32.25 17.75L18.75 31.25" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M18.75 17.75L32.25 31.25" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <!--/-->
                <div class="header-menu">
                    <div class="container wrap-header-menu scrollBox">

                        <!---->
                        <? $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                            "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней
                            "DELAY" => "N", // Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "2", // Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",  // Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N", // Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                            "USE_EXT" => "Y", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => "vertical_multilevel",
                            "MENU_THEME" => "site"
                        ),
                            false
                        ); ?>
                        <!---->
                        <img src="/img/icons/oval.svg" alt="oval">
                        <!---->
                    </div>
                </div>
                <!--/-->
            </div>
        </div>
    </header>

    <!--/header-->
    <!--main-->
    <main class="main">
<?
SessionFlashHelper::showFlashBlock();