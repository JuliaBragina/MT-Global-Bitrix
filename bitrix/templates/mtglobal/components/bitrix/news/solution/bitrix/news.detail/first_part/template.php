<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$counterAfterBreadcrumb = 0;//счетчик для отображения блока после хлебных крошек
?>
<!--solution-->
<section class="section-single solution">
 <div class="solution-bgr">
  <video autoplay muted playsinline loop preload data-keepplaying>
    <source src="<? if ( $arResult['DISPLAY_PROPERTIES']['BLOCK1_IMG']['VALUE']) : ?><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_IMG']['VALUE'];?><?else:?>/video/1.mp4<? endif; ?>" type='video/mp4'>
  </video>
 </div>
 <div class="container">
  <!--/-->
  <div class="solution-top">
   <h1><?=$arResult['SEO_H1']?></h1>
   <p class="descr-sm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_TEXT']['VALUE'];?></p>
   <div>
	   <button class="page-button btn-modal_four"><?=GetMessage("ORDER");?></button>
	   <?if(!empty($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])):?>
	   <div class="btn-modal_eight" style="display: inline-block;cursor: pointer;">Подробнее</div>
	   <?endif;?>
	 </div>
  </div>
  <!--/-->
  <ul class="solution-bottom" data-simplebar>
   <li>
    <span><?=GetMessage("UP");?> <b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM1']['VALUE'];?></b></span>
    <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM1']['DESCRIPTION'];?></p>
   </li>
   <li>
    <span><?=GetMessage("UP");?> <b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM2']['VALUE'];?></b></span>
    <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM2']['DESCRIPTION'];?></p>
   </li>
   <li>
    <span><?=GetMessage("UP");?> <b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM3']['VALUE'];?></b></span>
    <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM3']['DESCRIPTION'];?></p>
   </li>
  </ul>
  <!--/-->
 </div>
</section>
<!--/solution-->
