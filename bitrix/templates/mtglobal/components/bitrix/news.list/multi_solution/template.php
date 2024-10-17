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

$top = $arResult["ITEMS"][0];
unset($arResult["ITEMS"][0]);
?>
<div class="wrapDevelopmentTop w-100 position-relative">
    <div class="container size-xl px-0 developmentPage resetMain-lg">
        <div class="developmentTop ml-auto w-100 position-relative d-flex justify-content-center  align-items-center">
            <img src="<?= $templateFolder ?>/images/developmentTopImg.svg" alt="" class="developmentTopImg imgContain">
            <div class="color-white developmentTopText d-md-block w-100 position-relative d-flex  flex-column justify-content-center align-self-md-center align-self-stretch">
                <div class="wrapText mb-lg-5 mb-24 w-100">
                    <div class="fz-lg-40 fz-29 mb-lg-5 mb-24 fw-7  w-100 h2">
                        <?= $top['NAME'] ?>
                    </div>
                    <div class="fz-24  fw-7 w-100 h5">
                        <?= $top['PREVIEW_TEXT'] ?>
                    </div>
                </div>

                <div class="wrapDevelopmentTopBtn flex-md-column flex-column d-flex justify-content-end align-items-center mx-n2 mt-auto">
                    <button class="page-button btn-modal_two mx-2 developmentTopBtn">
                        Заказать услугу
                    </button>
                    <?if($top['PROPERTIES']['URL']['VALUE'] != "#"):?>
                        <a href="<?= $top['PROPERTIES']['URL']['VALUE'] ?>" class="fz-16 color-white underline textBtn-md d-block mx-2 developmentTopBtn">Подробнее</a>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?$APPLICATION->IncludeFile('/include/breadcrumb.php',Array(),Array('MODE'=>'php'));?>
<div class="container size-xl px-0 developmentContent pb-lg-50 pb-30">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $sort = $arItem['SORT'];
        if ($arItem['SORT'] < 10) $sort = '0' . $arItem['SORT'];
        ?>
        <div class="py-lg-50 py-30 w-100 d-flex flex-lg-nowrap flex-wrap developmentContent-item position-relative"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="developmentContent-text py-lg-6 w-100 flex-column d-flex align-self-stretch align-items-center">
                <div class="wrapText w-100">
                    <div class="bbBlue5 d-flex justify-content-center w-100 mb-15">
                        <div class="countItem color-white mb-15 fz-lg-120 fz-60 ln-1 wrapBox px-15 fw-8  letter-spacing-lg-6 letter-spacing-3 w-100">
                            <?= $sort; ?>
                        </div>
                    </div>
                    <div class="w-100 colorDark d-flex justify-content-center flex-wrap mb-20">
                        <div class="fz-lg-34 fz-26 fw-6 mb-20 w-100 wrapBox px-15">
                            <?= $arItem['NAME']; ?>
                        </div>
                        <div class="fz-18 w-100 wrapBox px-15">
                            <?= $arItem['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                </div>

                <?if($arItem['PROPERTIES']['URL']['VALUE'] != "#"):?>
                    <div class="w-100 px-15 wrapBox wrapBtn mt-auto d-flex justify-content-end mx-auto">
                        <a href="<?= $arItem['PROPERTIES']['URL']['VALUE'] ?>"
                           class="page-button two btn-modal_one d-flex justify-content-center align-items-center">
                            Подробнее
                        </a>
                    </div>
                <?endif;?>
            </div>
            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt=""
                 class="developmentContent-img imgContain align-self-stretch w-100">
        </div>
    <? endforeach; ?>
</div>