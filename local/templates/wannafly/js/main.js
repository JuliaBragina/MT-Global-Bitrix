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

window.onscroll = function() {
    var menu = document.querySelector(".header__scrollContainer");
    if (window.pageYOffset > 0) {
      menu.style.position = "fixed";
      menu.style.top = "0";
      menu.style.left = "50%";
      menu.style.transform = "translateX(-50%)";
      menu.style.zIndex = "1000";
      menu.style.padding = "5px 0";
      menu.style.boxShadow = '0px 4px 10px rgba(34, 60, 80, 0.25)';
    } else {
      menu.style.position = "relative";
      menu.style.transform = "translateX(0)";
      menu.style.left = "0";
      menu.style.padding = "23px 0";
      menu.style.boxShadow = "none";
    }
};