$(document).ready(function() {
    let supportsTouch = ('ontouchstart' in document.documentElement);
    if (supportsTouch) {
        $('body').addClass("touch-on");
        $(".fixedList__item").on("click", function () {
            $(this).toggleClass("__active");
        });
    }
    else {
        $('body').addClass("hover__on");
    }
    $("body").on("click", ".scroll-bottom", function (event) {
        event.preventDefault();
        var id = "#" + $(this).attr('data-scroll'), 
            top = $(id).offset().top; 
        $('body,html').animate({ scrollTop: top }, 1000);
    });
    $("body").on("click", ".specItemBtn", function(params) {
        $(this).parents('.specItem').toggleClass("__active");
    });
    $('.sliderWhy').each(function() {
        let _this = $(this);
        $(this).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplaySpeed: 6000,
            autoplay: true,
            appendDots: _this.parents(".sliderWhy-wrapper").find(".sliderWhy-nav")
        });
    })
    $("body").on("click", "[data-tab-button]", function() {
        let item_num = $(this).attr("data-tab");
        $(this).parents("[data-tab-main]").find("[data-tab-button]").removeClass("__active");
        $(this).addClass("__active");
        $(this).parents("[data-tab-main]").find("[data-tab-element]").removeClass("__active");
        $(this).parents("[data-tab-main]").find("[data-tab-element]").each(function(){
            if (item_num == $(this).attr("data-tab")) {
                $(this).addClass("__active");
            }
        });
    });
    $(".tabBtn[data-tab-button]").on("mouseenter", function(){
        let item_num = $(this).attr("data-tab");
        $(this).parents("[data-tab-main]").find("[data-tab-button]").removeClass("__active");
        $(this).addClass("__active");
        $(this).parents("[data-tab-main]").find("[data-tab-element]").removeClass("__active");
        $(this).parents("[data-tab-main]").find("[data-tab-element]").each(function () {
            if (item_num == $(this).attr("data-tab")) {
                $(this).addClass("__active");
            }
        });
    });
    $("body").on("click", ".menuBtn-open", function () {
        $("#menu").addClass("__open");
        $("body").css("overflow", "hidden");
    });
    $("body").on("click", ".menuBtn-close", function () {
        $("#menu").removeClass("__open");
        $("body").css("overflow", "auto");
    });
    $(".customScroll").select2({
        minimumResultsForSearch: -1,
        width: "100%",
    });
    $(".industrialBtn").each(function(params) {
        let el, pos_top, el_heigt, el_id, open_el, el_pos_top;
        if ($(this).hasClass("__active")) {
            el = $(this);
            $(".abs-line").remove();
            pos_top = +$(this).offset().top;
            el_heigt = +$(this).outerHeight();
            el_id = $(this).attr("data-el");

            $(".industrialImage__el").removeClass("__active");
            $(".industrialImage__el").each(function (params) {
                if ($(this).attr("data-el") == el_id) {
                    $(this).addClass("__active");
                    open_el = $(this);
                }
            })

            if (open_el) {
                el_pos_top = +open_el.offset().top;
                let dec = pos_top - el_pos_top;
                open_el.find(".industrialImage__tape").css("top", dec + el_heigt + 11 + "px");
            }
            let line = $('<div/>', {
                class: "abs-line",
            })
            line.css("top", pos_top + el_heigt + 11 + "px");
            $(".industrialImage").append(line);
        }
    })
    $(".industrialBtn").on("mouseenter", function(params) {
        $(".abs-line").remove();
        let pos_top = +$(this).offset().top;
        let el_heigt = +$(this).outerHeight();
        let el_id = $(this).attr("data-el");
        let open_el, el_pos_top;

        $(".industrialImage__el").removeClass("__active");
        $(".industrialImage__el").each(function(params) {
            if ($(this).attr("data-el") == el_id) {
                $(this).addClass("__active");
                open_el = $(this);
            }
        })
        
        if (open_el) {
            el_pos_top = +open_el.offset().top;
            let dec = pos_top - el_pos_top;
            open_el.find(".industrialImage__tape").css("top", dec + el_heigt + 11 + "px");
        }
        let line = $('<div/>', {
            class: "abs-line",
        })
        $(".industrialBtn").removeClass("__active");
        $(this).addClass("__active");
        line.css("top", pos_top + el_heigt + 11 + "px");
        $(".industrialImage").append(line);
    });
    let menu_pos_left = $("#fixed-menu").offset().left;
    $(window).on("resize", function(params) {
        if (!$("#fixed-menu").hasClass("fixed")) {
            menu_pos_left = $("#fixed-menu").offset().left;
        }
    });
    $(window).on("scroll", function() {
        menu_pos_left = $("#fixed-menu").offset().left;
        if ($("#fixed-menu").parents(".mainHeader").offset().top <= $(document).scrollTop()) {
            $("#fixed-menu").css("left", menu_pos_left + "px");
            $("#fixed-menu").addClass("fixed");
        }
        if ($(document).scrollTop() <= 0) {
            $("#fixed-menu").css("left", menu_pos_left + "px");
            $("#fixed-menu").removeClass("fixed");
        }
    });
})
$(document).ready(function(){
  $('input[type=tel]').inputmask({"mask": "+7(999) 999-9999"}); //specifying options
});
$(document).ready(function(){
  $('input[placeholder=Телефон]').inputmask({"mask": "+7(999) 999-9999"}); //specifying options
});
$(document).off("click.first", "input[type=tel]");
$(document).on("click.first", "input[type=tel]", function(e){
    $('input[type=tel]').inputmask({"mask": "+7(999) 999-9999"});
});