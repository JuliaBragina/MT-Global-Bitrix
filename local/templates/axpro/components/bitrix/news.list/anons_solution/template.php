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
<section class="section complex">
 <div class="container">
  <div class="section-title">
    <?if($_SERVER['REQUEST_URI'] != '/'){?>
   <h1><?=$arParams["TITLE_BLOCK_solution"]?></h1>
   <?}else{?>
    <h2><?=$arParams["TITLE_BLOCK_solution"]?></h2>
    <?}?>
  </div>


	<div class="complex-boxs">

		<?$services_boxs=0;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?$services_boxs++;?>

   <a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="complex-box">
    <?echo $arItem["PREVIEW_TEXT"];?>
    <p class="descr-sm"><?=htmlspecialcharsBack($arItem["PROPERTIES"]["NAME_LIST"]["VALUE"]["TEXT"]);?></p>
    <span><?=htmlspecialcharsBack($arItem["PROPERTIES"]["TEXT_LIST"]["VALUE"]["TEXT"]);?></span>
    <svg class="complex-box_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004">
     <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
         c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
         c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
         c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" />
    </svg>
   </a>

		<?endforeach;?>
	 </div>


	 <?/*  <!--/-->
  <form class="complex-form blue" autocomplete="off">
   <div class="form-top">
    <input class="form-input" type="text" placeholder="Имя" required>
    <input class="form-input tel_input" type="tel" placeholder="Телефон" required>
   </div>
   <div class="form-bottom">
    <label class="input-checkbox">
     <input type="checkbox" required checked>
     <span class="input-checkbox_icon">
      <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
      </svg>
     </span>
     <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
    </label>
    <button class="form-button" type="submit">Узнать подробнее</button>
   </div>
  </form>
  <!--/-->
*/?>
<?$APPLICATION->IncludeComponent(
	"bitrixsoid:feedback",
	"complex-form",
	array(
		"COMPONENT_TEMPLATE" => "request_1_double",
		"EVENT_MESSAGE_ID" => array(
			0 => "50",
		),
		"FIELDS" => "[{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"}]",
		"ACTION_CODE" => "request_1_double",
		"SUBJECT" => "Обратная связь",
		"HEADER" => "Задать вопрос",
		"BUTTON_NAME" => "Отправить",
		"PARAM_1" => "",
		"PARAM_2" => "",
		"PARAM_3" => ""
	),
	false
);?>
<style>
.blue .input-checkbox span:not(.bolder).input-checkbox_icon {
    background: #627CE8 !important;
}
	 </style>
 </div>
</section>