<?php // подключение ядра
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
use Bitrix\Main\IO,
Bitrix\Main\Application;



if($_POST['CATALOG_ID'])
{
    if(CModule::IncludeModule("iblock"))
    {
        $arrFilter = array(
            'ACTIVE'  => 'Y',
            'CODE'    => "catalog",
        );
        
        $res = CIBlock::GetList(Array("SORT" => "ASC"), $arrFilter, false);
        $arIBlockId = "";
    
        if ($ar_res = $res->Fetch()) 
            $arIBlockId = $ar_res["ID"];
        
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PICTURE", "DETAIL_TEXT");
        $arFilter = Array("IBLOCK_ID"=>$arIBlockId, "ID" =>$_POST['CATALOG_ID']);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields(); 
            $arProps = $ob->GetProperties();
        }
        $arPrice = CPrice::GetBasePrice($_POST['CATALOG_ID']);
       
        $answer.= '<div class="catalog-card-header">';
        $answer.= '<div class="catalog-card-slider">';
        $answer.= '<div style="--swiper-navigation-color: #fff" class="swiper catalog-card-slider-top">';
        $answer.= '<div class="swiper-wrapper">';
        if($arFields['DETAIL_PICTURE'])
            $answer.= '<div class="swiper-slide"><img src="'.CFile::GetPath($arFields["DETAIL_PICTURE"]).'"/></div>';

        if($arProps['IMAGE_GALERY']['VALUE'])
        {
            foreach($arProps['IMAGE_GALERY']['VALUE'] as $img)
                $answer.= '<div class="swiper-slide"><img src="'.CFile::GetPath($img).'"/></div>';
        }
 
        $answer.= '</div>';
        // $answer.= '<div class="swiper-button-next"></div>
        //             <div class="swiper-button-prev"></div>';

        $answer.= '</div>';

        // $answer.= '<div thumbsSlider="" class="swiper catalog-card-slider-thumbs">
        //  <div class="swiper-wrapper">';
     
        // if($arFields['["DETAIL_PICTURE"]'])
        //     $answer.= '<div class="swiper-slide"><img src="'.CFile::GetPath($arFields["DETAIL_PICTURE"]).'"/></div>';

        // if($arProps['IMAGE_GALERY']['VALUE'])
        // {
        //     foreach($arProps['IMAGE_GALERY']['VALUE'] as $img)
        //         $answer.= '<div class="swiper-slide"><img src="'.CFile::GetPath($img).'"/></div>';
        // }
       
        // $answer.= '</div>';
        // $answer.= '</div>';
        $answer.= '</div>';
       
        $answer.= '<div class="catalog-card-info">';
        $answer.= '  <h2 class="catalog-card-info__title">'.$arFields['NAME'].'</h2>';

        if($arProps['ARTICLE']['VALUE'])
            $answer.= ' <p class="catalog-card-info__article">
            Артикул: '. $arProps['ARTICLE']['VALUE'].'</p>';
        
        if($arFields['DETAIL_TEXT'])
            $answer.= '<p class="catalog-card-info__description">'.$arFields['DETAIL_TEXT'].'</p>';

  		/**
         * Получаем get параметры в строке
         */
        $parts = parse_url($_SERVER['HTTP_REFERER']); 
        parse_str($parts['query'], $query); 
        $pagen = '';
        if((isset($query['PAGEN_1'])))
            $pagen .= '&PAGEN_1='.$query['PAGEN_1'];

        $answer.= '<div class="catalog-card-info__price">
            <span>'.number_format($arPrice['PRICE'], 0, '', ' ').' р./шт</span>
             <a href="'.$_POST['URL_PRODUCT'].'?action=ADD2BASKET&amp;id='.$_POST['CATALOG_ID'].$pagen.'" rel="nofollow">
            <button class="button button_large">
              Добавить в корзину
            </button>
            </a>
          </div>
        </div>
      </div>';
      $answer.= ' <div class="catalog-card-props">';
        if($arProps['FUNCTIONAL_FEATURES']['VALUE'])
        {
            $answer.= '<div class="catalog-card-props__tab">
            <h3 class="catalog-card-props__title">
              Функциональные особенности
            </h3>'.htmlspecialchars_decode($arProps['FUNCTIONAL_FEATURES']['VALUE']['TEXT']). '</div>';

        }
        if($arProps['TECHNICAL_FEATURES']['VALUE'])
        {
            $answer.= '<div class="catalog-card-props__tab">
            <h3 class="catalog-card-props__title">
            Технические характеристики
            </h3>'.htmlspecialchars_decode($arProps['TECHNICAL_FEATURES']['VALUE']["TEXT"]). '</div></div>';

        }

        echo $answer;
    }
}
?>