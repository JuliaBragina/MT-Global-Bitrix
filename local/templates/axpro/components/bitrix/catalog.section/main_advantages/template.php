<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
$elementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$elementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$elementDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<section class="main__section benefits">
        <div class="main__container">
          <div class="h1-title main__heading">Преимущества</div>
          <ul class="benefits__list">
          <?foreach ($arResult['ITEMS'] as $item)
			    {
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], $elementEdit);
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
            ?>
            <li class="benefits__list-item benefit" id="<?=$this->GetEditAreaId($item['ID']);?>">
              <div class="benefit__icon">
                <img src="<?=$item['IMAGE_SVG']?>" alt="IvaaS" />
              </div>
              <div class="benefit__info">
                <h3 class="benefit__title"><?=$item['NAME'];?></h3>
                <p class="benefit__description">
                  <?=$item['PREVIEW_TEXT']?>
                </p>
              </div>
            </li>
           <?}?>
          </ul>
        </div>
      </section>


