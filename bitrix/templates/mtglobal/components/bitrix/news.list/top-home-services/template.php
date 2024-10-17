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

<div class="container">
    <div class="mx-n14 d-flex flex-wrap  pb-lg-95 pb-15 ">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            $props = $arItem['PROPERTIES'];
            $url = '#';
            if($props['URL']['VALUE']) $url = $props['URL']['VALUE'];
            //echo '<pre>'; print_r($props['LIST']['VALUE']); echo '</pre>'; die;
            ?>

            <div class="col-lg-6 col-12 px-14 mb-lg-28 mb-15" id="<?= $this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$url;?>" class="w-100 position-relative p-lg-24 p-20 homeCard d-flex flex-column">
                    <div class="wrapText w-100 position-relative colorDark">
                        <div class="w-100 fz-20 mb-lg-24 mb-32 fw-7 colorBlue h2">
                            <?=$arItem['NAME']?>
                        </div>
                        <?if($props['LIST']['VALUE'] && is_array($props['LIST']['VALUE'])):?>
                            <?foreach ($props['LIST']['VALUE'] as $val):?>
                                <div class="w-100 fz-16 mb-16 textBox">
                                    <?=$val;?>
                                </div>
                            <?endforeach;?>
                        <?endif;?>
                    </div>
                    <div class="whiteRightTick mt-auto ml-auto ic position-relative" ></div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>