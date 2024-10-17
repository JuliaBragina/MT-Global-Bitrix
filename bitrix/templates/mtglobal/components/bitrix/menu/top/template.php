<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="header-menu_list">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="header-menu_point"><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>menu-selected<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul class="header-menu_sublist">

		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>" class="parent<?if ($arItem["SELECTED"]):?> menu-selected<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>

		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<?if ($arItem["PARAMS"]["MORE_MENU"]=="Y"):?> 
					<li class="header-menu_point"><a href="#" class="<?if ($arItem["PARAMS"]["MORE_MENU"]=="Y"):?>header-menu_point<?endif?><?if ($arItem["SELECTED"]):?>menu-selected<?endif?>"><?=$arItem["TEXT"]?></a>
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["PARAMS"]["CONTACT_MENU"]=="Y"):?>header-menu_contacts <?endif?><?if ($arItem["PARAMS"]["MORE_MENU"]=="Y"):?>header-menu_point<?endif?><?if ($arItem["SELECTED"]):?>menu-selected<?endif?>"><?=$arItem["TEXT"]?></a>
				<?endif?>
				<?if ($arItem["LINK"] == "/about/"):?>
					<?$APPLICATION->IncludeFile('/about/sub_menu.php',Array(),Array('MODE'=>'html'));?>
				<?endif?>
				<?if ($arItem["LINK"] == "/service/"):?>
					<?$APPLICATION->IncludeFile('/service/sub_menu.php',Array(),Array('MODE'=>'html'));?>
				<?endif?>
				<?if ($arItem["LINK"] == "/specialization/"):?>
					<?$APPLICATION->IncludeFile('/specialization/sub_menu.php',Array(),Array('MODE'=>'html'));?>
				<?endif?>
				<?if ($arItem["LINK"] == "/solution/"):?>
					<?$APPLICATION->IncludeFile('/solution/sub_menu.php',Array(),Array('MODE'=>'html'));?>
				<?endif?>
				<?if ($arItem["LINK"] == "/industrial/"):?>
					<?$APPLICATION->IncludeFile('/industrial/sub_menu.php',Array(),Array('MODE'=>'html'));?>
				<?endif?>
				</li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="menu-selected"<?endif?>><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>menu-selected<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>