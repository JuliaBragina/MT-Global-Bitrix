<?php // подключение ядра
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
use Bitrix\Main\IO,
Bitrix\Main\Application;

if($_POST['form_name'])
{
    if(CModule::IncludeModule("iblock"))
    {
        $el = new CIBlockElement;
        //Свойства
        $PROP = [];

        $PROP['NAME'] = $_POST['fio'];
        $PROP['PHONE'] = $_POST['phone'];
           
        //Основные поля элемента
        $fields = array(
            "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
            "CREATED_BY" => '1', 
            "IBLOCK_ID" => 61, 
            "PROPERTY_VALUES" => $PROP, 
            "NAME" => "Запрос на консультацию ".$_POST['fio'],
            "ACTIVE" => "Y",
            "IBLOCK_SECTION_CODE" => $_POST['form_name']
               
        );
    
        //Результат в конце отработки
            if($ID = $el->Add($fields)){
                $result['status'] = 'success';
                $result['message'] = 'ok';
            }		 
            else{
                $result['status'] = 'error';
                $result['message'] = $el->LAST_ERROR;
            } 

            // if(CEvent::Send("SEND_REQUEST", array(SITE_ID), $PROP, "N", '', $files)){
            //     $result = array('success' => 'ok');
            // } else {
            //     $result = array('success' => 'no');
            // }

            echo json_encode($result); 
    }
}
?>