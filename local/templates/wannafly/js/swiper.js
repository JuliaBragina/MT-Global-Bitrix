import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

document.addEventListener("DOMContentLoaded", () => {
    const slidesPerView = {
        reviews: 1,
        about: 5,
    };

    const dragSize = 400;

    document.querySelectorAll('.swiper').forEach(slider => {
        const uniqueClass = slider.classList[0];

        const swiperWrapper = slider.querySelector('.swiper-container');
        if (!swiperWrapper) {
            console.error('Не удалось найти .swiper-container в слайдере', slider);
            return;
        }

        let swiperOptions = {
            loop: true,
            spaceBetween: 20,
            slidesPerView: 1,
        };

        if (uniqueClass === 'grid-cards-running-line__line' || uniqueClass === 'grid-cards-running-line__lineReverse') {
            swiperOptions = {
                loop: true,
                breakpoints: {
                    1300: {
                        slidesPerView: 7.3,
                    },
                    1200: {
                        slidesPerView: 5.3,
                    },
                    1100: {
                        slidesPerView: 5.3,
                    }
                },
                speed: 3000,
                centeredSlides: true,
                direction: 'horizontal',
                autoplay: {
                    delay: 0,
                    reverseDirection: false,
                    disableOnInteraction: false,
                },
            };
        
            if (uniqueClass === 'grid-cards-running-line__lineReverse') {
                swiperOptions = {
                    ...swiperOptions,
                    autoplay: {
                        delay: 0,
                        reverseDirection: true,
                        disableOnInteraction: false,
                    },
                }
            }
        } else {
            const nextButton = slider.querySelector('.swiper-button-next');
            const prevButton = slider.querySelector('.swiper-button-prev');
            const scrollbarEl = slider.querySelector('.swiper-scrollbar');
            swiperOptions = {
                loop: true,
                navigation: {
                    nextEl: nextButton,
                    prevEl: prevButton,
                },
                spaceBetween: 20,
                slidesPerView: slidesPerView[uniqueClass] || 4,
                breakpoints: {
                    1300: {
                        slidesPerView: uniqueClass === 'reviews' ? 1 : (uniqueClass === 'about' && 5) || 4,
                    },
                    1024: {
                        slidesPerView: uniqueClass === 'reviews' ? 1 : (uniqueClass === 'about' && 3) || 4,
                    },
                    768: {
                        slidesPerView: uniqueClass === 'reviews' ? 1 : 3,
                    },
                    425: {
                        slidesPerView: 1,
                    },
                    360: {
                        slidesPerView: 1,
                    },
                    320: {
                        slidesPerView: 1,
                    },
                },
                scrollbar: {
                    el: scrollbarEl,
                    draggable: true,
                    dragSize: dragSize
                }
            };
        }

        const swiper = new Swiper(swiperWrapper, swiperOptions);
    });
});
