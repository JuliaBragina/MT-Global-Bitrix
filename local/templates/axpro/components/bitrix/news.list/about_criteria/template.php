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
  <!--/-->
  <div class="section-title">
   <h2><?=$arParams["TITLE_BLOCK_criteria"]?></h2>
   <p class="descr-sm"><?=$arParams["TITLE_TEXT_criteria"]?></p>
  </div>
  <!--/-->
  <div class="criteria-boxs">
	<?$item_say=0;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?$item_say++;?>
		<div class="criteria-box">
			<span>0<?=$item_say;?></span>
			<?echo $arItem["PREVIEW_TEXT"];?>
			<p class="descr-sm"><?echo $arItem["NAME"]?></p>
		</div>
	<?endforeach;?>
	</div>
  <!--/-->
 </div>