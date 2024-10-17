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

  <div class="when-left">
   <h2><?=GetMessage("BLOCK_TITLE")?></h2>
   <ul class="when-tabs">
	<?foreach($arResult["ITEMS"] as $arSecElItem):?>
		<? if(!empty($arSecElItem['ELEMENTS'])):?>
    		<li><span><b><?echo $arSecElItem['NAME']?> </b><br><?echo $arSecElItem['DESCRIPTION']?></span></li>
		<? endif ?>
	<?endforeach;?>
   </ul>
  </div>
 
<div class="when-right">
	<?foreach($arResult["ITEMS"] as $arSecElItem):?>
		 <ul class="when-box">
			   <? if(!empty($arSecElItem['ELEMENTS'])):?>
					<? foreach($arSecElItem['ELEMENTS'] as $arItem):?>

							<?
							if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
							$image = $arItem["PREVIEW_PICTURE"]["SRC"];
							}else{
							$image = $arItem["PROPERTIES"]["ICON"]["VALUE"];
							}
							?>

							
						    <li>
						     <img src="<?=$image?>" alt="icon">
						     <p><?echo $arItem["PREVIEW_TEXT"]?></p>
						    </li>
						<? endforeach ?>
				<? endif ?>
		</ul>
	<?endforeach;?>
</div>

