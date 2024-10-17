<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
$elementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$elementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$elementDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<section class="main__section info">
        <div class="main__container">
        <?foreach ($arResult['ITEMS'] as $key => $item)
        {

        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], $elementEdit);
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
      
				?>
        <?if($key == 0):?>
          <div class="info__block info__img info__img_integration" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <img src="<?=$item['DETAIL_PICTURE']['SRC'];?>" alt="" />
          </div>

          <div class="info__block info__text info__text_integration" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <h3 class="info__title"><?=$item['NAME'];?></h3>
            <p class="info__description">
            <?=$item['PREVIEW_TEXT'];?>
            </p>
          </div>
          <?else:?>
          <div class="info__block info__text info__text_control" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <h3 class="info__title"><?=$item['NAME'];?></h3>
            <p class="info__description">
            <?=$item['PREVIEW_TEXT'];?>
            </p>
          </div>

          <div class="info__block info__img info__img_control" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <img src="<?=$item['DETAIL_PICTURE']['SRC'];?>" alt="" />
          </div>
          <?endif;?>
          <?}?>
        </div>
        <div class="info__button-wrapper">
          <button class="button button_large request-offer-button">
            Оставить заявку
          </button>
        </div>
      </section>
