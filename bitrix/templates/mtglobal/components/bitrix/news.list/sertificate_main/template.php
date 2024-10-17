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
/*echo "<pre>";
print_r($arResult["ITEMS"]);
echo "</pre>";*/
?>
<?php if( is_array($arResult["ITEMS"]) && count($arResult["ITEMS"]) > 0):?>

<div class="container">
    <div class="sertificate__title">Отзывы

        <div class="sertificate__swiper-wrap-button ">
            <div class="sertificate__swiper-button-prev" >
                <svg class="slider-arrow licensed-arrow_prev" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg" tabIndex="0" role="button" aria-label="Previous slide">
                    <circle cx="22.5" cy="22.5" r="22.5"></circle>
                    <path d="M30 22H16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M23 15L16 22L23 29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="sertificate__swiper-button-next" >
                <svg class="slider-arrow licensed-arrow_next" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" tabIndex="0" role="button" aria-label="Next slide">
                    <circle cx="25" cy="25" r="25"></circle>
                    <path d="M18 25H32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M25 18L32 25L25 32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="swiper sample-slider">
        <div class="swiper-wrapper">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="swiper-slide">
                <div class="wrapp__sertificate">
                    <div class="sertificate__slide_img">
                        <? if( is_array($arItem['PREVIEW_PICTURE']) ):
                            $resize = \CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>239, 'height'=>338), BX_RESIZE_IMAGE_PROPORTIONAL);

                            ?>
                        <a href="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" data-entity="open-img">
                            <img src="<?=$resize['src']?>"></a>
                            <?// if( is_array($arItem['PROPERTIES']['FULL_SERT']) && (int)$arItem['PROPERTIES']['FULL_SERT']['VALUE'] > 0 ):?>
                            <a href="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"  class="sertificate__link_full">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#ECF7FF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.2327 21.8602L17.5207 15.9194C18.9894 14.1735 19.794 11.9768 19.794 9.68999C19.794 4.34701 15.447 0 10.1041 0C4.76108 0 0.414062 4.34701 0.414062 9.68999C0.414062 15.033 4.76108 19.38 10.1041 19.38C12.1099 19.38 14.0213 18.775 15.6556 17.6265L21.411 23.6124C21.6516 23.8622 21.9751 24 22.3219 24C22.6501 24 22.9614 23.8749 23.1978 23.6474C23.7 23.1641 23.716 22.3628 23.2327 21.8602ZM10.1041 2.52782C14.0534 2.52782 17.2662 5.74069 17.2662 9.68999C17.2662 13.6393 14.0534 16.8522 10.1041 16.8522C6.15475 16.8522 2.94189 13.6393 2.94189 9.68999C2.94189 5.74069 6.15475 2.52782 10.1041 2.52782Z" fill="#accce3"/>
                                </svg>
                            </a>
                            <? //endif;?>


                        <? endif;?>
                    </div>
                    <div class="sertificate__slide_name">
                        <?=$arItem['~NAME']?>
                    </div>
                    <div class="sertificate__slide_text">
                        <?=$arItem['~PREVIEW_TEXT']?>
                    </div>
                </div>

            </div>
            <? endforeach;?>

        </div>
        <div class="sertificate__swiper-pagination"></div>





    </div>

    <div class="border__2_blue"></div>
</div>


<script>
    const swiperSertificate = new Swiper('.sample-slider', {
        slidesPerView:4,　　　　　　　　　　//column count of shown slide
        spaceBetween: 14,　　　　　　　　　　//gap of slides

        pagination: {                       //pagination(dots)
            el: '.sertificate__swiper-pagination',
        },
        navigation: {                       //navigation(arrows)
            nextEl: ".sertificate__swiper-button-next",
            prevEl: ".sertificate__swiper-button-prev",
        },
        loop: true
    });

    $(document).ready(function() {
        $('.sertificate__link_full').magnificPopup({type:'image'});
        $('[data-entity="open-img"]').magnificPopup({type:'image'});
    });

</script>
<?php endif;?>

