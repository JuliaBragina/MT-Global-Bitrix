<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $APPLICATION->ShowHead();
          $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/index.css");
    ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body class="root">
<?php $APPLICATION->ShowPanel(); ?>
    <header class="header">
        <div class="header__scrollContainer">
            <div class="header__container container header__container_fixed">
                <div class="header__details">
                    <div class="header__contact-block">
                        <a href="/" class="header__link"><img class="header__logo" src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="Логотип МТ global"></a>
                        <div class="header__description">
                            <p class="header__slogan">МТ global — цифровые решения для бизнеса</p>
                            <p class="header__accreditation">Аккредитована в Минцифры</p>
                        </div>
                    </div>
                    <div class="header__contact-block">
                        <div class="header__phone-container">
                            <img class="header__icon" src="<?=SITE_TEMPLATE_PATH?>/img/phone-circle.svg" alt="Иконка телефона">
                            <img class="header__iconPhone" src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg"alt="Иконка телефона">
                        </div>
                        <div class="header__description">

                            <?php $APPLICATION->IncludeFile(
                                    SITE_DIR.'includes/phone_getConsultation.php',
                                    array(),
                                    array(
                                        "MODE" => 'HTML'
                                    )
                                );?>

                            <button type="button" class="header__support-button">Получить консультацию</button>
                        </div>
                    </div>
                    <div class="header__contact-block">
                        <div class="header__phone-container">
                            <img class="header__icon" src="<?=SITE_TEMPLATE_PATH?>/img/phone-circle.svg" alt="Иконка телефона">
                            <img class="header__iconPhone" src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg"alt="Иконка телефона">
                        </div>
                        <div class="header__description">
                                <?php $APPLICATION->IncludeFile(
                                    SITE_DIR.'includes/phone_getSupport.php',
                                    array(),
                                    array(
                                        "MODE" => 'HTML'
                                    )
                                );?>
                            <button type="button" class="header__support-button">Тех.поддержка 24/7</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary header__callback-button" aria-label="Запросить обратный звонок" data-fancybox href="#popup__callBack"  data-options='{"touch" : false, "momentum" : false}'>Обратный звонок</button>
                </div>
                <div class="header__mobile-buttons-container">
                    <input type="checkbox" class="mobile-toggle" id="mobile-toggle">
                    <label for="mobile-toggle" class="header__burger-button menu-main__burger-button" aria-label="Кнопка бургерного меню">
                        <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H6.22222V6.22222H0V0Z"/>
                            <path d="M0 10.8889H6.22222V17.1111H0V10.8889Z"/>
                            <path d="M0 21.7778H6.22222V28H0V21.7778Z"/>
                            <path d="M10.8889 0H17.1111V6.22222H10.8889V0Z"/>
                            <path d="M10.8889 10.8889H17.1111V17.1111H10.8889V10.8889Z"/>
                            <path d="M10.8889 21.7778H17.1111V28H10.8889V21.7778Z"/>
                            <path d="M21.7778 0H28V6.22222H21.7778V0Z"/>
                            <path d="M21.7778 10.8889H28V17.1111H21.7778V10.8889Z"/>
                            <path d="M21.7778 21.7778H28V28H21.7778V21.7778Z"/>
                        </svg>
                    </label>
                </div>
            </div>
        </div>

        <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "test_menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left", // или другой тип меню для подменю
                "DELAY" => "N",
                "MAX_LEVEL" => "3", // Уровень вложенности
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "Y", // Использование расширенных файлов меню
            ),
            false
        );?>

    </header>