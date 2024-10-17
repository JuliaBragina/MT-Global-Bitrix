<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<section class="first-screen">
      <div class="container">
        <div class="swiper">
          <div class="swiper-wrapper">
          <?foreach ($arResult['ITEMS'] as $item):
            	$this->AddEditAction($item['ID'], $item['EDIT_LINK'], $strSectionEdit);
              $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
            ?>
            <div class="swiper-slide" id="<?=$this->GetEditAreaId($item['ID']);?>">
              <div class="first-screen__banner">
                <img src="<?=$item['DETAIL_PICTURE']['SRC'];?>" alt="banner" />
              </div>
              <h1 class="first-screen__title"><?=$item['NAME'];?></h1>
              <p class="first-screen__description">
              <?=$item['PREVIEW_TEXT'];?>
              </p>
              <div class="first-screen__button-wrapper">
                <button class="button button_large request-offer-button">
                <?=$item['BANNERT_TEXT_MAIN'] ? $item['BANNERT_TEXT_MAIN'] : "Защитить дом" ;?>
                </button>
              </div>
            </div>
           <?endforeach;?>
          </div>

          <?if(count($arResult['ITEMS']) > 1):?>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <?endif;?>
        </div>

        <div class="swiper-pagination first-screen-pagination"></div>
      </div>
    </section>
<!-- component-end -->