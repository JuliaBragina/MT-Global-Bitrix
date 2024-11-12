import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

document.addEventListener("DOMContentLoaded", () => {
    const slidesPerView = {
        reviews: 1,
        about: 5,
        certificates: 4,
    };

    document.querySelectorAll('.swiper').forEach(slider => {
        const uniqueClass = slider.classList[0];
        let containerUniqueClass = null;
        
        let swiperOptions = {
            loop: false,
            spaceBetween: 20,
            slidesPerView: slidesPerView[uniqueClass] || 4,
            navigation: {
                nextEl: slider.querySelector('.swiper-button-next'),
                prevEl: slider.querySelector('.swiper-button-prev'),
            },
            scrollbar: {
                el: slider.querySelector('.swiper-scrollbar'),
                draggable: true,
            },
            breakpoints: {
                1300: {
                    slidesPerView: uniqueClass === 'reviews' ? 1 : (uniqueClass === 'about' && 5) || 4,
                },
                1024: {
                    slidesPerView: uniqueClass === 'reviews' ? 1 : 4,
                },
                768: {
                    slidesPerView: uniqueClass === 'reviews' ? 1 : 3,
                    autoplay: false,
                    loop: false,
                    freeMode: false,
                    speed: 0,
                },
                425: {
                    slidesPerView: 1,
                    autoplay: false,
                    loop: false,
                    freeMode: false,
                },
                360: {
                    slidesPerView: 1,
                    autoplay: false,
                    loop: false,
                    freeMode: false,
                },
                320: {
                    slidesPerView: 1,
                    autoplay: false,
                    loop: false,
                    freeMode: false, 
                },
            },
        };

        if (uniqueClass === 'certificates') {
            swiperOptions = {
                ...swiperOptions,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                speed: 3000,
                freeMode: true,
                loopAdditionalSlides: 1,
                centeredSlides: false,
            };
        }

        const swiperWrapper = slider.querySelector('.swiper-container');
        if (!swiperWrapper) {
            console.error('Не удалось найти .swiper-container в слайдере', slider);
            return;
        }

        const totalSlides = slider.querySelectorAll('.swiper-slide').length;
        const swiper = new Swiper(swiperWrapper, swiperOptions);

        swiper.on('slideChange', () => {
            const nextButton = slider.querySelector('.swiper-button-next');
            const prevButton = slider.querySelector('.swiper-button-prev');

            if (swiper.isBeginning) {
                prevButton.classList.add('swiper-button-disabled');
                prevButton.setAttribute('aria-disabled', 'true');
            } else {
                prevButton.classList.remove('swiper-button-disabled');
                prevButton.setAttribute('aria-disabled', 'false');
            }

            if (swiper.isEnd) {
                nextButton.classList.add('swiper-button-disabled');
                nextButton.setAttribute('aria-disabled', 'true');
            } else {
                nextButton.classList.remove('swiper-button-disabled');
                nextButton.setAttribute('aria-disabled', 'false');
            }
        });
    });
});


/*document.addEventListener('DOMContentLoaded', function () {
    const sliderContainers = document.querySelectorAll('.running-line-container');

    sliderContainers.forEach(item => {
        const slides = Array.from(item.querySelectorAll('.running-line-container__item'));
        const isReverse = item.classList.contains('running-line-container_reverse');
        const slideCount = slides.length;

        if (slideCount === 0) return;

        let slideWidth = slides[0].clientWidth;
        if (slideWidth === 0) return;

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
            item.style.transform = `translateX(0px)`;
            isAnimating = false;
            cancelAnimationFrame(animationFrameId);

            const clonedSlides = item.querySelectorAll('.running-line-container__item');
            if (clonedSlides.length > slideCount) {
                for (let i = slideCount; i < clonedSlides.length; i++) {
                    clonedSlides[i].remove();
                }
            }
            isCloned = false;
        }

        function updateSlider() {
            if (window.innerWidth <= 1024) {
                if (isAnimating) {
                    stopSlider();
                }
            } else {
                if (!isAnimating) {
                    initSlider();
                }
            }
        }

        updateSlider();

        //window.addEventListener('load', updateSlider);
        window.addEventListener('resize', debounce(updateSlider, 100));
    });

    function debounce(func, delay) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), delay);
        };
    }
});



/*document.addEventListener('DOMContentLoaded', function () {
    const sliderContainers = document.querySelectorAll('.running-line-container');

    sliderContainers.forEach(item => {
        const slides = Array.from(item.querySelectorAll('.running-line-container__item'));
        const originalSlideCount = slides.length; // Исходное количество слайдов
        const isReverse = item.classList.contains('running-line-container_reverse');
        let slideWidth = slides[0].clientWidth;
        let position = isReverse ? -slideWidth * originalSlideCount : 0;
        const speed = 0.6;
        let animationFrameId;
        let isAnimating = false;

        function cloneAndAppendSlides() {
            const slidesToClone = isReverse ? [...slides].reverse() : slides;
            slidesToClone.forEach(slide => {
                const clone = slide.cloneNode(true);
                if (isReverse) {
                    item.prepend(clone);
                } else {
                    item.appendChild(clone);
                }
            });
        }

        function animateSlides() {
            position += isReverse ? speed : -speed;
            item.style.transform = `translateX(${position}px)`;

            // Проверка, если последний слайд полностью скрыт за экраном
            if (!isReverse && position <= -slideWidth * originalSlideCount) {
                resetSlides();
            } else if (isReverse && position >= 0) {
                resetSlides();
            }

            animationFrameId = requestAnimationFrame(animateSlides);
        }

        function resetSlides() {
            // Удаляем оригинальные слайды, чтобы клоны стали новыми оригинальными
            for (let i = 0; i < originalSlideCount; i++) {
                item.removeChild(item.firstChild);
            }

            // Сброс позиции так, чтобы клоны стали на место оригинальных слайдов
            position = isReverse ? -slideWidth * originalSlideCount : 0;
            item.style.transform = `translateX(${position}px)`;
        }

        function initSlider() {
            cloneAndAppendSlides(); // Клонируем и добавляем слайды
            isAnimating = true;
            animationFrameId = requestAnimationFrame(animateSlides); // Запуск анимации
        }

        function stopSlider() {
            cancelAnimationFrame(animationFrameId);
            isAnimating = false;
        }

        function updateSlider() {
            if (window.innerWidth <= 1024) {
                if (isAnimating) {
                    stopSlider();
                }
            } else {
                if (!isAnimating) {
                    initSlider();
                }
            }
        }

        updateSlider(); // Инициализация слайдера в зависимости от ширины экрана
        window.addEventListener('resize', updateSlider);
    });
});
*/