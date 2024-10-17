<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<section class="section result cl-after-breadcrumb">
	<div class="container">
		<div class="section-title">
			<h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK3_TITLE']['VALUE']; ?></h2>
		</div>
		<!--/-->
		<div class="swiper-container result-slider">
			<div class="swiper-wrapper">
				<? foreach ($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["VALUE"] as $k => $value) : ?>
					<div class="swiper-slide result-slide">
						<p class="descr-sm"><?= $value; ?></p>
						<? if (empty($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["DESCRIPTION"][$k])) : ?>
						<? else : ?>
							<img src="<?= $arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["DESCRIPTION"][$k] ?>" alt="icon">
						<? endif; ?>
					</div>
				<? endforeach ?>



			</div>
			<div class="slider-arrows">
				<svg class="slider-arrow_two result-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="22.6348" cy="22.5" r="22" />
					<path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				<svg class="slider-arrow_two result-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
					<path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</div>
		</div>
		<!--/-->
		<div class="slider-progresbar result-pagination"></div>
		<!--/-->
	</div>
</section>

<!--we-->
<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS"]["VALUE"])) : ?>
	<section class="section section-indent we">
		<div class="container">
			<!--/-->
			<div class="section-title">
				<h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK2_TITLE']['VALUE']; ?></h2>
			</div>
			<!--/-->
			<div class="swiper-container we-slider">
				<div class="swiper-wrapper">
					<? foreach ($arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS"]["VALUE"] as $k => $value) : ?>

						<div class="swiper-slide we-slide">
							<div class="we-slide_top">
								<span><?= GetMessage("UP"); ?><b><?= $value ?></b></span>
								<img src='<?= $arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS"]["DESCRIPTION"][$k] ?>' alt="icon">
							</div>
							<p class="descr-xm"><?= $arResult["DISPLAY_PROPERTIES"]["BLOCK2_ITEMS_TEXT"]["VALUE"][$k] ?></p>
						</div>
					<? endforeach ?>
				</div>
				<div class="slider-arrows">
					<svg class="slider-arrow_two we-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="22.6348" cy="22.5" r="22" />
						<path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<svg class="slider-arrow_two we-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
						<path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
			<!--/-->
			<div class="slider-bullets we-pagination"></div>
		</div>
	</section>
<? endif; ?>
<!--/we-->
<!--result-->

<?/* if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["VALUE"])) : ?>

	<section class="section result">
		<div class="container">
			<div class="section-title">
				<h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK3_TITLE']['VALUE']; ?></h2>
			</div>
			<!--/-->
			<div class="swiper-container result-slider">
				<div class="swiper-wrapper">
					<? foreach ($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["VALUE"] as $k => $value) : ?>
						<div class="swiper-slide result-slide">
							<p class="descr-sm"><?= $value; ?></p>
							<? if (empty($arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["DESCRIPTION"][$k])) : ?>
							<? else : ?>
								<img src="<?= $arResult["DISPLAY_PROPERTIES"]["BLOCK3_ITEMS"]["DESCRIPTION"][$k] ?>" alt="icon">
							<? endif; ?>
						</div>
					<? endforeach ?>
				</div>
				<div class="slider-arrows">
					<svg class="slider-arrow_two result-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="22.6348" cy="22.5" r="22" />
						<path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<svg class="slider-arrow_two result-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
						<path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
			<!--/-->
			<div class="slider-progresbar result-pagination"></div>
			<!--/-->
		</div>
	</section>

<? endif; */?>
<!--/result-->


<? if (isset($arResult["DISPLAY_PROPERTIES"]["TEXT2SECTION"]["VALUE"])) : ?>
	<!--description-->
	<section class="section section-one description">
		<div class="container">
			<p><?= htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['TEXT2SECTION']['VALUE']["TEXT"]) ?></p>
		</div>
	</section>
	<!--/description-->
<? endif; ?>

<!--services-->
<section class="section services">
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"anons_service",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "ID",
				1 => "CODE",
				2 => "XML_ID",
				3 => "NAME",
				4 => "TAGS",
				5 => "SORT",
				6 => "PREVIEW_TEXT",
				7 => "PREVIEW_PICTURE",
				8 => "DETAIL_TEXT",
				9 => "DETAIL_PICTURE",
				10 => "DATE_ACTIVE_FROM",
				11 => "ACTIVE_FROM",
				12 => "DATE_ACTIVE_TO",
				13 => "ACTIVE_TO",
				14 => "SHOW_COUNTER",
				15 => "SHOW_COUNTER_START",
				16 => "IBLOCK_TYPE_ID",
				17 => "IBLOCK_ID",
				18 => "IBLOCK_CODE",
				19 => "IBLOCK_NAME",
				20 => "IBLOCK_EXTERNAL_ID",
				21 => "DATE_CREATE",
				22 => "CREATED_BY",
				23 => "CREATED_USER_NAME",
				24 => "TIMESTAMP_X",
				25 => "MODIFIED_BY",
				26 => "USER_NAME",
				27 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => $GLOBALS["TITLE_BLOCK_service_ID"],
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "ICON_LIST",
				1 => "ICON",
				2 => "WE",
				3 => "NUMBER",
				4 => "FILE",
				5 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "anons_service",
			"TITLE_BLOCK_service" => (isset($arResult['DISPLAY_PROPERTIES']['SERVICE_TITLE']['VALUE']) ? $arResult['DISPLAY_PROPERTIES']['SERVICE_TITLE']['VALUE'] : $GLOBALS["TITLE_BLOCK_service"])
		),
		false
	); ?>
</section>

<!-- < ?php include  $_SERVER['DOCUMENT_ROOT']."/include/rev_logo.php"; ? >  -->

<!--/services-->




<!-- !!!!!!! SLIDER -->
<!-- < ? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"])): ?>
< ?=$arItem["PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"];?>
<section class="section cost">
 <div class="container">
  <h2>< ? echo $arResult['DISPLAY_PROPERTIES']['BLOCK4_TITLE']['VALUE'];?></h2>
  <div class="swiper-container cost-slider">
   <div class="swiper-wrapper">
  	< ?$cost_slider=0;?>
	< ?foreach($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"] as $k=>$value):?>
		< ?$cost_slider++;?>
	   <div class="swiper-slide cost-slide">
		     < ? if (empty($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["DESCRIPTION"][$k])): ?>
		     	< ? else: ?>
					<img src="< ?=$arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["DESCRIPTION"][$k]?>" alt="icon">
		     < ? endif; ?>
	    <span>0< ?=$cost_slider;?></span>
	   <p class="descr-s">< ?=$value?></p>
	   </div>
	< ?endforeach?>
   </div>
   <div class="slider-arrows">
    <svg class="slider-arrow cost-arrow_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
     <circle cx="22.6348" cy="22.5" r="22" />
     <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
     <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <svg class="slider-arrow cost-arrow_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
     <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)" />
     <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
     <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
   </div>
  </div>
  <div class="slider-bullets cost-pagination"></div>
  <div class="cost-bgr">
   <img src="< ? echo $arResult['DISPLAY_PROPERTIES']['BLOCK4_IMG']['VALUE'];?>" alt="photo">
  </div>
 </div>
</section>
< ? endif; ?> -->
<!-- !!!!!!! SLIDER END-->



<!-- wind blocks -->
<? if (isset($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"])) : ?>
	<section class="section software">
		<div class="container">
			<div class="section-title">
				<h2><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK4_TITLE']['VALUE']; ?></h2>
			</div>
			<div class="software-boxs">
				<? $software_boxs = 0; ?>
				<? foreach ($arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["VALUE"] as $k => $value) : ?>
					<? $software_boxs++; ?>
					<div class="software-box">
						<img loading="lazy" src="<?= $arResult["DISPLAY_PROPERTIES"]["BLOCK4_ITEMS"]["DESCRIPTION"][$k] ?>" alt="icon">
						<span>0<?= $software_boxs; ?></span>
						<p class="descr-s"><?= $value ?></p>
					</div>
				<? endforeach ?>
			</div>

		</div>
	</section>
<? endif; ?>
<!-- wind blocks end -->






<div class="section request-four">
	<div class="container">

		<? if ($_SERVER['HTTP_HOST'] === 'en.mtglobal.ru') : ?>
			<div class="like_h2 request__title--h2">Order IT infrastructure maintenance</div>
			<? $APPLICATION->IncludeComponent(
				"bitrixsoid:feedback",
				"request_3",
				array(
					"COMPONENT_TEMPLATE" => "request_3",
					"EVENT_MESSAGE_ID" => array(
						0 => "50",
					),
					"FIELDS" => "[{\"code\":\"email\",\"name\":\"Email\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"email\"},{\"code\":\"phone\",\"name\":\"Phone\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Message\"}]",
					"ACTION_CODE" => "request_3_" . $arResult["ID"],
					"SUBJECT" => 'Ordering a consultation on the product: [' . $arResult["ID"] . '] ' . $arResult["NAME"],
				),
				false
			); ?>
		<? else : ?>
			<div class="like_h2 request__title--h2">Заказать обслуживание IT инфраструктуры</div>
			<? $APPLICATION->IncludeComponent(
				"bitrixsoid:feedback",
				"request_3",
				array(
					"COMPONENT_TEMPLATE" => "request_3",
					"EVENT_MESSAGE_ID" => array(
						0 => "50",
					),
					"FIELDS" => "[{\"code\":\"email\",\"name\":\"Email\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"email\"},{\"code\":\"phone\",\"name\":\"Телефон\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Сообщение\"}]",
					"ACTION_CODE" => "request_3_" . $arResult["ID"],
					"SUBJECT" => 'Заказ консультации по товару: [' . $arResult["ID"] . '] ' . $arResult["NAME"],
				),
				false
			); ?>
		<? endif; ?>
	</div>
</div>

<div class="section content-text__wrap">
	<div class="container">
		<? echo $arResult["DETAIL_TEXT"]; ?>
	</div>
</div>

<? if (isset($arResult["DISPLAY_PROPERTIES"]["POC_T"]["VALUE"])) : ?>
	<!--apply-->
	<section class="section section-one apply">
		<div class="container">
			<!--/-->
			<div class="section-title">
				<h2><? echo $arResult['DISPLAY_PROPERTIES']['POC_T']['VALUE']; ?></h2>
				<div class="poc-subtitle"><?= htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['POC_SUBT']['VALUE']["TEXT"]) ?></div>
			</div>

			<!--/-->
			<div class="apply-boxs">
				<!---->
				<div class="apply-box">
					<span><? echo $arResult['DISPLAY_PROPERTIES']['POC_N1']['VALUE']; ?></span>
					<p class="descr-s"><? echo $arResult['DISPLAY_PROPERTIES']['POC_TT1']['VALUE']; ?></p>
					<p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['POC_TE1']['VALUE']; ?></p>
				</div>
				<!---->
				<div class="apply-box">
					<span><? echo $arResult['DISPLAY_PROPERTIES']['POC_N2']['VALUE']; ?></span>
					<p class="descr-s"><? echo $arResult['DISPLAY_PROPERTIES']['POC_TT2']['VALUE']; ?></p>
					<p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['POC_TE2']['VALUE']; ?></p>
				</div>
				<!---->
				<div class="apply-box">
					<span><? echo $arResult['DISPLAY_PROPERTIES']['POC_N3']['VALUE']; ?></span>
					<p class="descr-s"><? echo $arResult['DISPLAY_PROPERTIES']['POC_TT3']['VALUE']; ?></p>
					<p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['POC_TE3']['VALUE']; ?></p>
				</div>
				<!---->
			</div>
			<!--/-->
		</div>
	</section>
	<!--/apply-->
<? endif; ?>