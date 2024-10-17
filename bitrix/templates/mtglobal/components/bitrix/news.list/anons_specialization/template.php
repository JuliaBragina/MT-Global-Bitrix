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
  <div class="section-title section-title--adaptive">
<?if($_SERVER['REQUEST_URI'] != '/'){?>
   <h1><?=$arParams["TITLE_BLOCK_specialization"]?></h1>
	  <?}else{?>
<h2><?=$arParams["TITLE_BLOCK_specialization"]?></h2>
	  <?}?>
  </div>
 </div>
<div class="specializations-boxs">

	<?$services_boxs=0;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?$services_boxs++;?>
		<?
		if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
		$image = $arItem["PREVIEW_PICTURE"]["SRC"];
		}else{
		$image = $arItem["PROPERTIES"]["ICON_LIST"]["VALUE"];
		}
		?>

		 <a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="specializations-box">
		   <div class="specializations-box_text">
		    <div class="h4-spec"><?echo $arItem["NAME"];?></div>   
			<?echo $arItem["PREVIEW_TEXT"];?>
		   </div>
		   <div class="specializations-box_img">
			<?echo $arItem["DETAIL_TEXT"];?>
		   </div>
		  </a>


	<?endforeach;?>
 </div>
