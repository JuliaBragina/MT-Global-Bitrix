import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

document.addEventListener("DOMContentLoaded", () => {
    const slidesPerView = {
        reviews: 1,
        about: 5,
    };

    document.querySelectorAll('.swiper').forEach(slider => {
        const uniqueClass = slider.classList[0];
        let containerUniqueClass = null;

        if (uniqueClass === 'about') {
            containerUniqueClass = slider.querySelector('.about__sliderContainer');
        }
        
        const swiperWrapper = slider.querySelector('.swiper-container');
        console.log(swiperWrapper.clientWidth);
        if (!swiperWrapper) {
            console.error('Не удалось найти .swiper-container в слайдере', slider);
            return;
        }

        const totalSlides = slider.querySelectorAll('.swiper-slide').length;
        const initialSlidesPerView = slidesPerView[uniqueClass] || 4;

        let swiperOptions = {
            loop: true,
            spaceBetween: 20,
            slidesPerView: initialSlidesPerView,
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
            slidesPerView: initialSlidesPerView,
            breakpoints: {
                1300: {
                    slidesPerView: uniqueClass === 'reviews' ? 1 : (uniqueClass === 'about' && containerUniqueClass && 5) || 4,
                },
                1024: {
                    slidesPerView: uniqueClass === 'reviews' ? 1 : 4,
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
                dragSize: ((swiperWrapper.clientWidth / initialSlidesPerView) + 20) + ((swiperWrapper.clientWidth / initialSlidesPerView) * (totalSlides - initialSlidesPerView + 1)),
            }
        };
        
        const swiper = new Swiper(swiperWrapper, swiperOptions);
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