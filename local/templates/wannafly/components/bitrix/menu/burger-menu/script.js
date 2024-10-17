document.addEventListener('DOMContentLoaded', function() {
    const burgerButton = document.querySelectorAll('.menu-main__burger-button');
    const burgerMenu = document.querySelector('.burgerMenu');

    // Переключение видимости основного меню
    burgerButton.forEach(item => 
        item.addEventListener('click', function() {
            burgerMenu.classList.toggle('burgerMenu_hidden');
        })
    );

    const subBurgerItems = document.querySelectorAll('.burgerMenu__item');

    subBurgerItems.forEach(item => 
        item.addEventListener('click', function(event) {
            // Остановка всплытия клика на родительские элементы
            event.stopPropagation();

            const subList = item.querySelector('.burgerMenu__subList');

            // Если подменю не существует, то ничего не делаем
            if (!subList) return;

            // Скрываем все подменю, кроме текущего
            subBurgerItems.forEach(i => {
                if (i !== item) {
                    const hiddenSubList = i.querySelector('.burgerMenu__subList');
                    if (hiddenSubList) {
                        hiddenSubList.classList.add('burgerMenu__subList_hidden');
                    }
                    // Удаляем активный класс
                    i.classList.remove('burgerMenu__item_active');
                }
            });

            // Переключаем активный класс и видимость текущего подменю
            item.classList.toggle('burgerMenu__item_active');
            subList.classList.toggle('burgerMenu__subList_hidden');
        })
    );
});
