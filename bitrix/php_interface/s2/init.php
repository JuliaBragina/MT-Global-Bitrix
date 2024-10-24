<?
AddEventHandler("main", "OnBeforeProlog", "MyOnBeforePrologHandler", 50);
function MyOnBeforePrologHandler()
{
   global $USER;
   if(!is_object($USER)){
      $USER = new CUser();
   }
   if (!$USER->IsAdmin()){
      include($_SERVER["DOCUMENT_ROOT"]."/coming-soon/underconstruction.html");
      die();
   }
}

if (!function_exists('custom_mail') && COption::GetOptionString("webprostor.smtp", "USE_MODULE") == "Y")
{
	function custom_mail($to, $subject, $message, $additional_headers='', $additional_parameters='')
	{
		if(CModule::IncludeModule("webprostor.smtp"))
		{
			$smtp = new CWebprostorSmtp("s2");
			$result = $smtp->SendMail($to, $subject, $message, $additional_headers, $additional_parameters);

			if($result)
				return true;
			else
				return false;
		}
	}
}
?>