document.addEventListener('DOMContentLoaded', function () {
    // Функция для инициализации валидации формы
    function initFormValidation(form) {
        const nameInputs = form.querySelectorAll('input[type="text"].inputtext#popup__name');
        const phoneInputs = form.querySelectorAll('input[type="text"].inputtext#popup__phone');
        const emailInputs = form.querySelectorAll('input[type="text"].inputtext#popup__email');
        const checkboxInputs = form.querySelectorAll('input[type="checkbox"]');
        const submitButtons = form.querySelectorAll('input[type="submit"].btn.btn-primary.popup__button');

        phoneInputs.forEach(input => {
            new Cleave(input, {
                phone: true,
                phoneRegionCode: 'RU',
                delimiter: ' ',
                prefix: '+7',
                blocks: [1, 3, 3, 2, 2]
            });

            input.addEventListener('input', () => {
                validatePhone(input);
                toggleSubmitButtons();
            });

            input.addEventListener('blur', () => {
                validatePhone(input);
                toggleSubmitButtons();
            });
        });

        emailInputs.forEach(emailInput => {
            emailInput.addEventListener('input', () => {
                validateEmail(emailInput);
                toggleSubmitButtons();
            });
            emailInput.addEventListener('blur', () => {
                validateEmail(emailInput);
                toggleSubmitButtons();
            });
        });

        nameInputs.forEach(nameInput => {
            nameInput.addEventListener('input', () => {
                validateName(nameInput);
                toggleSubmitButtons();
            });
            nameInput.addEventListener('blur', () => {
                validateName(nameInput);
                toggleSubmitButtons();
            });
        });

        checkboxInputs.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                validateCheckbox(checkbox);
                toggleSubmitButtons();
            });
        });

        function validatePhone(input) {
            const errorSpan = input.nextElementSibling;
            const form = input.closest('form');

            if (!errorSpan) {
                console.error('Ошибка: элемент для отображения ошибки не найден.');
                return;
            }

            if (input.value.length === 2) {
                input.classList.remove('input-error');
                errorSpan.textContent = '';
                errorSpan.classList.remove('popup__error_visible');

                if (form && form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.add('popup__error_color_white');
                }

                return false;
            } else if (input.value.length < 16) {
                input.classList.add('input-error');
                errorSpan.textContent = 'Введите номер телефона формата +7 999 999 99 99';
                errorSpan.classList.add('popup__error_visible');

                if (form && form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.add('popup__error_color_white');
                }

                return false;
            } else {
                input.classList.remove('input-error');
                errorSpan.textContent = '';
                errorSpan.classList.remove('popup__error_visible');

                if (form && form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.remove('popup__error_color_white');
                }

                return true;
            }
        }

        function validateEmail(emailInput) {
            const errorSpan = emailInput.nextElementSibling;
            const form = emailInput.closest('form');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailInput.value) {
                emailInput.classList.remove('input-error');
                errorSpan.textContent = '';
                errorSpan.classList.remove('popup__error_visible');

                if (form && form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.remove('popup__error_color_white');
                }

                return false;
            }

            if (!emailInput.value.match(emailPattern)) {
                emailInput.classList.add('input-error');
                errorSpan.textContent = 'Введите почту формата example@yandex.ru';
                errorSpan.classList.add('popup__error_visible');

                if (form && form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.add('popup__error_color_white');
                }

                return false;
            } else {
                emailInput.classList.remove('input-error');
                errorSpan.textContent = '';
                errorSpan.classList.remove('popup__error_visible');

                if (form && form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.remove('popup__error_color_white');
                }

                return true;
            }
        }

        function validateName(nameInput) {
            const errorSpan = nameInput.nextElementSibling;
            const form = nameInput.closest('form');

            if (!errorSpan) {
                console.error('Ошибка: элемент для отображения ошибки не найден.');
                return;
            }

            if (!nameInput.value) {
                nameInput.classList.remove('input-error');
                errorSpan.textContent = '';
                errorSpan.classList.remove('popup__error_visible');

                if (form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.remove('popup__error_color_white');
                }

                return false;
            }

            if (nameInput.value.trim().length <= 2) {
                nameInput.classList.add('input-error');
                errorSpan.textContent = 'Это поле должно быть больше 2х символов';
                errorSpan.classList.add('popup__error_visible');

                if (form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.add('popup__error_color_white');
                }

                return false;
            } else {
                nameInput.classList.remove('input-error');
                errorSpan.textContent = '';
                errorSpan.classList.remove('popup__error_visible');

                if (form.classList.contains('getPresentationForm')) {
                    errorSpan.classList.remove('popup__error_color_white');
                }

                return true;
            }
        }

        function validateCheckbox(checkbox) {
            if (!checkbox.checked) {
                return false;
            } else {
                checkbox.classList.remove('input-error');
                return true;
            }
        }

        function toggleSubmitButtons() {
            const isFormValid = validateForm();
            submitButtons.forEach(button => {
                button.disabled = !isFormValid;
            });
        }

        function validateForm() {
            let isValid = true;

            phoneInputs.forEach(phoneInput => {
                if (!validatePhone(phoneInput)) {
                    isValid = false;
                }
            });

            emailInputs.forEach(emailInput => {
                if (!validateEmail(emailInput)) {
                    isValid = false;
                }
            });

            nameInputs.forEach(nameInput => {
                if (!validateName(nameInput)) {
                    isValid = false;
                }
            });

            checkboxInputs.forEach(checkbox => {
                if (!validateCheckbox(checkbox)) {
                    isValid = false;
                }
            });

            return isValid;
        }

        form.addEventListener('submit', (event) => {
            if (!validateForm()) {
                event.preventDefault();
                console.log('Форма не отправлена: валидация не пройдена.');
            }
        });

        toggleSubmitButtons();
    }

    // Инициализация уже существующих форм
    function initializeAllForms() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => initFormValidation(form));
    }

    // Инициализация MutationObserver для отслеживания добавления форм
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'childList') {
                const addedForms = Array.from(mutation.addedNodes).filter(node => 
                    node.tagName === 'FORM'
                );
                addedForms.forEach(form => initFormValidation(form));
            }
        });
    });

    // Запуск наблюдателя на весь документ
    observer.observe(document.body, { childList: true, subtree: true });

    // Инициализация уже существующих форм
    initializeAllForms();
});
