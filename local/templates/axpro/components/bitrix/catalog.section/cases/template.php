<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;
$this->setFrameMode(true);

$elementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$elementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$elementDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<section class="main__section cases-page">
        <div class="main__container">
          <h1 class="main__heading">
				Кейсы
			</h1>
          <p class="main__description">
            Как мир становится безопаснее с AX PRO
          </p>

          <div class="cases-page-slider">
            <div class="swiper" id="casesPageSwiper">
              <div class="swiper-wrapper">
              <?foreach ($arResult['ITEMS'] as $item):
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="swiper-slide cases-page-slide" id="<?=$this->GetEditAreaId($item['ID']);?>" data-case-id="<?=$item['ID'];?>">
                  <img
                    class="cases-page-slide__img"
                    src="<?=$item['DETAIL_PICTURE']['SRC'];?>"
                    alt="case1"
                  />
                  <p class="cases-page-slide__title">
                    <?=$item['NAME'];?>
                  </p>
                </div>
              <?endforeach;?>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>

          <!-- <nav class="page-navigation">
            <button
              class="page-navigation__button page-navigation__button_prev disabled"
            ></button>
            <ul>
              <li class="active">1</li>
              <li>2</li>
              <li>3</li>
            </ul>
            <button
              class="page-navigation__button page-navigation__button_next"
            ></button>
          </nav> -->
          <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
        </div>
      </section>