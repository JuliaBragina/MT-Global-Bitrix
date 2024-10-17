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

<div class="licensed-slider-small__wrap">
  <div class="section-title">
   <h2 style="text-align:center;"><?=$arParams["TITLE_BLOCK_licensed"]?></h2>
  </div>

	<div class="swiper-container licensed-half-slider licensed-slider-<?=$arParams["IBLOCK_ID"]?>">
	   		<div class="swiper-wrapper">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
						<?
						if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
						$image = $arItem["PREVIEW_PICTURE"]["SRC"];
						}else{
						$image = $arItem["PROPERTIES"]["ICON"]["VALUE"];
						}
						?>	
						    <a data-fancybox="gallery" href='<?echo $arItem["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"]?>' class="swiper-slide licensed-half-slide">
						     <div class="swiper-slide_top">
						      <p class="descr-sm"><?echo $arItem["NAME"];?></p>
						     </div>
							<div class="swiper-slide_bottom">
				     		     <? if (empty($arItem["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"])): ?>		     	
	 								<? else: ?>
								      <p class="descr-xs">PDF, <?php
												$filename = $arItem["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["FILE_SIZE"];
												$filename  = $filename/1000000;
												echo  mb_strimwidth($filename, 0, 4) . ' Мб';
												?></p>
						    	 <? endif; ?>
						      <? if (empty($image)): ?><? else: ?><img src="<?=$image?>" alt="icon"><? endif; ?>
						     </div>

						    </a>
				<?endforeach;?>
			</div>
		   <div class="slider-arrows">
		    <svg class="slider-arrow licensed-<?=$arParams["IBLOCK_ID"]?>-arrow_prev" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
		     <circle cx="22.5" cy="22.5" r="22.5" />
		     <path d="M30 22H16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		     <path d="M23 15L16 22L23 29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		    </svg>
		    <svg class="slider-arrow licensed-<?=$arParams["IBLOCK_ID"]?>-arrow_next" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
		     <circle cx="25" cy="25" r="25" />
		     <path d="M18 25H32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		     <path d="M25 18L32 25L25 32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		    </svg>
		   </div>
	 </div>
 	 <div class="slider-bullets licensed-pagination-<?=$arParams["IBLOCK_ID"]?>"></div>
</div>

