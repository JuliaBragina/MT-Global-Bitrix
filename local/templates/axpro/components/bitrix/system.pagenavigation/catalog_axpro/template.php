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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<nav class="page-navigation">
<ul>


<?if($arResult["bDescPageNumbering"] !== true):?>



	
	<?if ($arResult["NavPageNomer"] > 1):?>
		

		<?if($arResult["bSavePage"]):?>
			
			<li> <a style="text-decoration: none;"href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><button
                  class="page-navigation__button page-navigation__button_prev disabled"
                ></button></a>  </li>
			
		<?else:?>
			
			<?if ($arResult["NavPageNomer"] > 2):?>
				<li><a style="text-decoration: none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">  <button
                  class="page-navigation__button page-navigation__button_prev disabled"
                ></button></a> </li>
			<?else:?>
				<li><a  style="text-decoration: none;"href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><button
                  class="page-navigation__button page-navigation__button_prev disabled"
                ></button></a> </li>
			<?endif?>
		<?endif?>	
		
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="active"> <?=$arResult["nStartPage"]?></li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<li> <a style="text-decoration: none;" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a> </li>
		<?else:?>
			<li> <a style="text-decoration: none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
	
		<li> <a style="text-decoration: none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">	
			<button class="page-navigation__button page-navigation__button_next"></button>
		</a></li>
		
	<?endif?>

<?endif?>
</ul>	
</nav>
