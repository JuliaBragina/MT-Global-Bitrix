document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form'); // Все формы на странице

    forms.forEach(form => {
        const nameInputs = form.querySelectorAll('input[type="text"].inputtext#popup__name');
        const phoneInputs = form.querySelectorAll('input[type="text"].inputtext#popup__phone');
        const emailInputs = form.querySelectorAll('input[type="text"].inputtext#popup__email');
        const submitButtons = form.querySelectorAll('button[type="submit"].btn.btn-primary.popup__button');

        phoneInputs.forEach(input => {
            new Cleave(input, {
                phone: true,
                phoneRegionCode: 'RU',
                delimiter: ' ',
                prefix: '+7',
                blocks: [1, 3, 3, 2, 2]
            });

            input.addEventListener('blur', () => {
                validatePhone(input);
                toggleSubmitButtons();
            });

            input.addEventListener('input', () => {
                validatePhone(input);
                toggleSubmitButtons();
            });
        });

        emailInputs.forEach(emailInput => {
            emailInput.addEventListener('blur', () => {
                validateEmail(emailInput);
                toggleSubmitButtons();
            });

            emailInput.addEventListener('input', () => {
                validateEmail(emailInput);
                toggleSubmitButtons();
            });
        });

        nameInputs.forEach(nameInput => {
            nameInput.addEventListener('blur', () => {
                validateName(nameInput);
                toggleSubmitButtons();
            });

            nameInput.addEventListener('input', () => {
                validateName(nameInput);
                toggleSubmitButtons();
            });
        });

        function validatePhone(input) {
            if (!input.value || input.value.length < 16) {
                input.setCustomValidity('Номер телефона должен быть формата: +7 999 999 99 99');
                input.classList.add('input-error');
            } else {
                input.setCustomValidity('');
                input.classList.remove('input-error');
            }
            input.reportValidity();
        }

        function validateEmail(emailInput) {
            const emailValue = emailInput.value;
            if (!emailValue.includes('@')) {
                emailInput.setCustomValidity('Email должен быть формата: example@domain.com');
                emailInput.classList.add('input-error');
            } else {
                emailInput.setCustomValidity('');
                emailInput.classList.remove('input-error');
            }
            emailInput.reportValidity();
        }

        function validateName(nameInput) {
            if (!nameInput.value.trim()) {
                nameInput.setCustomValidity('Имя не может быть пустым.');
                nameInput.classList.add('input-error');
            } else if (nameInput.value.length <= 2) {
                nameInput.setCustomValidity('Имя должно содержать более 2 символов.');
                nameInput.classList.add('input-error');
            } else {
                nameInput.setCustomValidity('');
                nameInput.classList.remove('input-error');
            }
            nameInput.reportValidity();
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
                if (!phoneInput.value || phoneInput.value.length < 16) {
                    phoneInput.setCustomValidity('Номер телефона должен быть формата: +7 999 999 99 99.');
                    isValid = false;
                } else {
                    phoneInput.setCustomValidity('');
                }
            });

            emailInputs.forEach(emailInput => {
                const emailValue = emailInput.value;
                if (!emailValue.includes('@')) {
                    emailInput.setCustomValidity('Email должен быть формата: example@domain.com');
                    isValid = false;
                } else {
                    emailInput.setCustomValidity('');
                }
            });

            nameInputs.forEach(nameInput => {
                if (!nameInput.value.trim()) {
                    nameInput.setCustomValidity('Имя не может быть пустым.');
                    isValid = false;
                } else if (nameInput.value.length <= 2) {
                    nameInput.setCustomValidity('Имя должно содержать более 2 символов.');
                    isValid = false;
                } else {
                    nameInput.setCustomValidity('');
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
    });
});