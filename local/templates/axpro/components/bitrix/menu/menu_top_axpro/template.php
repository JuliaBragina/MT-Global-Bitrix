<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<nav class="header__nav">
	<ul class="header-menu">
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<?if($arItem["SELECTED"]):?>
			<li class="header-menu-item active"><span class="selected"><?=$arItem["TEXT"]?></span></li>
		<?else:?>
			<li class="header-menu-item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?endif?>
		
	<?endforeach?>

	</ul>
</nav>
<?endif?>