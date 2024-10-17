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
   <h2><?=$arParams["TITLE_BLOCK_success"]?></h2>
  </div>
 <div class="success-boxs">
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
		  <div class="success-box">
		    <span><?echo $arItem["PROPERTIES"]["NUMBER"]["VALUE"]?></span>
		    <p class="descr-sm"><?echo $arItem["NAME"];?></p>
		    <img src="<?=$image?>" alt="icon">
		   </div>		
	<?endforeach;?>
 	</div>
</div>

