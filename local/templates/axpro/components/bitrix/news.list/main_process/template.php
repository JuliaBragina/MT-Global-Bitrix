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
   <ul class="process-tabs">
	<?foreach($arResult["ITEMS"] as $arSecElItem):?>
		<? if(!empty($arSecElItem['ELEMENTS'])):?>
    		<li><b><?echo $arSecElItem['NAME']?> </b></li>
		<? endif ?>
	<?endforeach;?>
   </ul>
 
<div class="process-wrap">
	<?foreach($arResult["ITEMS"] as $arSecElItem):?>
		   <div class="process-boxs <?echo $arSecElItem['CODE']?>">
		   	<?$item_say=0;?>
			   <? if(!empty($arSecElItem['ELEMENTS'])):?>
					<? foreach($arSecElItem['ELEMENTS'] as $arItem):?>
							<?$item_say++;?>
							<?
							if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
							$image = $arItem["PREVIEW_PICTURE"]["SRC"];
							}else{
							$image = $arItem["PROPERTIES"]["ICON"]["VALUE"];
							}
							?>
							    <div class="process-box">
							     <div class="process-box_icon">
							      <img src="<?=$image?>" alt="icon">
							      <span><?echo $arItem["PROPERTIES"]["NUMBER"]["VALUE"]?></span>
							     </div>
							     <p><?echo $arItem["PREVIEW_TEXT"]?></p>
							    </div>
						<? endforeach ?>
				<? endif ?>
			<?echo $arSecElItem['DESCRIPTION']?>
		</div>
	<?endforeach;?>
</div>

