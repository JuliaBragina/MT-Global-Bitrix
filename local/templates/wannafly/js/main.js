document.addEventListener('DOMContentLoaded', () => {
    let blocks = document.querySelectorAll('section:not(.no-effect)');

    function checkBlocksVisibility() {
        let windowHeight = window.innerHeight;

        blocks.forEach(block => {
            let blockPosition = block.getBoundingClientRect().top;

            if (blockPosition < windowHeight - 100) {
                block.style.opacity = "1";
                block.style.top = "0";
            }
        });
    }

    checkBlocksVisibility();

    window.addEventListener('scroll', function () {
        checkBlocksVisibility();
    });
});

let lastScrollY = window.pageYOffset;
window.onscroll = function() {
    const header = document.querySelector(".header__scrollContainer");
    const menu = document.querySelector(".header__nav");
    let currentScrollY = window.pageYOffset;

    if (window.innerWidth < 1024) {
        menu.style.top = "60.2px";
        
    } else {
        menu.style.top = "80.2px";
        menu.style.opacity = 0;
        menu.style.transition = "opacity .5s ease";
    }

    if (currentScrollY > lastScrollY) {
        
    } else {
        menu.style.opacity = 1;
        menu.style.transform = "translateY(0)";
        menu.style.position = "fixed";
        menu.style.left = "50%";
        menu.style.transform = "translateX(-50%)";
        menu.style.zIndex = "1000";
        menu.style.maxWidth = "1920px";
        menu.style.width = "100%";
    }

    if (currentScrollY === 0) {
        menu.style.position = "relative";
        menu.style.transform = "translateY(0)";
        if (window.innerWidth < 1024) {
            menu.style.top = "84px";
            
        } else {
            menu.style.top = "0";
        }
        menu.style.left = "0";
        menu.style.boxShadow = "none";
        menu.style.maxWidth = "1920px";
        menu.style.opacity = 1;
    }

    if (currentScrollY > 0) {
        header.style.position = "fixed";
        header.style.top = "0";
        header.style.left = "50%";
        header.style.transform = "translateX(-50%)";
        header.style.zIndex = "1000";
        header.style.padding = "5px 0";
        header.style.maxWidth = "1920px";
    } else {
        header.style.boxShadow = '0px 4px 10px rgba(34, 60, 80, 0.25)';
        header.style.position = "relative";
        header.style.transform = "translateX(0)";
        header.style.left = "0";
        header.style.padding = "23px 0";
        header.style.boxShadow = "none";
        header.style.maxWidth = "1920px";
    }

    lastScrollY = currentScrollY;
};

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.typicalSolutions__button');
    const descriptions = document.querySelectorAll('.typicalSolutions__description');

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('typicalSolutions__button_active'));

            button.classList.add('typicalSolutions__button_active');

            descriptions.forEach(desc => desc.style.display = 'none');
            descriptions[index].style.display = 'flex';
        });
    });

    buttons[0].classList.add('typicalSolutions__button_active');
    descriptions[0].style.display = 'flex';

    const buttonsShowMore = document.querySelectorAll('.typicalSolutions__buttonOpenArticle');
    buttonsShowMore.forEach(button => {
        button.addEventListener('click', function() {
            const article = this.closest('.typicalSolutions__article');
            article.classList.toggle('typicalSolutions__article_fulltext');
            this.classList.toggle('typicalSolutions__buttonOpenArticle_fulltext');
        });
    });
})