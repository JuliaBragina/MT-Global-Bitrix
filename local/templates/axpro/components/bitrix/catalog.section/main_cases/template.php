<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
$elementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$elementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$elementDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<section class="main__section cases">
        <div class="main__container">
          <span class="main__heading" style="display: block;" >Кейсы</span>

          <p class="main__description">
            Как мир становится безопаснее с AX PRO
          </p>

          <div class="cases__slider">
            <div class="swiper">
              <div class="swiper-wrapper">
              <?foreach ($arResult['ITEMS'] as $item):
                 $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
                 $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="swiper-slide cases__slide" id="<?=$this->GetEditAreaId($item['ID']);?>" data-case-id="<?=$item['ID'];?>">
                  <img src="<?=$item['DETAIL_PICTURE']['SRC'];?>" alt="case" />
                  <div class="cases__slide-title" id="<?=$item['ID'];?>">
                    <?=$item['NAME'];?>
                  </div>
                </div>
              <?endforeach;?>
              </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="cases__button-prev"></div>
            <div class="cases__button-next"></div>
          </div>
        </div>
      </section>

    

