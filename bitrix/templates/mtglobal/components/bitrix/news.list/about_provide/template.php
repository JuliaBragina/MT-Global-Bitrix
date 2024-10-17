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
   <h2><?=$arParams["TITLE_BLOCK_provide"]?></h2>
  </div>
	 <ul class="provide-box">
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
			   <li>
			    <img src="<?=$image?>" alt="icon">
			    <p class="descr-sm"><?echo $arItem["PREVIEW_TEXT"];?></p>
			   </li>
		<?endforeach;?>
	 </ul>
</div>
