document.addEventListener('DOMContentLoaded', function () {
    const submenuTogglesLvl1 = document.querySelectorAll('.header__item_level_1.has-submenu > .header__link');
    const submenuTogglesLvl2 = document.querySelectorAll('.header__item_level_2.has-submenu > .header__link');
    const mobileToggle = document.getElementById('mobile-toggle');
    const overlay = document.getElementById('overlay');
    const isMobile = window.screen.width <= 900;

    const screenWidth = window.innerWidth;

    if (screenWidth <= 1300) {
        submenuTogglesLvl2.forEach(toggle => {
    
            toggle.addEventListener('click', function(event) {
                const submenu =  this.nextElementSibling.children[0];
                const isActive = submenu.classList.contains('submenu_active');
                console.log(submenu);

                if (!isActive) {
                    event.preventDefault();
                    this.parentElement.parentElement.classList.add('header_flex')
                    submenu.parentElement.previousElementSibling.parentElement.classList.add('header__item_level_2_active');
                    submenu.parentElement.previousElementSibling.classList.add('header__link_level_2_active');
                    submenu.children[0].children[0].classList.add('header__link_level_3_active');
                    submenu.classList.add('submenu_active');
                }
            });
        });
    }
    

    submenuTogglesLvl1.forEach(function (toggle) {
        toggle.addEventListener('click', function (event) {
            event.preventDefault();
            let parentLi = this.parentElement;

            document.querySelectorAll('.submenu-open').forEach(item => {
                if (item !== parentLi) {
                    item.classList.remove('submenu-open');
                    item.querySelector('.header__link').classList.remove('active');
                }
            });

            parentLi.classList.toggle('submenu-open');
            this.classList.toggle('active');

            if (!isMobile) {
                if (parentLi.classList.contains('submenu-open')) {
                    overlay.classList.add('overlay_active');
                } else {
                    overlay.classList.remove('overlay_active');
                }
            }
        });
    });

    if (isMobile) {
        submenuTogglesLvl2.forEach(function (toggle) {
            toggle.addEventListener('click', function (event) {
                if (!this.classList.contains('active')) {
                    event.preventDefault();
                    let parentLi = this.parentElement;

                    document.querySelectorAll('.submenu-open').forEach(item => {
                        if (item !== parentLi) {
                            item.classList.remove('submenu-open');
                            item.querySelector('.header__link').classList.remove('active');
                        }
                    });

                    this.classList.toggle('active');
                    parentLi.classList.toggle('submenu-open');
                }
            });
        });
    }

    mobileToggle.addEventListener('change', function () {
        if (mobileToggle.checked) {
            overlay.classList.add('overlay_active');
            document.body.classList.add('mobile-menu-open');
        } else {
            overlay.classList.remove('overlay_active');
            document.body.classList.remove('mobile-menu-open');

            document.querySelectorAll('.submenu-open').forEach(item => {
                item.classList.remove('submenu-open');
            });
            document.querySelectorAll('.active').forEach(item => {
                item.classList.remove('active');
            });
        }
    });

    overlay.addEventListener('click', () => {
        mobileToggle.checked = false;
        overlay.classList.remove('overlay_active');
        document.body.classList.remove('mobile-menu-open');

        document.querySelectorAll('.submenu-open').forEach(item => {
            item.classList.remove('submenu-open');
        });
        document.querySelectorAll('.active').forEach(item => {
            item.classList.remove('active');
        });
    });
});


