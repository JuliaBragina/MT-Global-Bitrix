<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<?/*
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if($INPUT_ID == '')
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if($CONTAINER_ID == '')
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);*/?>





<div class="search-bar">
	<div class="search-bar__container" id="<?echo $CONTAINER_ID?>">
	<form action="<?echo $arResult["FORM_ACTION"]?>">
		<input
		id="<?//=$INPUT_ID?>"
		size="65" maxlength="60" autocomplete="off"
		name="q"
		class="search-bar__input"
		placeholder="Введите запрос"
		type="text"
		/>
		<button 
		name="s"
		type='submit'
		class="icon-button icon-button_search-black search-bar__search-button"
		></button>
	
		</form>
		<button
		class="icon-button icon-button_close search-bar__close"
		></button>
	</div>
</div>

