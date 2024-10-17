<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>


    </main>
    <!--/main-->
    <!--footer-->
<? if ($APPLICATION->GetCurPage(false) == '/'): ?>
    <div class="contacts" id="contacts">
        <!--/-->
        <div class="container">
            <div class="footer-top">
                <div class="h2-comp"><?= GetMessage("CONTACT") ?></div>
                <ul class="footer-top_list">
                    <li>
                        <span><?= GetMessage("PHONE") ?>:</span>
                        <a href="tel:"><? $APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'php')); ?></a>
                    </li>
                    <li>
                        <span><?= GetMessage("EMAIL") ?>:</span>
                        <a href="mailto:<"><? $APPLICATION->IncludeFile('/include/email.php', array(), array('MODE' => 'php')); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/-->
        <div class="footer-bottom">
            <div class="container">
                <span><?= GetMessage("ADRESS") ?>:</span>
                <div class="h3-adr"><? $APPLICATION->IncludeFile('/include/adress.php', array(), array('MODE' => 'php')); ?></div>

      <a href="/contacts/"><?=LANGUAGE_ID == 'ru'?'Посмотреть на карте':''?> <?=LANGUAGE_ID == 'en'?'View on the map':''?>
          <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.5 18H28.5" stroke-width="2" />
              <path d="M18 7.5L28.5 18L18 28.5" stroke-width="2" />
          </svg>
      </a>


                <!--  <a href="https://yandex.ru/profile/62752978386" target="_blank" rel="nofollow">Посмотреть на карте >
                  <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M7.5 18H28.5" stroke-width="2" />
                   <path d="M18 7.5L28.5 18L18 28.5" stroke-width="2" />
                  </svg>
                 </a> -->
            </div>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/illustration/map.svg" alt="map">
        </div>
        <!--/-->
    </div>
<? endif; ?>
    <button class="page-button revert ic fz-0 btnUp w-auto">
      <span class="ic brdUpArrowWhite d-block position-relative"></span>
    </button>
    <footer class="footer footer-single">
        <div class="container">
            <!--/-->
            <div class="footer-info row position-relative align-content-start fz-0">
                <div class="col-lg col-12 d-flex flex-wrap footer-left align-content-start">
                    <div class="footer-one px-15 align-content-start w-100 mb-20 pb-lg-0 pb-md-2">
                        <div class="d-flex w-100">
                            <a href="/" class="footer-logo d-inline-block mb-20">
                                <img loading="lazy" src="/img/logo-footer.svg" alt="logo">
                            </a>
                            <ul class="footer-icons col d-flex pl-20">
                                <li class=" mb-20">
                                    <a rel="nofollow" href="https://zakupki.mos.ru/companyProfile/supplier/1311789"
                                       class="d-inline-block"
                                       target="_blank" rel="nofollow">
                                        <img loading="lazy" src="/img/footer-icon-1.png" alt="icon">
                                    </a>
                                </li>
                                <li class=" mb-20">
                                    <img loading="lazy" src="/img/footer-icon-2.svg" alt="icon">
                                </li>
                            </ul>
                        </div>
                        <ul class="footer-list_wrap w-100 fz-0">
                            <!--                        <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>-->
                            <li class="fz-12 colorGray8"><?= GetMessage("COP1") ?></li>
                            <li class="fz-12 colorGray8">© 2011-<?= date('Y')?></li>
                        </ul>

                    </div>
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                        "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "",  // Тип меню для остальных уровней
                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1", // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => "",  // Значимые переменные запроса
                        "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N", // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "bottom", // Тип меню для первого уровня
                        "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "COMPONENT_TEMPLATE" => "tree",
                        "MENU_THEME" => "site"
                    ),
                        false
                    ); ?>
                </div>
                <div class="footer-two w-100 align-content-start">
                    <div class="w-100 contact-f mx-auto d-flex flex-wrap">
                        <div class="px-15 col-xl-6 col-12 mb-lg-20 mb-md-30 mb-24 wrapContact-f">
                            <div class="w-100  d-inline-flex align-items-center infoContact">
                                <div class="ic mr-2 infoContact-time">

                                </div>
                                <div class="col fz-14 colorGray8 infoContactText">
                                    <div class="d-block">
                                        Ежедневно
                                    </div>
                                    <div class="d-block">
                                        с 10:00 до 18:00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-15 col-xl-6 col-12 mb-lg-20 mb-md-30 mb-24 wrapContact-f">
                            <?/*<div class="w-100  d-inline-flex align-items-center infoContact">
                                <div class="ic mr-2 infoContact-point">

                                </div>
                                <div class="col fz-14 colorGray8 infoContactText">
                                    <div class="d-block mb-1">
                                        г. Москва
                                    </div>
                                    <div class="d-block fz-xl-12 fz-10 miniText">
                                        Работаем
                                        по всей стране
                                    </div>
                                </div>
                            </div>*/?>
                        </div>
                        <div class="px-15 col-xl-6 col-12 mb-lg-20 mb-md-30 mb-24 wrapContact-f">
                            <div class="w-100  d-inline-flex align-items-center infoContact">
                                <div class="ic mr-2 infoContact-phone">

                                </div>
                                <div class="col infoContactText">
                                    <a class="d-table fz-xl-16 fz-14 colorGray8" href="tel:+74995021817"><? $APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'php')); ?></a>
                                    <a href="tel:+78003334000" class="d-table fz-xl-16 fz-14 colorGray8">+7 800 333-40-00</a>
                                </div>
                            </div>
                        </div>
                        <div class="px-15 col-xl-6 col-12 mb-lg-20 mb-md-30 mb-24 wrapContact-f">
                            <a class="w-100  d-inline-flex align-items-center infoContact"
                               href="mailto:info@mtglobal.ru">
                                <div class="ic mr-2 infoContact-mail">

                                </div>
                                <div class="col fz-16 colorGray8 infoContactText">

                                    <? $APPLICATION->IncludeFile('/include/email.php', array(), array('MODE' => 'php')); ?>

                                </div>
                            </a>
                        </div>
                        <div class="px-15 col-xl-6 col-12 mb-xl-0 mb-lg-20 mb-md-30 mb-24 wrapContact-f">
                            <button class="page-button revert w-100 btn-modal_callback">
                                Обратный звонок
                            </button>
                        </div>
                        <div class="px-15 col-xl-6 col-12 mb-xl-0 mb-lg-20 mb-md-30 mb-24 wrapContact-f">
                            <?php if (LANGUAGE_ID == 'ru') { ?>
                                <button class="page-button two btn-modal_one w-100"
                                        onclick="ym(53077474,'reachGoal','zadat-vopros'); return true;"><?= GetMessage("question") ?></button>
                                <?
                            } ?>

                            <?php if (LANGUAGE_ID == 'en') { ?>
                                <button class="page-button two btn-modal_one w-100"
                                        onclick="ym(53077474,'reachGoal','ask-a-question'); return true;"><?= GetMessage("question") ?></button>
                                <?
                            } ?>
                        </div>
                        <div class="w-100 d-flex px-15 social-f">
                            <?/*<a class="footer-fb-link" href="https://www.facebook.com/mtglobal.ru" rel="nofollow"
                               target="_blank"></a>
                            <a class="footer-insta-link" href="https://instagram.com/mtglobal.ru" rel="nofollow"
                               target="_blank"></a>*/?>
                            <a class="footer-vk-link" href="https://vk.com/mtglobal" rel="nofollow"
                               target="_blank"></a>

                        </div>
                    </div>
                </div>
            </div>

            <!--/-->
        </div>
    </footer>

    <!-- modal forms -->
<!--/footer-->
<?// подключаем компоненты с пустыми шаблонами, компоненты с шаблонами подключаются через ajax  в файле modal_forms.php?>
<? if ($_SERVER['HTTP_HOST'] === 'en.mtglobal.ru'): ?>
    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal_clear",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"Name\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"Phone\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Message\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_one",
            "PARAM_1" => "one",
            "PARAM_2" => "",
            "SUBJECT" => "Feedback",
            "HEADER" => "Ask a question",
            "BUTTON_NAME" => "Send",
            "PARAM_3" => ""
        ),
        false
    );?>
<?else:?>
    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal_clear",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"Ваше имя\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Вопрос\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_one",
            "PARAM_1" => "one",
            "PARAM_2" => "",
            "SUBJECT" => "Обратная связь",
            "HEADER" => "Задать вопрос",
            "BUTTON_NAME" => "Отправить",
            "PARAM_3" => ""
        ),
        false
    );?>
<?endif;?>
<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_clear",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_two",
        "PARAM_1" => "two",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("SERVICE_ORDER"),
        "HEADER" => GetMessage("ORDER_SERVICE"),
        "BUTTON_NAME" => GetMessage("ORDER_SERVICE"),
        "PARAM_3" => ""
    ),
    false
);?>


<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_clear",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_three",
        "PARAM_1" => "three",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("CONSULTATION_ORDER"),
        "HEADER" => GetMessage("ORDER_A_CONSULTATION"),
        "BUTTON_NAME" => GetMessage("ORDER_A_CONSULTATION"),
        "PARAM_3" => ""
    ),
    false
);?>
<?

$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_clear",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_four",
        "PARAM_1" => "four",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("SOLUTION_ORDER"),
        "HEADER" => GetMessage("ORDER_A_SOLUTION"),
        "BUTTON_NAME" => GetMessage("ORDER_A_SOLUTION"),
        "PARAM_3" => ""
    ),
    false
);?>

<? if ($_SERVER['HTTP_HOST'] === 'en.mtglobal.ru'): ?>

    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal_clear",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"Name\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"Phone\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Size of your company\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_five",
            "PARAM_1" => "five",
            "PARAM_2" => "",
            "SUBJECT" => "Ordering a consultation",
            "HEADER" => "Order a consultation",
            "BUTTON_NAME" => "Order a consultation",
            "PARAM_3" => ""
        ),
        false
    );?>

<?else:?>
    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal_clear",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_five",
            "PARAM_1" => "five",
            "PARAM_2" => "",
            "SUBJECT" => GetMessage("CONSULTATION_ORDER"),
            "HEADER" => GetMessage("ORDER_A_CONSULTATION"),
            "BUTTON_NAME" => GetMessage("ORDER_A_CONSULTATION"),
            "PARAM_3" => ""
        ),
        false
    );?>
<?endif;?>
<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_clear",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_six",
        "PARAM_1" => "six",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("PRODUCT_ORDER"),
        "HEADER" => GetMessage("ORDER_A_PRODUCT"),
        "BUTTON_NAME" => GetMessage("ORDER_A_PRODUCT"),
        "PARAM_3" => ""
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_clear",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_seven",
        "PARAM_1" => "seven",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("PARTNERSHIP_APPLICATION"),
        "HEADER" => GetMessage("BECOME_A_PARTNER"),
        "BUTTON_NAME" => GetMessage("SEND_A_REQUEST"),
        "PARAM_3" => ""
    ),
    false
);?>

<?
$callBackFields = [
    ["code" => "name", "name" => "Ф.И.О", "is_required" => "Y", "tag" => "input", "input_type" => "text"],
    ["code" => "company", "name" => "Компания", "is_required" => "Y", "tag" => "input", "input_type" => "text"],
    ["code" => "phone", "name" => "Телефон", "is_required" => "Y", "tag" => "input", "input_type" => "tel"],
    ["code" => "msg", "name" => "Ваш вопрос", "is_required" => "Y", "tag" => "textarea", "input_type" => "text"],
];
$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_callback_clear",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "57",
        ),
        "FIELDS" => json_encode($callBackFields),
        "ACTION_CODE" => "modal_box_callback",
        "PARAM_1" => "callback",
        "PARAM_2" => "",
        "SUBJECT" => "Заказ обратного звонка",
        "HEADER" => "Заказать обратный звонок",
        "BUTTON_NAME" => GetMessage("SEND_A_REQUEST"),
        "PARAM_3" => "",
        'CAPTCHA' => 'Y'
    ),
    false
);?>

</div>
<!--/wrapper-->
<?/*<script src="<?=SITE_TEMPLATE_PATH?>/js/plugins.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>*/?>
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Organization",
 "name": "MT group",
 "email": "info@mtglobal.ru",
 "url": "https://mtglobal.ru/",
 "logo": "https://mtglobal.ru/img/logo.svg",
 "telephone": "+7 (499) 502-18-17",
 "address": {
 "@type": "PostalAddress",
  "addressLocality": "Москва, Россия",
  "postalCode": "105064",
  "streetAddress": "Нижний Сусальный пер., дом 9, стр. 6"
 },
 "sameAs": [
  "https://www.facebook.com/mtglobal.ru",
  "https://instagram.com/mtglobal.ru"
 ]
}
</script>

<!-- CLEANTALK template addon -->
<?php $frame = (new \Bitrix\Main\Page\FrameHelper("cleantalk_frame"))->begin(); if(CModule::IncludeModule("cleantalk.antispam")) echo CleantalkAntispam::FormAddon(); $frame->end(); ?>
<!-- /CLEANTALK template addon -->

</body>
</html><?
\LocalLib\Helpers\SessionFlashHelper::showFlashToBlock();
