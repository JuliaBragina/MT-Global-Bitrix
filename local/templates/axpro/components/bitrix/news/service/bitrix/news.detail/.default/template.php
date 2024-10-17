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
?>

<!--service-->
<section class="section-single service">
 <div class="container">
  <!--/-->
  <div class="solution-top">
   <h1><?=$arResult["NAME"]?></h1>
   <button class="page-button btn-modal_two" onclick="ym(53077474,'reachGoal','get-the-service'); return true;"  ><?=GetMessage("ORDER");?></button>
   <?if(!empty($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])):?>
   <div class="btn-modal_eight" style="display: inline-block;cursor: pointer;">Подробнее</div>
   <?endif;?>
  </div>
  <!--/-->
  <ul class="solution-bottom" data-simplebar>
   <li>
    <span><?=GetMessage("UP");?><b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM1']['VALUE'];?></b></span>
    <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM1']['DESCRIPTION'];?></p>
   </li>
  <li>
    <span><?=GetMessage("UP");?><b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM2']['VALUE'];?></b></span>
    <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM2']['DESCRIPTION'];?></p>
   </li>
  <li>
    <span><?=GetMessage("UP");?><b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM3']['VALUE'];?></b></span>
    <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM3']['DESCRIPTION'];?></p>
   </li>
  </ul>
  <!--/-->
  <div class="service-bgr">
	<?=htmlspecialcharsBack($arResult["PROPERTIES"]["BLOCK1_IMG"]["VALUE"]["TEXT"])?>
  </div>
  <!--/-->
 </div>
</section>
<!--/service-->

<div class="modal-box modal-box_eight">
  <svg class="modal-close modal-close_eight" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  </svg>
  <div class="modal_box_eight">
    <?=htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])?>
  </div>
</div>
<div class="modal-bgr modal-bgr_eight"></div>

<? if (isset($arResult["DISPLAY_PROPERTIES"]["NUM1_TITLE"]["VALUE"])): ?>
<!--consulting-->
 <section class="section section-indent consulting">
  <div class="container">
 <div class="consulting-wrap">
   <div class="consulting-img">
     <img loading="lazy" src="<? echo $arResult['DISPLAY_PROPERTIES']['NUM1_PIC']['VALUE'];?>" alt="consulting">
   </div>
   <div class="consulting-text">
     <span>01</span>
     <h2><? echo $arResult['DISPLAY_PROPERTIES']['NUM1_TITLE']['VALUE'];?></h2>
     <p class="descr-s"><?=htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['NUM1_TTEXT']['VALUE']["TEXT"])?></p>
   </div>
 </div>
  </div>
 </section>
 <!--/consulting-->
<? endif; ?>



<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS"]["VALUE"])): ?>
<!--provide-->
<section class="section provide">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK2_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <ul class="provide-box">
	<?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS"]["VALUE"] as $k=>$value):?>
	   <li>
	    <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
	    <p class="descr-sm"><?=htmlspecialcharsBack($value["TEXT"])?></p>
	   </li>
	<?endforeach?>
  </ul>
  <!--/-->
 </div>
</section>
<!--/provide-->


<? endif; ?>
<? if (isset($arResult["DISPLAY_PROPERTIES"]["TEXT2SECTION"]["VALUE"])): ?>
<!--description-->
<section class="section section-one description">
 <div class="container">
  <p><?=htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['TEXT2SECTION']['VALUE']["TEXT"])?></p>
 </div>
</section>
<!--/description-->
<? endif; ?>
<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["VALUE"])): ?>
<!--software-->
<section class="section software">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK3_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <div class="software-boxs">
  	<?$software_boxs=0;?>
	<?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["VALUE"] as $k=>$value):?>
		<?$software_boxs++;?>
	   <div class="software-box">
	    <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
	    <span>0<?=$software_boxs;?></span>
	    <p class="descr-s"><?=$value?></p>
	   </div>
	<?endforeach?>
   <!---->
  </div>
  <!--/-->




  <div class="software-bottom">
    <span class="software-bottom__text"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK3_FOOTER']['VALUE'];?></span>
    <span><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK3_FOOTER']['DESCRIPTION'];?></span>
  </div>
  <!--/-->
 </div>
</section>
<!--/software-->
<? endif; ?>




<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"])): ?>
<!--result-->
<section class="section result">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK4_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <div class="swiper-container result-slider">
   <div class="swiper-wrapper">

  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"] as $k=>$value):?>
     <div class="swiper-slide result-slide">
      <p class="descr-sm"><?=$value?></p>
      <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
     </div>
  <?endforeach?>
   </div>
     <div class="slider-arrows">
   <svg class="slider-arrow_two result-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="22.6348" cy="22.5" r="22" />
    <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
   <svg class="slider-arrow_two result-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
    <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
  </div>
  </div>
  <!--/-->
  <div class="slider-progresbar result-pagination"></div>
  <!--/-->
 </div>
</section>
<!--/result-->
<? endif; ?>

<?/*-----------------*/?>


<? if (isset($arResult["DISPLAY_PROPERTIES"]["NUM2_TITLE"]["VALUE"])): ?>
<!--consulting-->
 <section class="section section-indent consulting">
  <div class="container">
 <div class="consulting-wrap two">
   <div class="consulting-img">
     <img loading="lazy" src="<? echo $arResult['DISPLAY_PROPERTIES']['NUM2_PIC']['VALUE'];?>" alt="consulting">
   </div>
   <div class="consulting-text">
     <span>02</span>
     <h2><? echo $arResult['DISPLAY_PROPERTIES']['NUM2_TITLE']['VALUE'];?></h2>
     <p class="descr-s"><?=htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['NUM2_TTEXT']['VALUE']["TEXT"])?></p>
   </div>
 </div>
  </div>
 </section>
 <!--/consulting-->
<? endif; ?>

<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK5_ITEMS"]["VALUE"])): ?>
<!--provide-->
<section class="section provide">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK5_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <ul class="provide-box">
  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK5_ITEMS"]["VALUE"] as $k=>$value):?>
     <li>
      <img src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK5_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
      <p class="descr-sm"><?=htmlspecialcharsBack($value["TEXT"])?></p>
     </li>
  <?endforeach?>
  </ul>
  <!--/-->
 </div>
</section>
<!--/provide-->
<? endif; ?>
<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK6_ITEMS"]["VALUE"])): ?>
<!--software-->
<section class="section software">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK6_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <div class="software-boxs">
    <?$software_boxs=0;?>
  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK6_ITEMS"]["VALUE"] as $k=>$value):?>
    <?$software_boxs++;?>
     <div class="software-box">
      <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK6_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
      <span>0<?=$software_boxs;?></span>
      <p class="descr-s"><?=$value?></p>
     </div>
  <?endforeach?>
   <!---->
  </div>
  <!--/-->
 </div>
</section>
<!--/software-->
<? endif; ?>



<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK7_ITEMS"]["VALUE"])): ?>
<!--result-->
<section class="section result">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK7_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <div class="swiper-container result-slider">
   <div class="swiper-wrapper">

  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK7_ITEMS"]["VALUE"] as $k=>$value):?>
    <?$software_boxs++;?>
     <div class="swiper-slide result-slide">
      <p class="descr-sm"><?=$value?></p>
      <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK7_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
     </div>
  <?endforeach?>
   </div>
     <div class="slider-arrows">
   <svg class="slider-arrow_two result-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="22.6348" cy="22.5" r="22" />
    <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
   <svg class="slider-arrow_two result-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
    <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
  </div>
  </div>
  <!--/-->
  <div class="slider-progresbar result-pagination"></div>
  <!--/-->
 </div>
</section>
<!--/result-->
<? endif; ?>


<? if ($APPLICATION->GetCurPage(false) == '/service/konsalting-audit-razrabotka-it-strategiy-proektirovanie-it-infrastruktury/'): ?>
<!--request-->
<div class="request-request-five">
 <div class="container">
 <div class="like_h2 request__title--h2">Получить консультацию по разработке IT стратегии</div>
  <!--/-->
  <?/*<form class="request-form_five" autocomplete="off">
   <div class="form-top">
    <input class="form-input" type="text" placeholder="Имя" required>
    <input class="form-input input-phone" type="tel"  required>
   </div>
   <div class="form-bottom">
    <label class="input-checkbox">
     <input type="checkbox" required checked>
     <span class="input-checkbox_icon">
      <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
      </svg>
     </span>
     <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
    </label>
    <button class="form-button" type="submit">Проконсультироваться</button>
   </div>
  </form>*/?>

<?
$APPLICATION->IncludeComponent(
	"bitrixsoid:feedback",
	"consult",
	array(
		"COMPONENT_TEMPLATE" => "consult",
		"EVENT_MESSAGE_ID" => array(
			0 => "50",
		),
		"FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage('NAME_FIELD_NAME')."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"}]",
		"ACTION_CODE" => "consult_".$arResult["ID"],
		"SUBJECT" => "Заказ консультации по товару: [".$arResult["ID"]."] ".$arResult["NAME"],
		"BUTTON_NAME" => "Проконсультироваться",
		"HEADER" => "Задать вопрос",
		"PARAM_1" => "",
		"PARAM_2" => "",
		"PARAM_3" => ""
	),
	false
);?>
  <!--/-->
 </div>
</div>
<!--/request-->
<? endif; ?>

<?/*-----------------*/?>


<? if (isset($arResult["DISPLAY_PROPERTIES"]["NUM3_TITLE"]["VALUE"])): ?>
<!--consulting-->
 <section class="section section-indent consulting">
  <div class="container">
 <div class="consulting-wrap">
   <div class="consulting-img">
     <img loading="lazy" src="<? echo $arResult['DISPLAY_PROPERTIES']['NUM3_PIC']['VALUE'];?>" alt="consulting">
   </div>
   <div class="consulting-text">
     <span>03</span>
     <h2><? echo $arResult['DISPLAY_PROPERTIES']['NUM3_TITLE']['VALUE'];?></h2>
     <p class="descr-s"><?=htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['NUM3_TTEXT']['VALUE']["TEXT"])?></p>
   </div>
 </div>
  </div>
 </section>
 <!--/consulting-->
<? endif; ?>

<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK8_ITEMS"]["VALUE"])): ?>
<!--provide-->
<section class="section provide">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK8_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <ul class="provide-box">
  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK8_ITEMS"]["VALUE"] as $k=>$value):?>
     <li>
      <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK8_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
      <p class="descr-sm"><?=htmlspecialcharsBack($value["TEXT"])?></p>
     </li>
  <?endforeach?>
  </ul>
  <!--/-->
 </div>
</section>
<!--/provide-->
<? endif; ?>
<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK9_ITEMS"]["VALUE"])): ?>
<!--software-->
<section class="section software">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK9_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <div class="software-boxs">
    <?$software_boxs=0;?>
  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK9_ITEMS"]["VALUE"] as $k=>$value):?>
    <?$software_boxs++;?>
     <div class="software-box">
      <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK9_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
      <span>0<?=$software_boxs;?></span>
      <p class="descr-s"><?=$value?></p>
     </div>
  <?endforeach?>
   <!---->
  </div>
  <!--/-->
 </div>
</section>
<!--/software-->
<? endif; ?>

<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK10_ITEMS"]["VALUE"])): ?>
<!--result-->
<section class="section result">
 <div class="container">
  <!--/-->
  <div class="section-title">
   <h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK10_TITLE']['VALUE'];?></h2>
  </div>
  <!--/-->
  <div class="swiper-container result-slider">
   <div class="swiper-wrapper">

  <?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK10_ITEMS"]["VALUE"] as $k=>$value):?>
    <?$software_boxs++;?>
     <div class="swiper-slide result-slide">
      <p class="descr-sm"><?=$value?></p>
      <img loading="lazy" src="<?=$arResult["DISPLAY_PROPERTIES"]["BLOCK10_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
     </div>
  <?endforeach?>
   </div>
     <div class="slider-arrows">
   <svg class="slider-arrow_two result-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="22.6348" cy="22.5" r="22" />
    <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
   <svg class="slider-arrow_two result-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
    <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
  </div>
  </div>
  <!--/-->
  <div class="slider-progresbar result-pagination"></div>
  <!--/-->
 </div>
</section>
<!--/result-->
<? endif; ?>



