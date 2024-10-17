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

	<section class="main__section catalog">
        <div class="main__container">
          <h1 class="main__heading"><?=$APPLICATION->ShowTitle(false);?></h1>
          <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog_axpro", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "57",
		"SECTION_ID" => "0",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_URL" => $arParams["SECTION_URL"],
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => $arParams["SECTION_USER_FIELDS"],
			2 => "",
		),
		"COMPONENT_TEMPLATE" => "catalog_axpro",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "sectionsFilter",
		"CACHE_GROUPS" => "Y",
		"CACHE_FILTER" => "N"
	),
	false
);?>

          <div class="catalog__wrapper">
            <div class="catalog__filter hidden">
              <h2 class="catalog__filter-title catalog__filter-title_catalog">
                <span>Каталог</span>
                <button class="catalog__filter-menu-toggler active"></button>
              </h2>

              <button class="catalog__filter-button_close"></button>

              <div class="catalog__filter-menu">

				<!-- Фильтр каталога -->
				<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog_axpro_filter", Array(
					"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
					"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
					"SECTION_ID"	=>	"0",
					"COUNT_ELEMENTS"	=>	"Y",
					"TOP_DEPTH"	=>	"2",
					"SECTION_URL"	=>	$arParams["SECTION_URL"],
					"CACHE_TYPE"	=>	"N",
					"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
					"DISPLAY_PANEL"	=>	"N",
					"ADD_SECTIONS_CHAIN"	=>	$arParams["ADD_SECTIONS_CHAIN"],
					"SECTION_USER_FIELDS"	=>	$arParams["SECTION_USER_FIELDS"],
					),
					false
				);?>
              </div>

              <div class="catalog__filter-selects">
                <div class="itc-select" id="moduleSelect"></div>

                <div class="itc-select" id="gsmSelect"></div>

                <div class="itc-select" id="frequencySelect"></div>

                <div class="itc-select" id="supplySelect"></div>
              </div>

              <h4 class="catalog__filter-title">Цена</h4>

			  <?
			  $starValueFilterPriceMin = $arParams['FILTER_PRICE_CATALOG_AXPRO'][0];
			  $starValueFilterPriceMax = $arParams['FILTER_PRICE_CATALOG_AXPRO'][count($arParams['FILTER_PRICE_CATALOG_AXPRO']) - 1];
			  if(isset($_GET['minPrice']) && isset($_GET['maxPrice']))
			  {
				$starValueFilterPriceMin = $_GET['minPrice'];
				$starValueFilterPriceMax = $_GET['maxPrice'];
			  }?>
              <div class="double-range-slider">
                <input
                  type="range"
                  min="<?=$arParams['FILTER_PRICE_CATALOG_AXPRO'][0];?>"
                  max="<?=$arParams['FILTER_PRICE_CATALOG_AXPRO'][count($arParams['FILTER_PRICE_CATALOG_AXPRO']) - 1];?>"
                  value="<?=$starValueFilterPriceMin?>"
                  step="100"
                  id="lower"
                />
                <input
                  type="range"
                  min="<?=$arParams['FILTER_PRICE_CATALOG_AXPRO'][0];?>"
                  max="<?=$arParams['FILTER_PRICE_CATALOG_AXPRO'][count($arParams['FILTER_PRICE_CATALOG_AXPRO']) - 1];?>"
                  value="<?=$starValueFilterPriceMax;?>"
                  step="100"
                  id="upper"
                />
              </div>

              <div class="catalog__filter-price">
                <input
                  type="number"
                  class="catalog__filter-price-label"
                  id="lowerLabel"
                  value="<?=$starValueFilterPriceMin;?>"
                />
                       <input
                  type="number"
                  class="catalog__filter-price-label"
                  id="upperLabel"
                  value="<?=$starValueFilterPriceMax;?>"
                />
              </div>

              <button class="catalog__filter-button_reset">
                Сбросить фильтры
              </button>
            </div>

            <div class="catalog__container">
              <div class="catalog__sorting">
                <button class="catalog__filter-toggler">Фильтр</button>

                <h5 class="catalog__sorting-title">Сортировать:</h5>

                <div class="catalog__sorting-container">
                  <div class="catalog__sorting-item">
                    <div class="itc-select" id="priceSelect">
						<!-- <ul class="itc-select__options">
							<li class="itc-select__option itc-select__option_selected" data-select="option" data-value="asc" data-index="0">Дешевые</li>
							<li class="itc-select__option" data-select="option" data-value="desc" data-index="1">Дорогие</li>
						</ul> -->
					</div>
                  </div>
                  <div class="catalog__sorting-item">
                    <div class="itc-select" id="ratingSelect"></div>
                  </div>
                  <div class="catalog__sorting-item">
                    <div class="itc-select" id="nameSelect"></div>
                  </div>
                </div>
              </div>

              <div class="catalog__list">
			  <?foreach($arResult["ITEMS"] as $cell=>$arElement):
				$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="catalog__card catalog-list-item" id="<?=$this->GetEditAreaId($arElement['ID']);?>" data-product-id='<?=$arElement['ID'];?>' data-url='<?=$APPLICATION->GetCurPage();?>'>
					<?if($arElement['DETAIL_PICTURE']['SRC']):?>
                  <img
                    class="catalog-list-item__image"
                    src="<?=$arElement['DETAIL_PICTURE']['SRC']?>"
                    alt="catalog-list-item"
                  />
				  <?endif;?>
                  <div class="catalog-list-item__info">
                    <span class="catalog-list-item__title">
						<?=$arElement['NAME'];?>
                    </span>
					<p></p>
<?/*if($arElement['PROPERTIES']['SIGNATURE']['VALUE']):?>
                    <p class="catalog-list-item__description">
                      <?=$arElement['PROPERTIES']['SIGNATURE']['VALUE'];?>
                    </p>
<?endif;*/?>
                    <div class="catalog-list-item__price" style="font-weight: 100;"><?=number_format($arElement['PRICES']['BASE_PRICE']['VALUE'], 0, '', ' ');?> р./шт</div>
                  </div>
                </div>

				<?endforeach;?>					
            </div>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
          </div>
        </div>
      </section>

      <section class="main__section catalog__text">
		<?if($descriptionIblock = CIBlock::GetArrayByID($arResult['IBLOCK_ID'], "DESCRIPTION")):?>
        <div class="main__container">
          <?=$descriptionIblock;?>
        </div>
		<?endif;?>
      </section>

      <!-- Кейсы -->
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main_cases", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "60",
		"IBLOCK_TYPE" => "main_catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "3",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"PROPERTY_CODE" => array(
			0 => "BANNERT_TEXT_MAIN",
		),
		"COMPONENT_TEMPLATE" => "main_cases"
	),
	false
);?>


</div>
