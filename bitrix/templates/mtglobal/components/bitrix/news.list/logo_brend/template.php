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
    <section style="padding-bottom: 42px; background: #ffffff">
        <div class="container">
            <div class="clients-slider__wrap swiper-container" style="padding: 0px 0px;">
                <div class="swiper-wrapper">
                    <? foreach ($arResult["ITEMS"] as $item): ?>
                        <? if( is_array($item['PREVIEW_PICTURE']) ):?>
                            <div class="swiper-slide">
                                <div><img loading="lazy" src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="logo"></div>
                            </div>
                     <? endif;?>
                    <? endforeach;?>
                </div>
                <div class="slider-arrows" style="top: 0px;display:none">
                    <svg class="slider-arrow clients-arrow_prev" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg" tabIndex="0" role="button" aria-label="Previous slide">
                        <circle cx="22.5" cy="22.5" r="22.5"></circle>
                        <path d="M30 22H16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M23 15L16 22L23 29" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg class="slider-arrow clients-arrow_next" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" tabIndex="0" role="button" aria-label="Next slide">
                        <circle cx="25" cy="25" r="25"></circle>
                        <path d="M18 25H32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M25 18L32 25L25 32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <style>
        .clients-slider__wrap .swiper-slide div{display: flex;justify-content: center;align-items: center;padding: 0px 30px;}
        .clients-slider__wrap .swiper-slide img {height: 70px;width: 100%;object-fit: contain;object-position: center;}
    </style>

    <script>
        // $('.clients-slider__wrap').slick({});
        const swiper = new Swiper('.clients-slider__wrap', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 7,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            // Navigation arrows
            navigation: {
                nextEl: '.clients-arrow_next',
                prevEl: '.clients-arrow_prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                },
                // when window width is >= 991px
                991: {
                    slidesPerView: 4,
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 7,
                }
            },

        });

        $(document).on('click', '.clients-slider__wrap', function (){
            swiper.slideNext( 200 , false );
        })

    </script>
<?php endif;?>

