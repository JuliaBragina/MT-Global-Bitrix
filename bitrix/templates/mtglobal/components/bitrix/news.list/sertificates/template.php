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
use LocalLib\Helpers\ResizeImage;
?>
<div class="swiper-container certificatesSlider mr-lg-0 mr-n15 overflow-visible ">
    <div class="swiper-wrapper">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));

    ?>
	<a class="swiper-slide certificatesSlider-item bgBlue3 p-24"
        id="<?=$this->GetEditAreaId($arItem['ID'])?>"
        <?if ($arItem['DISPLAY_PROPERTIES']['FILE_PDF'] || $arItem["DETAIL_PICTURE"]) :?>
            href="<?
            if ($arItem['DISPLAY_PROPERTIES']['FILE_PDF']){
               echo $arItem['DISPLAY_PROPERTIES']['FILE_PDF']['FILE_VALUE']['SRC'];
            } else {
               echo $arItem["DETAIL_PICTURE"]["SRC"];
            }
            ?>"
            data-fancybox="gallery"
        <?endif;?>
        >
        <?if ($arItem['DISPLAY_PROPERTIES']['FILE_PDF'] || $arItem["DETAIL_PICTURE"]) :?>
            <div class="wrapImg w-100 position-relative mb-24 ">
                <?
                if ($arItem['DISPLAY_PROPERTIES']['FILE_PDF']){ ?>
                    <img
                            src="/upload/icon-pdf.png"
                            width="239"
                            height="338"
                            alt="<?echo $arItem["NAME"]?>"
                            class="absFull"
                    >
                <? } elseif ($arItem["DETAIL_PICTURE"]) {
                    $img = ResizeImage::getResizeImage($arItem["DETAIL_PICTURE"]['ID'], 239, 338, 90);?>
                    <img
                            src="<?=$img['src']?>"
                            width="<?=$img['width']?>"
                            height="<?=$img['height']?>"
                            alt="<?echo $arItem["NAME"]?>"
                            class="absFull"
                    >
                <? } ?>
                <?if ($arItem["DETAIL_PICTURE"]) :?>
                    <span class="sertificate__link_full">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#ECF7FF" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2327 21.8602L17.5207 15.9194C18.9894 14.1735 19.794 11.9768 19.794 9.68999C19.794 4.34701 15.447 0 10.1041 0C4.76108 0 0.414062 4.34701 0.414062 9.68999C0.414062 15.033 4.76108 19.38 10.1041 19.38C12.1099 19.38 14.0213 18.775 15.6556 17.6265L21.411 23.6124C21.6516 23.8622 21.9751 24 22.3219 24C22.6501 24 22.9614 23.8749 23.1978 23.6474C23.7 23.1641 23.716 22.3628 23.2327 21.8602ZM10.1041 2.52782C14.0534 2.52782 17.2662 5.74069 17.2662 9.68999C17.2662 13.6393 14.0534 16.8522 10.1041 16.8522C6.15475 16.8522 2.94189 13.6393 2.94189 9.68999C2.94189 5.74069 6.15475 2.52782 10.1041 2.52782Z" fill="#accce3"></path>
                        </svg>
                    </span>
                <?endif;?>
            </div>
        <?endif;?>
        <div class="w-100 fw-6 mb-12 colorDark">
            <? echo $arItem["NAME"]?>
        </div>
        <div class="w-100 fz-14 fw-3 ff-calibri colorDark">
            <?
            $anons = $arItem["DETAIL_TEXT"]; //определяем переменную $string
            $anons = strip_tags($anons); //очищаем от лишних тегов
            $anons = substr($anons, 0, 25); //обрезаем под нужно число символов
            echo $anons;
            ?>
        </div>

		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
	</a>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>
<div class="slider-arrows">
    <svg class="slider-arrow_two certificatesSlider_prev" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg" tabIndex="0" role="button" aria-label="Previous slide">
        <circle cx="22.6348" cy="22.5" r="22"></circle>
        <path d="M30.1348 23H16.1348" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M23.1348 16L16.1348 23L23.1348 30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
    <svg class="slider-arrow_two certificatesSlider_next" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg" tabIndex="0" role="button" aria-label="Next slide">
        <circle cx="23.1289" cy="22.5" r="22" transform="rotate(-180 23.1289 22.5)"></circle>
        <path d="M15.6289 22L29.6289 22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M22.6289 29L29.6289 22L22.6289 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
</div>
<div class="slider-progresbar certificates-pagination swiper-pagination-progressbar"></div>
