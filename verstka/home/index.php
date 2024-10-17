<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "MT global: услуги в области консалтинга, поставок, интеграции и обслуживания ИТ-инфраструктуры");
$APPLICATION->SetTitle("MT Global");
$APPLICATION->SetPageProperty('description', 'MT global: обеспечение комплексного обслуживания и непрерывности работы сетевой инфраструктуры и систем коммуникаций. Услуги в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.');
\Bitrix\Main\Page\Asset::getInstance()->addCss('/verstka/grid.css');
\Bitrix\Main\Page\Asset::getInstance()->addCss('/verstka/home/style.css');

use Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();

$CACHE_TYPE = 'A';
$isPost = $request->isPost();
if ($isPost) $CACHE_TYPE = 'N';
?>
    <!--progress-bar-->
    <div class="progress-bar">
        <div id="progress-bar"></div>
    </div>
    <!---/progress-bar-->
    <!--home-->
    <section class="home">
        <!--/-->
        <div class="home-bgr">
            <video autoplay muted playsinline loop preload data-keepplaying>
                <source src="/video/2.mp4" type='video/mp4'>
            </video>
        </div>
        <!--/-->
        <div class="home-top">
            <div class="home-top_text">
                <h1><? $APPLICATION->IncludeFile('/include/main/home-top.php', array(), array('MODE' => 'php')); ?></h1>
                <p class="descr-xl"><? $APPLICATION->IncludeFile('/include/main/home-top_text.php', array(), array('MODE' => 'html')); ?></p>
            </div>
        </div>

        <div class="container">
            <div class="mx-n14 d-flex flex-wrap  pb-lg-95 pb-15 ">
                <div class="col-lg-6 col-12 px-14 mb-lg-28 mb-15">
                    <a href="#" class="w-100 position-relative p-lg-24 p-20 homeCard d-flex flex-column">
                        <div class="wrapText w-100 position-relative colorDark">
                            <div class="w-100 fz-20 mb-lg-24 mb-32 fw-7 colorBlue h2">
                                Комплексная поставка оборудования и ПО
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Установка и лицензирование ПО
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Настройка СХД, виртуализации, резервного копирования
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Подключение аппаратной инфраструктуры
                            </div>
                        </div>
                        <div class="whiteRightTick mt-auto ml-auto ic position-relative" ></div>
                    </a>
                </div>
                <div class="col-lg-6 col-12 px-14 mb-lg-28 mb-15">
                    <a href="#" class="w-100 position-relative p-lg-24 p-20 homeCard d-flex flex-column">
                        <div class="wrapText w-100 position-relative colorDark">
                            <div class="w-100 fz-20 mb-lg-24 mb-32 fw-7 colorBlue h2">
                                Аутсорсинг сетевой инфраструктуры
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Виртуальный IT-директор
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Техническое обслуживание
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Предотвращение сбоев и мониторинг
                            </div>
                        </div>
                        <div class="whiteRightTick mt-auto ml-auto ic position-relative" ></div>
                    </a>
                </div>
                <div class="col-lg-6 col-12 px-14 mb-lg-28 mb-15">
                    <a href="#" class="w-100 position-relative p-lg-24 p-20 homeCard d-flex flex-column">
                        <div class="wrapText w-100 position-relative colorDark">
                            <div class="w-100 fz-20 mb-lg-24 mb-32 fw-7 colorBlue h2">
                                IT-консалтинг
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Аудит IT инфраструктуры
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Разработка IT-стратегии
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Проектирование инфраструктуры
                            </div>
                        </div>
                        <div class="whiteRightTick mt-auto ml-auto ic position-relative" ></div>
                    </a>
                </div>
                <div class="col-lg-6 col-12 px-14 mb-lg-28 mb-15">
                    <a href="#" class="w-100 position-relative p-lg-24 p-20 homeCard d-flex flex-column">
                        <div class="wrapText w-100 position-relative colorDark">
                            <div class="w-100 fz-20 mb-lg-24 mb-32 fw-7 colorBlue h2">
                                pro-AV решения для бизнеса
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Digital Signage для бизнеса
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Решение на базе LED / LCD
                            </div>
                            <div class="w-100 fz-16 mb-16 textBox">
                                Конфигурация решений мультимедиа
                            </div>
                        </div>
                        <div class="whiteRightTick mt-auto ml-auto ic position-relative" ></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-box modal-box_eight">
            <svg class="modal-close modal-close_eight" width="33" height="33" viewBox="0 0 33 33" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="modal_box_eight">
                <p>MT global – это сплоченная команда мультидисциплинарных специалистов в сфере консалтинга, поставок,
                    интеграции и обслуживания IT-инфраструктуры. Более 12 лет мы сотрудничаем с российскими и
                    зарубежными партнерами, применяя проверенные мировые практики. Для компаний любого масштаба мы:</p>
                <ol>
                    <li>Оказываем услуги консалтинга, поставки и интеграции оборудования с лицензионным ПО. Проводим
                        ИТ-аутсорсинг, сохраняя стабильность инфраструктуры и рабочих мест сотрудников.
                    </li>
                    <li>Обслуживаем сервера и системы хранения данных. Поддерживаем аппаратную, сетевую инфраструктуру,
                        системы безопасности и программное обеспечение.
                    </li>
                    <li>Предлагаем комплексные и индустриальные решения, включая ИТ-переезд, резервное восстановление,
                        модернизацию ИТ-инфраструктуры, устранение рисков, минимизацию затрат и т.д.
                    </li>
                </ol>
                <p>Работаем с компаниями любых масштабов: от небольших магазинов до торговых центров и спортивных
                    комплексов.</p>
                <h2> MT global – долгосрочный партнер в IT-сфере </h2>
                <p>Сотрудничая с российскими и зарубежными партнерами, мы собрали целый комплекс мировых практик. Их
                    применение помогло завершить более 70 проектов на аутсорсе. При этом для каждой компании
                    разрабатываем персональный план, придерживаясь следующих принципов:</p>
                <ol>
                    <li>Ответственность. Перед началом работ подписываем SLA, обеспечивая гарантии выполнения.</li>
                    <li>Профессионализм. Команда MT global – это мультидисциплинарные специалисты с сертификатами от
                        ведущих мировых вендоров.
                    </li>
                    <li>Проактивность. После завершения проекта вы получите круглосуточную техподдержку и консультацию
                        по вопросам работы ИТ-инфраструктуры.
                    </li>
                    <li>Эффективность. В ходе комплексного обслуживания не только обеспечиваем стабильную работу систем,
                        но и стараемся усилить слабые места для улучшения показателей ИТ-инфраструктуры.
                    </li>
                </ol>
                <p>С особым трепетом относимся к партнерам по оборудованию и программному обеспечению. Сотрудничаем
                    только с лидерами рынка, следуя мировым технологическим тенденциям. Отдельное внимание уделяем
                    партнерской программе – вы можете стать не только клиентом, но и нашим агентом, получая прибыль с
                    каждого контракта.</p>

            </div>
        </div>
        <div class="modal-bgr modal-bgr_eight"></div>
        <!--/-->
        <div class="container">
            <div class="home-bottom">
                <div class="h3-res"><? $APPLICATION->IncludeFile('/include/main/home-bottom.php', array(), array('MODE' => 'html')); ?></div>
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "main_home-bottom", array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",    // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                    "CACHE_TYPE" => "A",    // Тип кеширования
                    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                    "DISPLAY_DATE" => "N",    // Выводить дату элемента
                    "DISPLAY_NAME" => "Y",    // Выводить название элемента
                    "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                    "FIELD_CODE" => array(    // Поля
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",    // Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "1",    // Код информационного блока
                    "IBLOCK_TYPE" => "main",    // Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "3",    // Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости",    // Название категорий
                    "PARENT_SECTION" => "",    // ID раздела
                    "PARENT_SECTION_CODE" => "",    // Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(    // Свойства
                        0 => "",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                    "SHOW_404" => "N",    // Показ специальной страницы
                    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                    "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                ),
                    false
                ); ?>
            </div>
        </div>
        <!--/-->
    </section>
    <!--/home-->

    <!--when-->
    <section class="section when">
        <div class="container">
            <!--/-->
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "main_when", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                "DISPLAY_NAME" => "N",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "3",    // Код информационного блока
                "IBLOCK_TYPE" => "main",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "100",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "ICON",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            ),
                false
            ); ?>
            <!--/-->
        </div>
    </section>
    <!--/when-->
    <!--request-->
    <div class="section section-indent request">
        <div class="container">
            <div class="like_h2 request__title--h2">Получить консультацию</div>
            <!--/-->
            <? /*<form class="request-form" autocomplete="off">
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
  </form>*/ ?>
            <? $APPLICATION->IncludeComponent(
                "bitrixsoid:feedback",
                "request_1",
                array(
                    "COMPONENT_TEMPLATE" => "request_1",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "50",
                    ),
                    "FIELDS" => "[{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"}]",
                    "ACTION_CODE" => "request_1",
                    "SUBJECT" => "Обратная связь",
                    "HEADER" => "Задать вопрос",
                    "BUTTON_NAME" => "Отправить",
                    "PARAM_1" => "",
                    "PARAM_2" => "",
                    "PARAM_3" => ""
                ),
                false
            ); ?>
            <!--/-->
        </div>
    </div>
    <!--/request-->
    <!--services-->
<? $TITLE_BLOCK_service = "Наши услуги"; ?>
    <section class="section services">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "anons_service",
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
                "IBLOCK_ID" => "31",
                "IBLOCK_TYPE" => "content",
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
                    0 => "ICON_LIST",
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
                "COMPONENT_TEMPLATE" => "anons_service",
                "TITLE_BLOCK_service" => $GLOBALS["TITLE_BLOCK_service"]
            ),
            false
        ); ?>
    </section>
    <!--/services-->
    <!--complex-->
<? $TITLE_BLOCK_solution = "Комплексные решения"; ?>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "anons_solution",
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
        "IBLOCK_ID" => "33",
        "IBLOCK_TYPE" => "content",
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
            0 => "NAME_LIST",
            1 => "TEXT_LIST",
            2 => "",
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
        "COMPONENT_TEMPLATE" => "anons_solution",
        "TITLE_BLOCK_solution" => $GLOBALS["TITLE_BLOCK_solution"],
        "TITLE_BLOCK_service" => ""
    ),
    false
); ?>

    <!--/complex-->
<? $TITLE_BLOCK_industrial = "Индустриальная экспертиза"; ?>
    <section class="section section-indent expertise">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "anons_industrial",
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
                "IBLOCK_ID" => "34",
                "IBLOCK_TYPE" => "content",
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
                    0 => "BLOCK1_IMG",
                    1 => "BLOCK1_TEXT",
                    2 => "",
                    3 => "",
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
                "COMPONENT_TEMPLATE" => "anons_industrial",
                "TITLE_BLOCK_industrial" => $GLOBALS["TITLE_BLOCK_industrial"],
                "TITLE_BLOCK_service" => ""
            ),
            false
        ); ?>
    </section>
    <!--specializations-->
<? $TITLE_BLOCK_specialization = "Наша специализация"; ?>
    <section class="section specializations">
        <? $APPLICATION->IncludeComponent("bitrix:news.list", "anons_specialization", array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",    // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
            "DISPLAY_DATE" => "N",    // Выводить дату элемента
            "DISPLAY_NAME" => "N",    // Выводить название элемента
            "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
            "FIELD_CODE" => array(    // Поля
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
            "FILTER_NAME" => "",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "32",    // Код информационного блока
            "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",    // Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",    // Название категорий
            "PARENT_SECTION" => "",    // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(    // Свойства
                0 => "",
                1 => "ICON",
                2 => "WE",
                3 => "NUMBER",
                4 => "FILE",
                5 => "",
            ),
            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
            "SHOW_404" => "N",    // Показ специальной страницы
            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            "COMPONENT_TEMPLATE" => "anons_service",
            "TITLE_BLOCK_specialization" => $GLOBALS["TITLE_BLOCK_specialization"],    // Заголовок блока
        ),
            false
        ); ?>
    </section>
    <!--/specializations-->
    <!--request-->
    <div class="section request-two">
        <div class="container">

            <div class="like_h2 request__title--h2">Заказать обслуживание IT инфраструктуры</div>
            <!--/-->
            <? /*<form class="request-form_two" autocomplete="off">
   <div class="form-top">
    <input class="form-input" type="text" placeholder="Имя" required>
    <select class="form-select">
     <option disabled selected>Ваша индустрия</option>
     <option value="Промышленность и сельское хозяйство">Промышленность и сельское хозяйство</option>
     <option value="Ритейл">Ритейл</option>
     <option value="HoReCa">HoReCa</option>
     <option value="Транспорт и логистика">Транспорт и логистика</option>
     <option value="Государственные учреждения">Государственные учреждения</option>
     <option value="IT">IT</option>
     <option value="Строительство и недвижимость">Строительство и недвижимость</option>
     <option value="Другая">Другая</option>
    </select>
    <input class="form-input" type="tel" placeholder="Телефон" required>
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
    <button class="form-button" type="submit">Проконсультироваться</button>
   </div>
  </form>*/ ?>
            <? $APPLICATION->IncludeComponent(
                "bitrixsoid:feedback",
                "request_2",
                array(
                    "COMPONENT_TEMPLATE" => "request_2",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "50",
                    ),
                    "FIELDS" => "[{\"code\":\"name\",\"name\":\"Имя\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"industry\",\"name\":\"Ваша индустрия\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"}]",
                    "ACTION_CODE" => "request_2",
                    "SUBJECT" => "Обратная связь",
                    "HEADER" => "Задать вопрос",
                    "BUTTON_NAME" => "Отправить",
                    "PARAM_1" => "",
                    "PARAM_2" => "",
                    "PARAM_3" => ""
                ),
                false
            ); ?>
            <!--/-->
        </div>
    </div>
    <!--/request-->
    <!--why-->
    <section class="section why">
        <div class="container">
            <!--/-->
            <div class="section-title" style="transform: translate(0px, 0px); opacity: 1;">
                <h2 style="transform: translate(0px, 0px); opacity: 1;"><? $APPLICATION->IncludeFile('/include/main/section-why-top_text.php', array(), array('MODE' => 'html')); ?></h2>
            </div>
            <!--/-->
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "main_why", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                "DISPLAY_NAME" => "N",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "5",    // Код информационного блока
                "IBLOCK_TYPE" => "main",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "ICON",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            ),
                false
            ); ?>
            <!--/-->
        </div>
    </section>
    <!--/why-->
    <!--info-->
    <section class="section info">
        <? $APPLICATION->IncludeComponent(
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
        ); ?>
    </section>
    <!--/info-->
    <!--process-->
    <section class="section process">
        <div class="container">
            <!--/-->
            <div class="section-title">
                <h2><? $APPLICATION->IncludeFile('/include/main/section-process-top_text.php', array(), array('MODE' => 'html')); ?></h2>
            </div>

            <? $APPLICATION->IncludeComponent("bitrix:news.list", "main_process", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                "DISPLAY_NAME" => "N",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "7",    // Код информационного блока
                "IBLOCK_TYPE" => "main",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "40",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "ICON",
                    1 => "NUMBER",
                ),
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "COMPONENT_TEMPLATE" => ".default"
            ),
                false
            ); ?>

        </div>
    </section>
    <!--/process-->
    <!--comments-->
    <section class="section comments">
        <div class="container">
            <!--/-->
            <div class="section-title">
                <h2><? $APPLICATION->IncludeFile('/include/main/section-comments-top_text.php', array(), array('MODE' => 'html')); ?></h2>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main_comments",
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
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "DETAIL_TEXT",
                        2 => "DETAIL_PICTURE",
                        3 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "9",
                    "IBLOCK_TYPE" => "main",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "30",
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
                        1 => "",
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
                    "COMPONENT_TEMPLATE" => "section_comments"
                ),
                false
            ); ?>
            <!--/-->
            <div class="comments-bottom">
                <span><? $APPLICATION->IncludeFile('/include/main/section-comments-bottom.php', array(), array('MODE' => 'html')); ?></span>
            </div>
        </div>
    </section>
    <!--/comments-->
    <!--request-->
    <div class="section request-three">
        <div class="container">
            <!--/-->
            <div class="section-title">
                <div class="h2-comp">Напишите нам, если остались вопросы</div>
            </div>
            <!--/-->
            <? /*<form class="request-form_three" autocomplete="off">
   <div class="form-top">
    <input class="form-input" type="email" placeholder="Email" required>
    <input class="form-input" type="tel" placeholder="Телефон" required>
    <textarea class="form-textarea" placeholder="Сообщение"></textarea>
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
    <button class="form-button" type="submit">Отправить</button>
   </div>
  </form>*/ ?>
            <? $APPLICATION->IncludeComponent(
                "bitrixsoid:feedback",
                "request_3",
                array(
                    "COMPONENT_TEMPLATE" => "request_3",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "50",
                    ),
                    "FIELDS" => "[{\"code\":\"email\",\"name\":\"Email\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"email\"},{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Сообщение\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"}]",
                    "ACTION_CODE" => "request_3",
                    "SUBJECT" => "Обратная связь",
                    "HEADER" => "Задать вопрос",
                    "BUTTON_NAME" => "Отправить",
                    "PARAM_1" => "",
                    "PARAM_2" => "",
                    "PARAM_3" => ""
                ),
                false
            ); ?>
            <!--/-->
        </div>
    </div>
    <!--/request-->
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>