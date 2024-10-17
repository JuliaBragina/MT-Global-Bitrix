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

<!--service-->
<section class="section-single service">
    <div class="container">
        <!--/-->
        <div class="solution-top">
            <h1><?=$arResult['SEO_H1']?></h1>
            <button class="page-button btn-modal_two" onclick="ym(53077474,'reachGoal','get-the-service'); return true;"  ><?=GetMessage("ORDER");?></button>
            <?if(!empty($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])):?>
                <div class="btn-modal_eight" style="display: inline-block;cursor: pointer;">Подробнее</div>
            <?endif;?>
        </div>
        <!--/-->
        <ul class="solution-bottom" data-simplebar>
            <li>
                <span><?=GetMessage("UP");?><b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM1']['VALUE'];?></b></span>
                <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM1']['DESCRIPTION'];?></p>
            </li>
            <li>
                <span><?=GetMessage("UP");?><b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM2']['VALUE'];?></b></span>
                <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM2']['DESCRIPTION'];?></p>
            </li>
            <li>
                <span><?=GetMessage("UP");?><b><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM3']['VALUE'];?></b></span>
                <p class="descr-xm"><? echo $arResult['DISPLAY_PROPERTIES']['BLOCK1_ITEM3']['DESCRIPTION'];?></p>
            </li>
        </ul>
        <!--/-->
        <div class="service-bgr">
            <?=htmlspecialcharsBack($arResult["PROPERTIES"]["BLOCK1_IMG"]["VALUE"]["TEXT"])?>
        </div>
        <!--/-->
    </div>
</section>
<!--/service-->

<div class="modal-box modal-box_eight">
    <svg class="modal-close modal-close_eight" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <div class="modal_box_eight">
        <?=htmlspecialcharsBack($arResult['DISPLAY_PROPERTIES']['TEXT_MOREDETAILS']['VALUE']['TEXT'])?>
    </div>
</div>
<div class="modal-bgr modal-bgr_eight"></div>
