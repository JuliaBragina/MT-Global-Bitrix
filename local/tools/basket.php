<?php // подключение ядра
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
use Bitrix\Main\IO,
Bitrix\Main\Application;
use Bitrix\Sale;

use Bitrix\Main\Context,
    Bitrix\Currency\CurrencyManager,
    Bitrix\Sale\Order,
    Bitrix\Sale\Basket,
    Bitrix\Sale\Delivery,
    Bitrix\Sale\PaySystem;
Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");



if($_POST['formAction'])
{  
    $siteId = Context::getCurrent()->getSite();
    $currencyCode = CurrencyManager::getBaseCurrency();
    $order = Order::create($siteId, $USER->isAuthorized() ? $USER->GetID() : 1);
    $order->setPersonTypeId(1);
    $order->setField('CURRENCY', $currencyCode);
    if ($_POST['comment']) {
        $order->setField('USER_DESCRIPTION', $_POST['comment']); // Устанавливаем поля комментария покупателя
    }
    $basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
    $order->setBasket($basket);

    $propertyCollection = $order->getPropertyCollection();
    foreach($propertyCollection as $popertyObj)
    {
        if($popertyObj->getField('CODE') == "PHONE") $popertyObj->setValue($_POST['phone']);
        if($popertyObj->getField('CODE') == "FIO") $popertyObj->setValue($_POST['name']);
        if($popertyObj->getField('CODE') == "COMMENT") $popertyObj->setValue($_POST['comment']);
    }

    // Сохраняем
    $order->doFinalAction(true);
    $result = $order->save();

   

    if($result)
    {
        echo "OK";
    }
        
    

}
?>