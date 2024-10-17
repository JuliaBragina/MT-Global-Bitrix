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

		<?if($arResult['SECTIONS']) {?>
			<div class="complexs_sections_blocks">
				<?$k = 0;?>
				<?foreach($arResult['SECTIONS'] as $arSection){?>
					<div class="complexs_sections_block <?=($k == 0 ? 'active' : '')?>" data-section-id='<?=$arSection['ID']?>'>
						<div class="complexs_sections_block_image">
							<?=$arSection['DESCRIPTION']?>
						</div>
						<div class="complexs_sections_block_title">
							<?=$arSection['NAME']?>
						</div>
					</div>

					
					<div class="mobile_section_element <?=($k == 0 ? 'active' : '')?>" data-section-element-id='<?=$arSection['ID']?>'>
						<?foreach($arResult["ITEMS"] as $arItem){?>
							<?if(is_array($arResult['ELEMENTS_SECTIONS'][$arItem['ID']]) && in_array($arSection['ID'], $arResult['ELEMENTS_SECTIONS'][$arItem['ID']])){?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" disabled class="complex_box_mobile">
									<?//echo $arItem["PREVIEW_TEXT"];?>
									<div><?=$arItem['NAME']?></div>

								</a>
							<?}?>
						<?}?>
					</div>
					<?$k++;?>
				<?}?>
			</div>
		<?}?>



		<div class="complex-boxs complex_boxs_custom">
		
			<?
				$first_section_id = array_shift($arResult['SECTIONS'])['ID'];
			?>
			<?foreach($arResult["ITEMS"] as $arItem):?>

				<?//if(is_array($arResult['ELEMENTS_SECTIONS'][$arItem['ID']]) && in_array($arSection['ID'], $arResult['ELEMENTS_SECTIONS'][$arItem['ID']])){?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>

					<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" disabled class="complex_box_custom <?=(is_array($arResult['ELEMENTS_SECTIONS'][$arItem['ID']]) && in_array($first_section_id, $arResult['ELEMENTS_SECTIONS'][$arItem['ID']]) ? 'active' : '')?>" 
					data-link-section-id="[<?=is_array($arResult['ELEMENTS_SECTIONS'][$arItem['ID']]) ? implode(';',$arResult['ELEMENTS_SECTIONS'][$arItem['ID']]) : ''?>]">
						<?echo $arItem["PREVIEW_TEXT"];?>
						<div><?=$arItem['NAME']?></div>

					</a>
				<?//}?>
			<?endforeach;?>
		 </div>

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

 </div>
</section>