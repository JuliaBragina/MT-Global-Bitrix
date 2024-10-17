<?
//require $_SERVER["DOCUMENT_ROOT"].'/bitrix/php_interface/include/PHPMailer.php';
// require $_SERVER["DOCUMENT_ROOT"].'/bitrix/php_interface/include/SMTP.php';
// require $_SERVER["DOCUMENT_ROOT"].'/bitrix/php_interface/include/Exception.php';
/*
// Добавить 2 почты на всякий случай, чтобы не было недопониманий, откуда брать какую почту
AddEventHandler('main', 'OnBeforeEventSend', Array("MyForm", "my_OnBeforeEventSend"));
    class MyForm
   {
       function my_OnBeforeEventSend(&$arFields, &$arTemplate)
       {
           $rsSites = CSite::GetByID(SITE_ID);
           $arSite = $rsSites->Fetch();
           $arFields['EMAIL_TO'] = $arSite['EMAIL'];
           $arFields['DEFAULT_EMAIL_FROM'] = COption::GetOptionString('main','email_from');
           $arFields['BCC'] = COption::GetOptionString('main','all_bcc');
      }
   }*/
// if (!function_exists('custom_mail')) // && COption::GetOptionString("webprostor.smtp", "USE_MODULE") == "Y"
// {
//    function custom_mail($to, $subject, $message, $additional_headers='', $additional_parameters='')
//    {
//    		$mail = new PHPMailer;
//    		$mail->isSMTP();
//    		$mail->Host = "mtglobal-ru.mail.protection.outlook.com";
// 		$mail->Port = 25;
// 		$mail->SMTPAuth = false;
// 		$mail->SMTPSecure = false;
// 		$mail->setFrom('site@mtglobal.ru', 'First Last');
// 		$mail->addAddress($to, "Recepient Name");
// 		$mail->addReplyTo('site@mtglobal.ru', "Reply");
// 		$mail->isHTML(true);
// 		$mail->Subject = $subject;
// 		$mail->Body = $message;
// 		$mail->AltBody = "This is the plain text version of the email content";
// 		if(!$mail->send()) 
// 		{
// 			AddMessage2Log(print_r($mail->ErrorInfo, 1), 'custom_mail');
// 		} 
// 		else 
// 		{
// 			AddMessage2Log(print_r('Mail is sended succefull', 1), 'custom_mail');
// 		}
//    }
// }

function pre ($c){
    global $USER;
    if($USER->IsAdmin()){
        print_r('<pre>');
        print_r($c);
        print_r('</pre>');
    }
}


	AddEventHandler("main", "OnEpilog", "error404Page");
	function error404Page()
	{
		if(defined('ERROR_404') && ERROR_404 == 'Y')
		{
			global $APPLICATION;
			$APPLICATION->RestartBuffer();
			include $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/header.php';
			include $_SERVER['DOCUMENT_ROOT'].'/404.php';
			include $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/footer.php';
		}
	}
	AddEventHandler('main', 'OnEpilog', 'orPagenMeta');
function orPagenMeta() {
    switch ($_SERVER['REQUEST_URI']) {
case '/':
$title = 'MT global: услуги в области консалтинга, поставок, интеграции и обслуживания ИТ-инфраструктуры';
break;

case '/about/':
$title = 'О компании MT global';
break;

case '/industrial/':
$title = 'Индустриальные решения в сфере обслуживания ИТ-инфраструктуры';
break;

case '/industrial/biznes-tsentry-torgovye-tsentry-sportivnye-kompleksy/':
$title = 'Обслуживание ИТ-инфраструктуры бизнес-центров, торговых центров, спортивных комплексов: MT global';
break;

case '/industrial/gosudarstvennye-uchrezhdeniya/':
$title = 'Обслуживание ИТ-инфраструктуры государственных учреждений: MT global';
break;

case '/industrial/magaziny/':
$title = 'Обслуживание ИТ-инфраструктуры магазинов: MT global';
break;

case '/industrial/ofisy/':
$title = 'Обслуживание ИТ-инфраструктуры офисов: MT global';
break;

case '/industrial/oteli/':
$title = 'Обслуживание ИТ-инфраструктуры отелей: MT global';
break;

case '/industrial/promyshlennost-i-selskoe-khozyaystvo/':
$title = 'Обслуживание ИТ-инфраструктуры промышленных предприятий и в сельском хозяйстве: MT global';
break;

case '/industrial/restorany-i-bary/':
$title = 'Обслуживание ИТ-инфраструктуры ресторанов и баров: MT global';
break;

case '/industrial/skladskie-pomeshcheniya/':
$title = 'Обслуживание ИТ-инфраструктуры складских помещений: MT global';
break;

case '/products/':
$title = 'Поставляемое и лицензируемое программное обеспечение: MT global';
break;

case '/service/':
$title = 'Услуги компании MT global';
break;

case '/solution/':
$title = 'Комплексные решения в сфере ИТ-инфраструктуры компании MT global';
break;

case '/solution/magazin-pod-klyuch/':
$title = 'Комплексная подготовка ИТ-инфраструктуры магазина «под ключ»: MT global';
break;

case '/solution/ofis-pod-klyuch/':
$title = 'Комплексная подготовка ИТ-инфраструктуры офиса «под ключ»: MT global';
break;

case '/solution/restoran-pod-klyuch/':
$title = 'Комплексная подготовка ИТ-инфраструктуры ресторана «под ключ»: MT global';
break;

case '/solution/vosstanovlenie-posle-avariynykh-sboev/':
$title = 'Восстановление ИТ-систем после аварийных сбоев: MT global';
break;

case '/specialization/':
$title = 'Специализация компании MT global';
break;

case '/solution/it-pereezd/':
$title = 'ИТ-переезд - услуги перевозки ИТ-инфраструктуры «под ключ»: MT global';
break;

case '/solution/maksimizatsiya-vygody-dlya-biznesa/':
$title = 'Максимизация выгоды для бизнеса: комплексное ИТ-решение от компнии MT global';
break;

case '/solution/modernizatsiya-it-infrastruktury/':
$title = 'Модернизация ИТ-инфраструктуры: комплексная услуга от компании MT global';
break;

case '/solution/mt365-na-baze-microsoft-365/':
$title = 'MT365 на базе Microsoft 365: комплексное ИТ-решение от компнии MT global';
break;

case '/solution/podgotovka-tsifrovoy-transformatsii/':
$title = 'Подготовка к цифровой трансформации: комплексное ИТ-решение от компании MT global';
break;

case '/solution/spetsialist-na-1-den/':
$title = 'Специалист на один день - заказать услуги ИТ-специалиста: MT global';
break;

case '/specialization/apparatnaya-infrastruktura/':
$title = 'Комплексное обслуживание и обеспечение непрерывности работы аппаратной инфраструктуры: MT global';
break;

case '/specialization/programmnoe-obespechenie/':
$title = 'Программное обеспечение: обслуживание ПО - услуги компании MT global';
break;

case '/specialization/servera-i-sistemy-khraneniya-dannykh/':
$title = 'Обеспечение непрерывности работы серверов и систем хранения данных: MT global';
break;

case '/specialization/setevaya-infrastruktura/':
$title = 'Комплексное обслуживание и обеспечение непрерывности работы сетевой инфраструктуры: MT global';
break;

case '/specialization/sistemy-bezopasnosti/':
$title = 'Комплексное обслуживание и обеспечение непрерывности работы систем безопасности: MT global';
break;
                                              
        default:
            # code...
            break;        
    }
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