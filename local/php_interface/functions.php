<?php
function getCountOrderBasket()
{
    CModule::IncludeModule("sale");

     $basket = \Bitrix\Sale\Basket::loadItemsForFUser(
        \Bitrix\Sale\Fuser::getId(),
       's3'
     );
    $countBasket = ($basket->getListOfFormatText());
 
    return $countBasket ? count($countBasket) : 0;
}

AddEventHandler('main', 'OnBeforeEventSend', Array("addFormLog", "OnBeforeEventSendHandler"));

class addFormLog{
    public static int $iblock = 61;
    public static array $sections = [
      57 => 25
    ];

    public static function OnBeforeEventSendHandler($arFields, $arTemplate)
    {
        //define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/FORMS_LOG.txt");
        //AddMessage2Log('$arTemplate = '.print_r($arTemplate, true),'');
        //AddMessage2Log('$arFields = '.print_r($arFields, true),'');

        $sectionID = false;
        if(self::$sections[$arTemplate['ID']]) $sectionID = self::$sections[$arTemplate['ID']];

        $name = '';
        $props = [];
        if(!$arFields['name'] && $arFields['phone']) $arFields['name'] = $arFields['SUBJECT'];
        if(!$arFields['msg'] && $arFields['SUBJECT']) $arFields['msg'] = $arFields['SUBJECT'];

        foreach ($arFields as $code => $field){
            $props[strtoupper($code)] = $field;
        }

        if($arTemplate['ID'] == 57) $name = 'Запрос звонка от ' . $arFields['name'];
        else $name = 'Запрос из формы ' . $arFields['name'] . ' ( ' . $arFields['SUBJECT'] . ' )';

        $el = new CIBlockElement;
        $arLoadProductArray = Array(
            "MODIFIED_BY"    => 1,
            "IBLOCK_SECTION_ID" => $sectionID,
            "IBLOCK_ID"      => self::$iblock,
            "PROPERTY_VALUES"=> $props,
            "NAME"           => $name,
            "ACTIVE"         => "Y",
        );
        //if($PRODUCT_ID = $el->Add($arLoadProductArray)) echo "added: ".$PRODUCT_ID;
        //else echo "Error: ".$el->LAST_ERROR;

        //AddMessage2Log('$props = '.print_r($props, true),'');
        //echo '<pre>'; print_r($arFields); echo '</pre>'; die;
    }
}