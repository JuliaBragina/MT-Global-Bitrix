<?php // подключение ядра
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
use Bitrix\Main\IO,
Bitrix\Main\Application;



if($_POST['CASES_ID'])
{
    // $form = new IO\File(Application::getDocumentRoot() . "/include/feedback_forms/feedback_case.php");
    // $content = $form->getContents();
    if(CModule::IncludeModule("iblock"))
    {
        $arrFilter = array(
            'ACTIVE'  => 'Y',
            'CODE'    => "cases_main_catalog",
        );
        
        $res = CIBlock::GetList(Array("SORT" => "ASC"), $arrFilter, false);
        $arIBlockId = "";
    
        if ($ar_res = $res->Fetch()) 
            $arIBlockId = $ar_res["ID"];
        
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PICTURE");
        $arFilter = Array("IBLOCK_ID"=>$arIBlockId, "ID" =>$_POST['CASES_ID']);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields(); 
            $arProps = $ob->GetProperties();
        } 
            $answer = '<div class="cases-card-header">';
            $answer.= '<div class="cases-card-image">';
            $answer.= '<img src="'.CFile::GetPath($arFields["DETAIL_PICTURE"]).'" alt="case3" /></div>';
            $answer.= '<div clas="cases-card-info">';
            $answer.= '<h2 class="cases-card-info__title">'.$arFields['NAME'].'</h2>';
            $answer.= '<p class="cases-card-client"><b>Клиент: </b>'.$arProps['CLIENT']['VALUE'].'</p>';
            $answer.= '<h3 class="cases-card-title_secondary">Оборудование:</h3>';
            $answer.= '<p>'.htmlspecialchars_decode($arProps['TASK_TOP']['VALUE']['TEXT']).'</p></div> </div>';
            $answer.= '<div class="cases-card-description">  <h3 class="cases-card-title_secondary">Задача:</h3> <p class="cases-card-description__text hidden">'.$arProps['TASK_BOTTOM']['VALUE']['TEXT'].'</p>';
            $answer.= '<button class="cases-card-description__toggler"> Читать полностью </button></div>';
            // $answer.= $APPLICATION->IncludeFile("/include/feedback_forms/feedback_case.php");
            $answer.= $content;
            echo $answer;
    }
}
?>