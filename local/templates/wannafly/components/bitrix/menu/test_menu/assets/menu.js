document.addEventListener('DOMContentLoaded', function () {
    const submenuTogglesLvl1 = document.querySelectorAll('.header__item_level_1.has-submenu > .header__link');
    const submenuTogglesLvl2 = document.querySelectorAll('.header__item_level_2.has-submenu > .header__link');
    const isMobile = window.screen.width <= 900;
    
    submenuTogglesLvl1.forEach(function (toggle) {
        toggle.addEventListener('click', function (event) {
            event.preventDefault();
            let parentLi = this.parentElement;
            parentLi.classList.toggle('submenu-open');
            this.classList.toggle('active');
        });
    });
    if (isMobile) {
        submenuTogglesLvl2.forEach(function (toggle) {
            toggle.addEventListener('click', function (event) {
                if (!event.target.classList.contains('active')) {
                    event.preventDefault();
                    this.classList.toggle('active');
                }
            })
        })
    }
});
