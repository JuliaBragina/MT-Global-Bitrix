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
   <h2><?=$arParams["TITLE_BLOCK_equipment"]?></h2>
  </div>
  <div class="swiper-container equipment-slider">
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
    <div class="swiper-slide equipment-slide">
     <div class="equipment-slide_text">
      <h4><?echo $arItem["NAME"];?></h4>
      <p class="descr-sm"><?echo $arItem["PREVIEW_TEXT"];?></p>
     </div>
     <img src="<?=$image?>" alt="icon">
    </div>
				<?endforeach;?>
   </div>
     <div class="slider-arrows">
   <svg class="slider-arrow_two equipment-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="22.6348" cy="22.5" r="22" />
    <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
   <svg class="slider-arrow_two equipment-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
    <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
   </svg>
  </div>
  </div>
  <!--/-->
  <div class="slider-progresbar equipment-pagination"></div>
</div>