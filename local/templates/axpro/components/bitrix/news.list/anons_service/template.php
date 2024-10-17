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



<pre style="display: none;">
	<? var_dump($arParams["TITLE_BLOCK_service"]); ?>
</pre>
<?if(!empty($arParams["TITLE_BLOCK_service"])){?>
 <div class="container">
  <div class="section-title section-title--adaptive">
  	<?if ($_SERVER['REQUEST_URI'] == '/service/'):?>
  		<h1 class="like_h2"><?=$arParams["TITLE_BLOCK_service"]?></h1>
  	<?else:?>
		<h2 class="like_h2" style="max-width: 100%;"><?=$arParams["TITLE_BLOCK_service"]?></h2>
	<?endif;?>
  </div>
 </div>
 <?}?>



<div class="like_h2 request__title--h2 h--box"> 
 
</div>






<div class="services-boxs">

	 



	<?$services_boxs=0;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		

		<?$services_boxs++;?>
		<?
		if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
		$image = $arItem["PROPERTIES"]["ICON_LIST"]["VALUE"];
		}else{
		$image = $arItem["PROPERTIES"]["ICON_LIST"]["VALUE"];
		}
		?>
		  <a href='<?=$arItem["DETAIL_PAGE_URL"];?>' class="services-box">
		   <div class="services-box_img">
		   	<? if (empty($image)): ?>
		   	<? else: ?>
		    	<img loading="lazy" src="<?=$image?>" alt="service">
		    <? endif; ?>
		   </div>
		   <div class="services-box_text">
		    <p class="descr-xm"><?echo $arItem["PREVIEW_TEXT"];?></p> 
		    <span>0<?=$services_boxs;?></span>
		   </div>
		   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004">
		    <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
		     c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
		     c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
		     c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" />
		   </svg>
		  </a>

	<?endforeach;?>
 </div>