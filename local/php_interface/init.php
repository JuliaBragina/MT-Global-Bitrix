<?php

include_once 'lib/Autoloader.php';
include_once __DIR__ . "/functions.php";

/*if(!LocalLib\Helpers\SiteHelper::isEnvDevLocal()){
    include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/wsrubi.smtp/classes/general/wsrubismtp.php");
}*/

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest');
if ($_SERVER['HTTP_HOST'] == 'axpro.expert') {
    //AddEventHandler('main', 'OnEpilog', Array('MyClass','orPagenMetaAxpro'));
} else {
	// if(LANGUAGE_ID == 'en'){
	//   AddEventHandler('main', 'OnEpilog', Array('MyClass','orPagenMetaEn'));
	// }else{
	//   AddEventHandler('main', 'OnEpilog', Array('MyClass','orPagenMeta'));
	//}
}

class MyClass {
    public static function orPagenMeta() {
        // define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/logg.txt");

        switch ($_SERVER['REQUEST_URI']) {
            case '/':
                $title = 'MT global: услуги в области консалтинга, поставок, интеграции и обслуживания ИТ-инфраструктуры';
                break;

            case '/about/':
                $title = 'О компании MT global';
                $description = 'О компании MT global. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/':
                $title = 'Индустриальные решения в сфере обслуживания ИТ-инфраструктуры';
                $description = 'Индустриальные решения в сфере обслуживания ИТ-инфраструктуры. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-biznes-centrov-tc-sportkompleksov/':
                $title = 'Обслуживание ИТ-инфраструктуры бизнес-центров, торговых центров, спортивных комплексов: MT global';
                $description = 'Обслуживание ИТ-инфраструктуры бизнес-центров, торговых центров, спортивных комплексов. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-gosudarstvennyh-uchrezhdenij/':
                $title = 'Обслуживание ИТ-инфраструктуры государственных учреждений: MT global';
                $description = 'Обслуживание ИТ-инфраструктуры государственных учреждений. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-magazinov/':
                $title = 'ИТ-инфраструктура магазинов: заказать обслуживание ИТ-инфраструктуры магазинов MT global';
                $description = 'Обслуживание ИТ-инфраструктуры магазинов. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-ofisov/':
                $title = 'ИТ-инфраструктура офиса: заказать обслуживание ИТ-инфраструктуры магазинов MT global';
                $description = 'Обслуживание ИТ-инфраструктуры офисов. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-otelej/':
                $title = 'Обслуживание ИТ-инфраструктуры отелей: MT global';
                $description = 'Обслуживание ИТ-инфраструктуры отелей. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-promyshlinnosti-selskogo-hozyajstva/':
                $title = 'Обслуживание ИТ-инфраструктуры промышленных предприятий и в сельском хозяйстве: MT global';
                $description = 'Обслуживание ИТ-инфраструктуры промышленных предприятий и в сельском хозяйстве. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-restoranov-i-barov/':
                $title = 'Обслуживание ИТ-инфраструктуры ресторанов и баров: MT global';
                $description = 'Обслуживание ИТ-инфраструктуры ресторанов и баров. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/industrial/it-infrastruktura-skladskih-pomeshchenij/':
                $title = 'ИТ-инфраструктура склада: заказать обслуживание ИТ-инфраструктуры складских помещений MT global';
                $description = 'Обслуживание ИТ-инфраструктуры складских помещений. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/products/':
                $title = 'Поставляемое и лицензируемое программное обеспечение: MT global';
                $description = 'Поставляемое и лицензируемое программное обеспечение. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/service/':
                $h1 = 'Наши услуги';
                $title = 'Услуги компании MT global';
                break;

            case '/solution/':
                $title = 'Комплексные решения в сфере ИТ-инфраструктуры компании MT global';
                $description = 'Комплексные решения в сфере ИТ-инфраструктуры. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/it-infrastruktura-magazina-pod-klyuch/':
                $title = 'Комплексная подготовка ИТ-инфраструктуры магазина «под ключ»: MT global';
                $description = 'Комплексная подготовка ИТ-инфраструктуры магазина «под ключ». MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/it-infrastruktura-ofisa-pod-klyuch/':
                $title = 'Комплексная подготовка ИТ-инфраструктуры офиса «под ключ»: MT global';
                $description = 'Комплексная подготовка ИТ-инфраструктуры офиса «под ключ». MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/it-infrastruktura-restorana-pod-klyuch/':
                $title = 'Комплексная подготовка ИТ-инфраструктуры ресторана «под ключ»: MT global';
                $description = 'Комплексная подготовка ИТ-инфраструктуры ресторана «под ключ». MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/vosstanovlenie-posle-avariynykh-sboev/':
                $title = 'Восстановление ИТ-систем после аварийных сбоев: MT global';
                $description = 'Восстановление ИТ-систем после аварийных сбоев. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/specialization/':
                $title = 'Специализация компании MT global';
                $description = 'Наша специализация. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/it-pereezd/':
                $title = 'IT-переезд - услуги перевозки ИТ-инфраструктуры и оборудования «под ключ»: MT global';
                $description = 'ИТ- переезд. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/maksimizatsiya-vygody-dlya-biznesa/':
                $title = 'Максимизация выгоды для бизнеса: комплексное ИТ-решение от компнии MT global';
                $description = 'Максимизация выгоды для бизнеса. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/modernizatsiya-it-infrastruktury/':
                $title = 'Модернизация ИТ-инфраструктуры: комплексная услуга модернизации информационных систем';
                $description = 'Модернизация ИТ-инфраструктуры. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/mt365-na-baze-microsoft-365/':
                $title = 'MT365 на базе Microsoft 365: комплексное ИТ-решение от компнии MT global';
                break;

            case '/solution/podgotovka-tsifrovoy-transformatsii/':
                $title = 'Подготовка к цифровой трансформации: комплексное ИТ-решение от компании MT global';
                break;

            case '/solution/spetsialist-na-1-den/':
                $title = 'Специалист на один день - заказать услуги ИТ-специалиста: MT global';
                $description = 'Специалист на один день. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/kompleksnoe-ustranenie-riskov-i-obespechenie-nepreryvnosti-it/':
                $description = 'Комплексное устранение рисков и обеспечение непрерывности ИТ. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/solution/minimalizatsiya-zatrat-na-soderzhanie-i-obsluzhivanie/':
                $title = 'Минимизация затрат на содержание и обслуживание ИТ-инфраструктуры: оптимизация бизнес процессов';
                $description = 'Минимизация затрат на содержание и обслуживание ИТ-инфраструктуры. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/specialization/apparatnaya-infrastruktura/':
                $title = 'Аппаратная инфраструктура: обслуживание и обеспечение непрерывности работы аппаратной инфраструктуры';
                $description = 'Комплексное обслуживание и обеспечение непрерывности работы аппаратной инфраструктуры. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/specialization/obsluzhivanie-programmnogo-obespecheniya/':
                $title = 'Программное обеспечение: обслуживание ПО - услуги компании MT global';
                $description = 'Программное обеспечение. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/specialization/servera-i-sistemy-khraneniya-dannykh/':
                $title = 'Обеспечение непрерывности работы серверов и систем хранения данных: MT global';
                $description = 'Обеспечение непрерывности работы серверов и систем хранения данных. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/specialization/nastrojka-setevoj-infrastruktury/':
                $title = 'Сетевая инфораструктура: комплексное обслуживание и обеспечение непрерывности сетевой инфраструктуры';
                $description = 'Комплексное обслуживание и обеспечение непрерывности работы сетевой инфраструктуры. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/specialization/sistemy-bezopasnosti-it-infrastruktury/':
                $title = 'Комплексное обслуживание и обеспечение непрерывности работы систем безопасности: MT global';
                $description = 'Комплексное обслуживание и обеспечение непрерывности работы систем безопасности. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            case '/service/it-autsorsing-obsluzhivanie-it-infrastruktury/':
                $title = 'IT обслуживание: услуги ИТ-аутсорсинга, обслуживания ИТ-инфраструктуры и рабочих мест';
                break;

            case '/service/konsalting-audit-razrabotka-it-strategiy-proektirovanie-it-infrastruktury/':
                $title = 'IT консалтинг на аутсорсинге | Услуги консалтинга, аудита и споровождения ИТ инфраструктуры в Москве';
                break;

            case '/service/sertifitsirovannaya-postavka-i-integratsiya-oborudovaniya-i-po/':
                $title = 'Сертифицированная поставка и интеграция оборудования и ПО: программное обеспечение IT инфраструктуры';
                break;


            case '/sitemap/':
                $description = 'Карта сайта. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры.';
                break;

            default:
                # code...
                break;
        }
        //AddMessage2Log('$arFields = '.print_r($title, true),'');
        if (isset($h1)) {
            $GLOBALS['APPLICATION']->SetTitle($h1);
        }
        if (isset($title)) {
            $GLOBALS['APPLICATION']->SetPageProperty('title', $title);
        }
        if (isset($description)) {
            $GLOBALS['APPLICATION']->SetPageProperty('description', $description);
        }
        if (isset($canonical)) {
            $GLOBALS['APPLICATION']->AddHeadString('<link rel="canonical" href="'.$canonical.'"/>');
        }


    }

    public static function orPagenMetaEn() {
        // define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/logg.txt");

        switch ($_SERVER['REQUEST_URI']) {
            case '/':
                $title = 'MT global: services in the field of consulting, supply, integration and maintenance of IT infrastructure';
                break;

            case '/about/':
                $title = 'About MT global';
                break;

            case '/industrial/':
                $title = 'Industrial solutions in the field of IT infrastructure maintenance';
                break;

            case '/industrial/Business-centers-shopping-centers-sports-complexes/':
                $title = 'Maintenance of IT infrastructure of business centers, shopping centers, sports complexes: MT global';
                break;

            case '/industrial/gosudarstvennye-uchrezhdeniya/':
                $title = 'Government IT infrastructure maintenance: MT global';
                break;

            case '/industrial/Shops/':
                $title = 'Maintenance of IT infrastructure of stores: MT global';
                break;

            case '/industrial/Offices/':
                $title = 'IT infrastructure maintenance for offices: MT global';
                break;

            case '/industrial/oteli/':
                $title = 'IT infrastructure services for hotels: MT global';
                break;

            case '/industrial/Manufacturing-and-agriculture/':
                $title = 'Maintenance of IT infrastructure for industrial enterprises and agriculture: MT global';
                break;

            case '/industrial/restorany-i-bary/':
                $title = 'IT infrastructure maintenance for restaurants and bars: MT global';
                break;

            case '/industrial/Storage-facilities/':
                $title = 'Warehouse IT infrastructure maintenance: MT global';
                break;

            case '/products/':
                $title = 'Supplied and licensed software: MT global';
                break;

            case '/service/':
                $title = 'MT global services';
                break;

            case '/solution/':
                $title = 'Complex solutions in the field of IT infrastructure from MT global';
                break;

            case '/solution/The-shop-on-a-turn-key-basis/':
                $title = 'Comprehensive preparation of turnkey store IT infrastructure: MT global';
                break;

            case '/solution/The-office-on-a-turn-key-basis/':
                $title = 'Comprehensive preparation of turnkey office IT infrastructure: MT global';
                break;

            case '/solution/restoran-pod-klyuch/':
                $title = 'Comprehensive preparation of a turnkey restaurant IT infrastructure: MT global';
                break;

            case '/solution/Disaster-Recovery/':
                $title = 'Disaster recovery for IT systems: MT global';
                break;

            case '/specialization/':
                $title = 'MT global specialization';
                break;

            case '/solution/IT-relocation/':
                $title = 'IT relocation - turnkey IT infrastructure transportation services: MT global';
                break;

            case '/solution/Maximizing-business-benefits/':
                $title = 'Maximizing business value: the end-to-end IT solution from MT global';
                break;

            case '/solution/Modernization-of-the-IT-infrastructure/':
                $title = 'IT infrastructure modernization: a comprehensive service from MT global';
                break;

            case '/solution/mt365-na-baze-microsoft-365/':
                $title = 'MT365 powered by Microsoft 365: end-to-end IT solution from MT global';
                break;

            case '/solution/podgotovka-tsifrovoy-transformatsii/':
                $title = 'Preparing for digital transformation: an end-to-end IT solution from MT global';
                break;

            case '/solution/spetsialist-na-1-den/':
                $title = 'Specialist for one day - order the services of an IT specialist: MT global';
                break;

            case '/specialization/Hardware-infrastructure/':
                $title = 'End-to-end hardware infrastructure maintenance and business continuity: MT global';
                break;

            case '/specialization/Software/':
                $title = 'Software: software maintenance - MT global services';
                break;

            case '/specialization/Servers-and-storage-systems/':
                $title = 'Ensuring the continuity of servers and storage systems: MT global';
                break;

            case '/specialization/Network-infrastructure/':
                $title = 'Comprehensive service and continuity of network infrastructure: MT global';
                break;

            case '/specialization/Security-systems/':
                $title = 'Comprehensive service and security continuity: MT global';
                break;

            default:
                # code...
                break;
        }
        //AddMessage2Log('$arFields = '.print_r($title, true),'');
        if (isset($h1)) {
            $GLOBALS['APPLICATION']->SetTitle($h1);
        }
        if (isset($title)) {
            $GLOBALS['APPLICATION']->SetPageProperty('title', $title);
        }
        if (isset($description)) {
            $GLOBALS['APPLICATION']->SetPageProperty('description', $description);
        }
        if (isset($canonical)) {
            $GLOBALS['APPLICATION']->AddHeadString('<link rel="canonical" href="'.$canonical.'"/>');
        }


    }

    function orPagenAxpro() {

        switch ($_SERVER['REQUEST_URI']) {
            case '/':
                $title = 'Беспроводная система для охраны дома и офиса AX PRO';
                $description = 'Охранные системы для дома и офиса от компании AX PRO. Подробнее на нашем сайте или по телефону +7 499 502-18-17';
                break;


            default:
                # code...
                break;
        }
        //AddMessage2Log('$arFields = '.print_r($title, true),'');
        if (isset($h1)) {
            $GLOBALS['APPLICATION']->SetTitle($h1);
        }
        if (isset($title)) {
            $GLOBALS['APPLICATION']->SetPageProperty('title', $title);
        }
        if (isset($description)) {
            $GLOBALS['APPLICATION']->SetPageProperty('description', $description);
        }

        if (isset($canonical)) {
            $GLOBALS['APPLICATION']->AddHeadString('<link rel="canonical" href="'.$canonical.'"/>');
        }

    }



}
//AddEventHandler("main", "OnEndBufferContent", "ChangeMyContent");

function ChangeMyContent(&$content)
{
    $content = sanitize_output($content);
}

function sanitize_output($buffer)
{
    global $APPLICATION;
    if(substr_count($APPLICATION->GetCurPage(false),'/bitrix/') == 0){
        $buffer = preg_replace('|<strong(.*)strong>|isU', '<span class="bolder" $1span>', $buffer);
        //$buffer = preg_replace('/<b>(.*)<\/b>/i', '<span class="bolder">$1</span>', $buffer);
        $buffer = str_replace('<meta name="robots" content="index, follow" />','',$buffer);

    }
    $domainAdress = $_SERVER['HTTP_HOST'];
    preg_match('/<h1[^>]*?>(.*?)<\/h1>/si', $buffer, $matches);
    if ($domainAdress == 'axpro.expert') {} else {
        if($_SERVER['REQUEST_URI'] != '/'){
            $buffer = preg_replace('/<meta name="description" content="(.*)" \/>/i', '<meta name="description" content="'.$matches[1].'. MT global: команда мультидисциплинарных специалистов в области консалтинга, интеграции и обслуживания ИТ-инфраструктуры." />', $buffer);
        }
    }
    $buffer = preg_replace('/<meta name="keywords" content="(.*)" \/>/i', '<meta name="keywords" content="'.$matches[1].'" />', $buffer);
    return $buffer;
}

AddEventHandler("iblock", "OnAfterIBlockElementAdd", "sendEmailFeedback");

// Отправка почтового шаблона консультации
function sendEmailFeedback(&$arFields)
{
    if($arFields['IBLOCK_ID'] == 61)
    {
        $arEventFields = [
            "PHONE" =>  $arFields['PROPERTY_VALUES']['PHONE'],
            "NAME" => $arFields['PROPERTY_VALUES']['NAME'],
            "LINK_FEEDBACK" => "<a href='".$_SERVER['HTTP_HOST'].'/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=61&type=feedback&lang=ru&ID='.$arFields['ID'].'&find_section_section=-1&WF=Y'."'>Ссылка на обращение</a>",

        ];

        CEvent::Send("ADD_FEEDBACK",[SITE_ID], $arEventFields);
    }

}

//Перехват почтовых событий и добавление кастомных полей - Имя пользователя, сумма заказа и т.п.
//$obEventHandler->addEventHandler("main", "OnBeforeEventAdd", "OnBeforeEventAddHandler");
AddEventHandler("main", "OnBeforeEventAdd", "OnBeforeEventAddHandler");

function OnBeforeEventAddHandler(&$event, &$lid, &$arFields, &$messageId, &$files, &$languageId)
{
    if($arFields['ORDER_ID'])
    {
        $order = \Bitrix\Sale\Order::load($arFields['ORDER_ID']); // заказ

        $collection = $order->getPropertyCollection();

        if($fioOb = $collection->getItemByOrderPropertyCode("FIO"))
            $fio = $fioOb->getValue();

        if($phoneOb = $collection->getItemByOrderPropertyCode("PHONE"))
            $phone = $phoneOb->getValue();

        if($commentOb = $collection->getItemByOrderPropertyCode("COMMENT"))
            $comment = $commentOb->getValue();

        $arFields['FIO'] = $fio; // имя пользователя из заказа
        $arFields['PHONE'] = $phone;
        $arFields['COMMENT'] = $comment;

    }
}

//редирект к нижнему регистру
function registrRedirect(){
    if (\Bitrix\Main\Loader::includeModule("askaron.settings")) {
        if (\Bitrix\Main\Config\Option::get("askaron.settings", "UF_REGISTRREDIRECT") == 1) {
            $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
            $uri = new \Bitrix\Main\Web\Uri($request->getRequestUri());
            $path = $uri->getPath();
            if ($path != mb_strtolower($path)) {
                $newUrl = mb_strtolower($path);
                if ($uri->getQuery() != "") {
                    $newUrl = $newUrl . "?" . $uri->getQuery();
                }
                LocalRedirect($newUrl, true, '301 Moved permanently');
            }
        }
    }
}

registrRedirect();//привести к нижнему регистру