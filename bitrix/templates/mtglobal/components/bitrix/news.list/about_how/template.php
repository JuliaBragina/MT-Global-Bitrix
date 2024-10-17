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
   <h2><?=$arParams["TITLE_BLOCK_how"]?></h2>
  </div>
  <div class="how-wrap">
   <svg class="how-line" viewBox="0 0 961 36" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M45 18H961" stroke="#BDE3FE" />
    <path d="M8 18H29" stroke="#BCC6F7" stroke-width="2" />
    <path d="M18 7.5L28.5 18L18 28.5" stroke="#BCC6F7" stroke-width="2" />
   </svg>
   <ul class="how-box">


   				<?$item_how=0;?>
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
				    <li>
				     <div class="how-box_icon">
				      <span>0<?=$item_how;?></span>
				      <img src="<?=$image?>" alt="icon">
				     </div>
				     <p><?echo $arItem["NAME"];?></p>
				    </li>
				<?endforeach;?>
   </ul>
   <button class="page-button two btn-modal_seven"><?=GetMessage("BUTTONabout_how")?></button>
  </div>
</div>