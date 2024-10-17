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
<!--industrial-->
<section class="section-single industrial">
 <div class="container">
  <!--/-->
  <div class="industrial-text">
   <h1><?=$arResult['SEO_H1']?></h1>
   <div class="industrial-number">
    <span><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_TEXT']['VALUE'];?></span>
    <span><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_TEXT']['DESCRIPTION'];?></span>
   </div>
   <div>
	   <button class="page-button btn-modal_five"><?=GetMessage("ORDER");?></button>
	   <?if(!empty($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])):?>
	   <div class="btn-modal_eight" style="display: inline-block;cursor: pointer;">Подробнее</div>
	   <?endif;?>
	</div>
  </div>
  <!--/-->
  <div class="industrial-bgr">
   <img src="<? if ( $arResult['DISPLAY_PROPERTIES']['BLOCK1_IMG']['VALUE']) : ?><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_IMG']['VALUE'];?><?else:?>/img/photo/industrial.jpg<? endif; ?>" alt="photo1">
  </div>
  <!--/-->
 </div>
</section>
<!--/industrial-->

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
