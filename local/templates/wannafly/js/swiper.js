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
        

        const swiper = new Swiper(swiperWrapper, swiperOptions);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const sliderContainers = document.querySelectorAll('.running-line-container');

    sliderContainers.forEach(item => {
        const slides = Array.from(item.querySelectorAll('.running-line-container__item'));
        const isReverse = item.classList.contains('running-line-container_reverse');
        const isGrid = item.classList.contains('running-line-container_grid');
        const slideCount = slides.length;

        if (slideCount === 0) return;

        let slideWidth = slides[0].clientWidth;
        let position = isReverse ? -slideWidth * slideCount : 0;
        let isCloned = false;
        const speed = 0.6;
        let animationFrameId;
        let isAnimating = false;

        function cloneSlides() {
            if (!isCloned) {
                const slidesToClone = isReverse ? [...slides].reverse() : slides;

                slidesToClone.forEach(slide => {
                    const clone = slide.cloneNode(true);
                    if (isReverse) {
                        item.prepend(clone);
                    } else {
                        item.appendChild(clone);
                    }
                });
                isCloned = true;
            }
        }

        function deleteClones() {
            if (isReverse) {
                if (position >= 0) {
                    while (item.firstChild && item.firstChild.getBoundingClientRect().right < 0) {
                        item.removeChild(item.firstChild);
                    }
                    position = -slideWidth * slideCount; 
                }
            } else {
                if (position <= -slideWidth * slideCount) {
                    while (item.lastChild && item.lastChild.getBoundingClientRect().left > window.innerWidth) {
                        item.removeChild(item.lastChild);
                    }
                    position = 0; 
                }
            }
        }

        function animateSlides() {
            position += isReverse ? speed : -speed;
            deleteClones();
            item.style.transform = `translateX(${position}px)`;
            animationFrameId = requestAnimationFrame(animateSlides);
        }

        function initSlider() {
            cloneSlides(); 
            isAnimating = true;
            animationFrameId = requestAnimationFrame(animateSlides);
        }

        function stopSlider() {
            let position = isReverse ? -slideWidth * slideCount : 0;
            cancelAnimationFrame(animationFrameId);
            item.style.transform = `translateX(${position}px)`;

            isAnimating = false;
        }

        function updateSlider() {
            if (window.innerWidth <= 1024 && isGrid && isAnimating) {
                stopSlider();
            } else if (!isAnimating) {
                initSlider();
            }
        }

        updateSlider();

        window.addEventListener('resize', updateSlider);
    });
});
