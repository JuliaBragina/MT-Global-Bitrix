class ServiceSlider {
    constructor({
                    servicesData,
                    currentCounter,
                    maxCounter,
                    currentTitle,
                    serviceImage,
                    serviceParagraph,
                    prevButton,
                    nextButton,
                    linkSelector
                }) {
        this.servicesData = servicesData;
        this.currentIndex = 0;

        // DOM элементы
        this.currentCounter = document.querySelector(currentCounter);
        this.maxCounter = document.querySelector(maxCounter);
        this.currentTitle = document.querySelector(currentTitle);
        this.serviceImage = document.querySelector(serviceImage);
        this.serviceParagraph = document.querySelector(serviceParagraph);
        this.prevButton = document.querySelector(prevButton);
        this.nextButton = document.querySelector(nextButton);
        this.links = document.querySelectorAll(linkSelector); // Ссылки на услуги

        // Инициализация
        this.init();
    }

    init() {
        this.updateServiceContent(0);
        this.maxCounter.textContent = this.servicesData.length.toString().padStart(2, '0');
        this.addEventListeners();
    }

    // Обновление контента услуги
    updateServiceContent(index) {
        const service = this.servicesData[index];
        this.currentCounter.textContent = (index + 1).toString().padStart(2, '0');
        this.currentTitle.textContent = service.NAME;
        this.serviceImage.src = service.PREVIEW_PICTURE.SRC;
        this.serviceImage.alt = service.NAME;
        this.serviceParagraph.textContent = service.PROPERTIES.DESCRIPTION.VALUE.TEXT || '';

        this.updateNavigationButtons();
        this.updateActiveLink();
    }

    // Обновление состояния кнопок навигации
    updateNavigationButtons() {
        this.prevButton.style.opacity = this.currentIndex === 0 ? '0.5' : '1';
        this.nextButton.style.opacity = this.currentIndex === this.servicesData.length - 1 ? '0.5' : '1';

        this.prevButton.disabled = this.currentIndex === 0;
        this.nextButton.disabled = this.currentIndex === this.servicesData.length - 1;
    }

    // Обновление класса active для текущего слайда
    updateActiveLink() {
        this.links.forEach((link, index) => {
            if (index === this.currentIndex) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Смена услуги при навигации
    changeService(direction) {
        if (direction === -1 && this.currentIndex > 0) {
            this.currentIndex--;
        } else if (direction === 1 && this.currentIndex < this.servicesData.length - 1) {
            this.currentIndex++;
        }
        this.updateServiceContent(this.currentIndex);
    }

    // Добавление обработчиков событий
    addEventListeners() {
        this.prevButton.addEventListener('click', () => {
            this.changeService(-1);
        });

        this.nextButton.addEventListener('click', () => {
            this.changeService(1);
        });

        this.links.forEach((link, index) => {
            link.addEventListener('click', () => {
                this.currentIndex = index;
                this.updateServiceContent(this.currentIndex);
            });
        });
    }
}

