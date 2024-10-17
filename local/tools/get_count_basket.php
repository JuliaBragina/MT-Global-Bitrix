<?php 

// подключение ядра
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

if(isset($_POST['count']) && !empty($_POST['count']))
{
    echo getCountOrderBasket();
}
?>