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
$component->SetResultCacheKeys(['DISPLAY_PROPERTIES']);
?>



<!--industrial-->
<section class="section-single industrial">
 <div class="container">
  <!--/-->
  <div class="industrial-text">
   <h1><?=$arResult['SEO_H1']?></h1>
   <div>
   <button class="page-button btn-modal_three"><?=GetMessage("ORDER");?></button>
   <?if(!empty($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])):?>
   <div class="btn-modal_eight" style="display: inline-block;cursor: pointer;color: #fff;">Подробнее</div>
   <?endif;?>
	 </div>
  </div>
  <!--/-->
  <div class="industrial-bgr">
   <img src="<? if ( $arResult['DISPLAY_PROPERTIES']['BLOCK1_IMG']['VALUE']) : ?><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_IMG']['VALUE'];?><?else:?>/img/photo/specialization.jpg<? endif; ?>" alt="photo1">
  </div>
  <!--/-->
 </div>
</section>
<!--/industrial-->