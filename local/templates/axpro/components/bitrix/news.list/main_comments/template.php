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
<div class="comments-boxs">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

   <div class="comments-box <?= (isset($arItem["PREVIEW_PICTURE"]["SRC"]) && isset($arItem["PREVIEW_TEXT"]) && isset($arItem["DETAIL_TEXT"]))? '' :'active' ?>">
    <? if (isset($arItem["DETAIL_PICTURE"]["SRC"])): ?>
      <img loading="lazy" class="comments-box_logo" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="logo">
    <? endif;?>
    <div class="h4-dover"><?echo $arItem["NAME"]?></div>  
     <? if (isset($arItem["PREVIEW_PICTURE"]["SRC"]) && isset($arItem["PREVIEW_TEXT"]) && isset($arItem["DETAIL_TEXT"])): ?>
    <div class="comments-box_info">

         <div class="comments-box_top">
          <? if (isset($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
            <img loading="lazy" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="avatar">
          <? endif; ?>
          <span><?echo $arItem["PREVIEW_TEXT"];?></span>
         </div>

     <p><?echo $arItem["DETAIL_TEXT"];?></p>
    </div>
    <? endif; ?>
   </div>
<?endforeach;?>
</div>
