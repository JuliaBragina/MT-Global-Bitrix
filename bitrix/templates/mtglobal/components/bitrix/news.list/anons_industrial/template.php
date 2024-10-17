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
   <h1><?=$arParams['TITLE_BLOCK_industrial']?></h1>
	  <?}else{?>
<h2><?=$arParams['TITLE_BLOCK_industrial']?></h2>
	  <?}?>
  </div>


	<div class="expertise-boxs">

		<?$services_boxs=0;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?$services_boxs++;?>




   <a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="expertise-box">
    <div class="h4-main-item"><?echo $arItem["NAME"];?>
      <span>
        <b>
          <pre><?=$arItem["PROPERTIES"]["BLOCK1_TEXT"]["VALUE"];?></pre>
        </b>
        <b><?=$arItem["PROPERTIES"]["BLOCK1_TEXT"]["DESCRIPTION"];?></b>
      </span>
    </div>
    <div class="expertise-box_img">
     <img loading="lazy" src='<?=$arItem["PROPERTIES"]["BLOCK1_IMG"]["VALUE"];?>' alt="photo">
    </div>
   </a>



		<?endforeach;?>
	 </div>

 </div>
