<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Page\Asset;
use \Bitrix\Main\Grid\Declension;


/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?$APPLICATION->ShowHead();?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" lang="ru" content="MT global" />
    <meta name="yandex-verification" content="9488bfba478aa772" />
    <meta name="google-site-verification" content="dX2L7ERZIuEjVHScwSoZy6ezAtrPKZYSxlQbdCIXASE" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap"
	        rel="stylesheet">
	<? $asset = Asset::getInstance();?>
	<?$asset -> addJs( SITE_TEMPLATE_PATH . '/js/jquery.min.js' );?>
    <?$asset -> addJs( SITE_TEMPLATE_PATH . '/js/select2.min.js' );?>
    <?$asset -> addJs( SITE_TEMPLATE_PATH . '/js/slick.min.js' );?>
    <?$asset -> addJs( SITE_TEMPLATE_PATH . '/js/script.js' );?>
    <?$asset -> addJs( SITE_TEMPLATE_PATH . '/js/jquery.inputmask.min.js' );?>

	<?$asset -> addCss( SITE_TEMPLATE_PATH . '/fonts/fonts.css');?>
	<?$asset -> addCss( SITE_TEMPLATE_PATH . '/css/select2.min.css');?>
	<?$asset -> addCss( SITE_TEMPLATE_PATH . '/css/slick.css');?>
	<?$asset -> addCss( SITE_TEMPLATE_PATH . '/css/style.css');?>
	<?$asset -> addCss( SITE_TEMPLATE_PATH . '/css/media.css');?>
	
	<script type="text/javascript" async src="https://mtglobal.megapbx.ru/callback.js" charset="utf-8"></script>
	
</head>
<body>
	<?$APPLICATION->ShowPanel(); ?>
    <div class="fullScreen">
        <header class="mainHeader">
            <div class="mainHeader__bgImg">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/background.png" alt="">
            </div>
            <div class="mainHeader__centerImg">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/big-letter.png" alt="">
            </div>
            <div class="sticky-header">
                <div class="global-container">
                    <div class="mainHeader__bar">
                        <div class="mainHeader__logo">
                            <a class="logo__link" href="">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="">
                            </a>
                        </div>
                        <div class="fixed-menu" id="fixed-menu">
                            <div class="mainHeader__tel" style="padding-right: 0;">
                                <a class="tel-link" href="tel:+74995021817">
                                    +7 499 502-18-17
                                </a>
                            </div>
                            <div class="mainHeader__menu" style="display: none;">
                                <button class="menuBtn menuBtn-open">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/burger.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absoluteMenu" id="menu">
                <div class="mainHeader__centerImg">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/big-letter-trans.png" alt="">
                </div>
                <div class="global-container">
                    <div class="mainHeader__bar">
                        <div class="mainHeader__logo">
                            <a class="logo__link" href="">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="">
                            </a>
                        </div>
                        <div class="mainHeader__menu">
                            <button class="menuBtn menuBtn-close">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" class="cls-fill" />
                                    <path d="M32.25 17.75L18.75 31.25" class="cls-stroke" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M18.75 17.75L32.25 31.25" class="cls-stroke" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="fixedMenu">
                    <ul class="fixedList">
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    Главная
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    О компании
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    Услуги
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    Специализация
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    Комплексные решения
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    Индустриальные решения
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="fixedList__item">
                            <div class="global-container global-container-min">
                                <a class="fixedList__link" href="">
                                    Продукты
                                </a>
                                <ul class="fixedListNext">
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Офисы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Промышленность и сельское хозяйство
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Складские помещения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Магазины
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Отели
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Рестораны и бары
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Бизнес-центры, торговые центры, спортивные комплексы
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="fixedListNext__item">
                                        <a class="fixedListNext__link" href="">
                                            Государственные учреждения
                                            <div class="arr-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/menu-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>