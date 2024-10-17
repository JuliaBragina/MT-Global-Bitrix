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
  <div class="program-img">
   <img src="<?=$arParams["IMG_BLOCK_program"]?>" alt="photo">
   <img src="<?=$arParams["IMG2_BLOCK_program"]?>" alt="photo">
  </div>

  <div class="program-text">
   <div class="section-title">
    <h2><?=$arParams["TITLE_BLOCK_program"]?></h2>
    <p class="descr-sm"><?=$arParams["TITLE_TEXT_program"]?></p>
   </div>
   <p class="descr-sm program-subtitle"><b><?=$arParams["SUBTITLE_BLOCK_program"]?></b></p>
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
</div>