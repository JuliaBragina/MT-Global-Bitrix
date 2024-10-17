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
<div class="container">
  <div class="section-title">

   <div class="like_h2"><?=$arParams["TITLE_BLOCK_licensed"]?></div>
  </div>
  <div class="swiper-container licensed-slider">
   <div class="swiper-wrapper">



				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
						<?$item_how++;?>
						<?
						if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
						$image = $arItem["PREVIEW_PICTURE"]["SRC"];
						}else{
						$image = $arItem["PROPERTIES"]["ICON"]["VALUE"];
						}
						?>	


    <div class="swiper-slide licensed-slide">
     <div class="swiper-slide_top">
      <p class="descr-sm"><?echo $arItem["NAME"];?></p>
      <p class="descr-xs"><?echo $arItem["PREVIEW_TEXT"];?></p>
     </div>
     <div class="swiper-slide_bottom">
      <p class="descr-xs"><?=$arItem["PROPERTIES"]["WE"]["VALUE"];?></p>
     <img src="<?=$image?>" alt="icon">
     </div>
    </div>


				<?endforeach;?>
   </div>
   <div class="slider-arrows">
    <svg class="slider-arrow licensed-arrow_prev" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
     <circle cx="22.5" cy="22.5" r="22.5" />
     <path d="M30 22H16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
     <path d="M23 15L16 22L23 29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <svg class="slider-arrow licensed-arrow_next" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
     <circle cx="25" cy="25" r="25" />
     <path d="M18 25H32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
     <path d="M25 18L32 25L25 32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
   </div>
  </div>
  <!--/-->
  <div class="slider-bullets licensed-pagination"></div>
  <!--/-->
 </div>