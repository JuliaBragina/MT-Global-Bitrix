$(document).ready(function() {
 /*mask input tel*/
var $phones = $('.input-phone');
$phones.intlTelInput({
    autoPlaceholder: "polite",
    separateDialCode: true,
    preferredCountries: ["ru", "ua"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.1/js/utils.js",
});

 /*progress bar page*/
 $("#progress-bar").each(function(index) {
  window.onscroll = function() { myFunction() };

  function myFunction() {
   var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
   var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
   var scrolled = (winScroll / height) * 100;
   document.getElementById("progress-bar").style.height = scrolled + "%";
  }
 });
  /*scroll section*/
  $('.header-menu_contacts').click(function() {
  $('.header-menu, .header-close, .header-burger, .header-lang, body').toggleClass('open');
   $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 90
   }, {
    duration: 2000,
    easing: 'swing'
   });
   return false;
  });
 /*haeder fixed*/
 $(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 50) {
   $('.header').addClass('fixed');
  } else {
   $('.header').removeClass('fixed');
  }
 });
 /*open menu mobile*/
 $('.header-burger, .header-close').click(function() {
  $('.header-menu, .header-close, .header-burger, .header-lang, body').toggleClass('open');
  return false;
 });
 /*open menu sublist*/
 if (matchMedia('only screen and (max-width: 1200px)').matches) {
  $(".header-menu_point").click(function() {
   $(this).toggleClass('open');
   $(this).children('.header-menu_sublist').slideToggle();
  });
 }
 /*open modal*/
 $(".btn-modal_one, .modal-close_one, .modal-bgr_one").click(function() {
  $('.modal-box_one, .modal-bgr_one').fadeToggle();
 });
 $(".btn-modal_two, .modal-close_two, .modal-bgr_two").click(function() {
  $('.modal-box_two, .modal-bgr_two').fadeToggle();
 });
 $(".btn-modal_three, .modal-close_three, .modal-bgr_three").click(function() {
  $('.modal-box_three, .modal-bgr_three').fadeToggle();
 });
 $(".btn-modal_four, .modal-close_four, .modal-bgr_four").click(function() {
  $('.modal-box_four, .modal-bgr_four').fadeToggle();
 });
 $(".btn-modal_five, .modal-close_five, .modal-bgr_five").click(function() {
  $('.modal-box_five, .modal-bgr_five').fadeToggle();
 });
 $(".btn-modal_six, .modal-close_six, .modal-bgr_six").click(function() {
  $('.modal-box_six, .modal-bgr_six').fadeToggle();
 });
 $(".btn-modal_seven, .modal-close_seven, .modal-bgr_seven").click(function() {
  $('.modal-box_seven, .modal-bgr_seven').fadeToggle();
 });
 /*expertise hover*/
 if (matchMedia('only screen and (min-width: 1200px)').matches) {
  $('.expertise-box').eq(1).addClass('active');
  $('.expertise-box').hover(function() {
   $('.expertise-box.active').removeClass('active');
   $(this).addClass('active').addClass('active');
  });
 }
 /*check select*/
 $(".form-select").change(function() {
  $(this).addClass('change');
 });
 /*comments accordion*/
 if (matchMedia('only screen and (max-width: 1200px)').matches) {
  $(".comments-box").click(function() {
   $(this).toggleClass('open');
   $(this).children('.comments-box_info').slideToggle();
  });
 }
 /*when tabs*/
 $('.when-tabs li').eq(0).addClass('active');
 $('.when-box').eq(0).addClass('active');
 if (matchMedia('only screen and (min-width: 1200px)').matches) {
  $('.when-tabs li').hover(function() {
   if (!$(this).hasClass('active')) {
    var i = $(this).index();
    $('.when-tabs li.active').removeClass('active');
    $('.when-box.active').removeClass('active');
    $(this).addClass('active');
    $($('.when-right').children('.when-box')[i]).addClass('active');
   }
  });
 }
 if (matchMedia('only screen and (max-width: 1200px)').matches) {
  $('.when-tabs li').click(function() {
   if (!$(this).hasClass('active')) {
    var i = $(this).index();
    $('.when-tabs li.active').removeClass('active');
    $('.when-box.active').removeClass('active');
    $(this).addClass('active');
    $($('.when-right').children('.when-box')[i]).addClass('active');
   }
  });
 }
 /*partners-tabs*/
 $('.partners-tabs li').eq(0).addClass('active');
 $('.partners-wrap').eq(0).addClass('active');
 $('.partners-tabs li').click(function() {
  if (!$(this).hasClass('active')) {
   var i = $(this).index();
   $('.partners-tabs li.active').removeClass('active');
   $('.partners-wrap.active').hide().removeClass('active');
   $(this).addClass('active');
   $($('.partners-boxs').children('.partners-wrap')[i]).show().addClass('active');
   gsap.to('.partners-wrap.active li', 1, { opacity: 1, stagger: 0.2 });
   gsap.to('.partners-wrap li', 0, { opacity: 0, stagger: 0 });
  }
  return false;
 });
 gsap.to('.partners-wrap li', { scrollTrigger: { trigger: '.partners-wrap' }, opacity: 1, stagger: 0.2 });
 /*process tabs*/
 $('.process-tabs li').eq(0).addClass('active');
 $('.process-boxs').eq(0).addClass('active');
 $('.process-tabs li').click(function() {
  if (!$(this).hasClass('active')) {
   var i = $(this).index();
   $('.process-tabs li.active').removeClass('active');
   $('.process-boxs.active').removeClass('active');
   $(this).addClass('active');
   $($('.process-wrap').children('.process-boxs')[i]).addClass('active').find('svg').addClass('active');
   gsap.to('.process-boxs.active .process-box', 1, { opacity: 1, stagger: 0.2 });
   gsap.to('.process-boxs .process-box', 0, { opacity: 0, stagger: 0 });
  }
 });
 gsap.to('.process-box', 1, { scrollTrigger: { trigger: '.process-boxs_bgr', toggleClass: 'active' }, opacity: 1, stagger: 0.2 });
 /*info slider*/
 var swiper = new Swiper('.info-slider', {
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  speed: 800,
  centeredSlides: true,
  effect: 'fade',
  loop: true,
  autoplay: {
   delay: 5000,
  },
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.info-pagination',
   clickable: true,
   renderBullet: function(index, className) {
    return '<span class="' + className + '">' + '0' + (index + 1) + '</span>';
   },
  },
  on: {
   slideChangeTransitionStart: function() {
    gsap.to('.info-slide.swiper-slide-prev path', 0.1, { display: 'none' });
    gsap.to('.info-slide.swiper-slide-next path', 0.1, { display: 'none' });
    gsap.to('.info-slide.swiper-slide-active path', 1, { display: 'block', stagger: 0.07 });
   },
  }
 });
 /*licensed slider*/
 var swiper = new Swiper('.licensed-slider', {
  loop: true,
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 15,
  watchOverflow: true,
  speed: 800,
  autoplay: {
   delay: 4000,
  },
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.licensed-pagination',
   clickable: true,
  },
  navigation: {
   nextEl: '.licensed-arrow_next',
   prevEl: '.licensed-arrow_prev',
  },
  breakpoints: {
   1200: {
    slidesPerView: 4,
    spaceBetween: 30,
   },
   992: {
    slidesPerView: 4,
   },
   768: {
    slidesPerView: 3,
   },
   576: {
    slidesPerView: 2,
   },
  }
 });
 /*equipment slider*/
 var swiper = new Swiper('.equipment-slider', {
  loop: true,
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 15,
  watchOverflow: true,
  speed: 800,
  autoplay: {
   delay: 4000,
  },
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.equipment-pagination',
   type: 'progressbar',
  },
  navigation: {
   nextEl: '.equipment-arrow_next',
   prevEl: '.equipment-arrow_prev',
  },
  breakpoints: {
   1200: {
    slidesPerView: 4,
   },
   992: {
    slidesPerView: 4,
   },
   768: {
    slidesPerView: 3,
   },
   576: {
    slidesPerView: 2,
   },
  }
 });
 /*result slider*/
 var swiper = new Swiper('.result-slider', {
  observer: true,
  observeParents: true,
  spaceBetween: 0,
  watchOverflow: true,
  slidesPerView: 'auto',
  speed: 800,
  allowTouchMove: false,
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.result-pagination',
   type: 'progressbar',
  },
  navigation: {
   nextEl: '.result-arrow_next',
   prevEl: '.result-arrow_prev',
  },
  breakpoints: {
   1200: {
    allowTouchMove: true,
    slidesPerView: 4,
    spaceBetween: 15,

   },
   992: {
    allowTouchMove: true,
    slidesPerView: 4,
    spaceBetween: 15,
   },
   768: {
    allowTouchMove: true,
    slidesPerView: 3,
    spaceBetween: 15,
   },


  }
 });
 /*cost slider*/
 var swiper = new Swiper('.cost-slider', {
  loop: true,
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 15,
  watchOverflow: true,
  speed: 800,
  autoplay: {
   delay: 4000,
  },
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.cost-pagination',
   clickable: true,
  },
  navigation: {
   nextEl: '.cost-arrow_next',
   prevEl: '.cost-arrow_prev',
  },
  breakpoints: {
   1200: {
    spaceBetween: 30,
    slidesPerView: 4,
   },
   992: {
    slidesPerView: 4,
   },
   768: {
    slidesPerView: 3,
   },
   576: {
    slidesPerView: 2,
   },
  }
 });
 /*result slider*/
 var swiper = new Swiper('.new-slider', {
  loop: true,
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 15,
  watchOverflow: true,
  speed: 800,
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.cost-pagination',
   clickable: true,
  },
  navigation: {
   nextEl: '.cost-arrow_next',
   prevEl: '.cost-arrow_prev',
  },
  breakpoints: {
   1200: {
    spaceBetween: 30,
    slidesPerView: 4,
   },
   992: {
    slidesPerView: 4,
   },
   768: {
    slidesPerView: 3,
   },
   576: {
    slidesPerView: 2,
   },
  }
 });
 /*we slider*/
 var swiper = new Swiper('.we-slider', {
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 15,
  watchOverflow: true,
  speed: 800,
  keyboard: {
   enabled: true,
  },
  mousewheel: {
   releaseOnEdges: true,
  },
  pagination: {
   el: '.we-pagination',
   clickable: true,
  },
  navigation: {
   nextEl: '.we-arrow_next',
   prevEl: '.we-arrow_prev',
  },
  breakpoints: {
   1200: {
    slidesPerView: 3,
   },
   992: {
    slidesPerView: 3,
   },
   768: {
    slidesPerView: 2,
   },
   576: {
    slidesPerView: 2,
   },
  }
 });
 /*technology slider*/
 var swiper = new Swiper('.technology-slider', {
  loop: true,
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 15,
  speed: 800,
  autoplay: {
   delay: 5000,
  },
  pagination: {
   el: '.technology-pagination',
   clickable: true,
  },
  breakpoints: {
   992: {
    loop: false,
    autoplay: false,
    slidesPerView: 'auto',
    allowTouchMove: false,
    spaceBetween: 30,
   },
   768: {
    allowTouchMove: false,
    spaceBetween: 0,
    slidesPerView: 'auto',
   },
   576: {
    spaceBetween: 15,
    slidesPerView: 2,
   },
  }
 });
 /*animations*/
 ScrollTrigger.defaults({ start: 'top 90%', end: 'top 5%' });
 gsap.defaults({ duration: 1.5 });
 gsap.config({ nullTargetWarn: false });
 const section = gsap.utils.toArray('.section h2, .section-title, .footer-top h2, .global-text_top h2');
 section.forEach(sectionTitle => {
  gsap.from(sectionTitle, { opacity: 0, y: 20, scrollTrigger: { trigger: sectionTitle } })
 });
 gsap.to('.home-top_text', { opacity: 1, x: 0, delay: 0.2 });
 gsap.to('.home-bottom h3', { opacity: 1, y: 0, delay: 0.3 });
 gsap.to('.home-bottom li', { opacity: 1, stagger: 0.4, delay: 0.3 });
 gsap.to('.solution-top', { opacity: 1, x: 0, delay: 0.2 });
 gsap.to('.solution-bottom li', { opacity: 1, stagger: 0.4, delay: 0.3 });
 gsap.to('.industrial-text', { opacity: 1, x: 0, delay: 0.2 });
 gsap.to('.products-text', { opacity: 1, x: 0, delay: 0.2 });
 gsap.from('.when-tabs li', { scrollTrigger: { trigger: '.when-tabs' }, opacity: 0, stagger: 0.3 });
 gsap.from('.when-right', { scrollTrigger: { trigger: '.when-right' }, opacity: 0 });
 gsap.from('.request-form', { scrollTrigger: { trigger: '.request-form' }, opacity: 0, y: 30 });
 gsap.from('.services-box', { scrollTrigger: { trigger: '.services-boxs' }, opacity: 0, x: -30, stagger: 0.3 });
 gsap.from('.complex-box', { scrollTrigger: { trigger: '.complex-boxs' }, opacity: 0, x: -10, stagger: 0.3 });
 gsap.from('.complex-form.blue', { scrollTrigger: { trigger: '.complex-form.blue' }, opacity: 0, y: 30 });
 gsap.from('.expertise-box', { scrollTrigger: { trigger: '.expertise-boxs' }, opacity: 0, stagger: 0.3 });
 gsap.from('.specializations-box', { scrollTrigger: { trigger: '.specializations-boxs' }, opacity: 0, stagger: 0.3 });
 gsap.from('.request-form_two', { scrollTrigger: { trigger: '.request-form_two' }, opacity: 0, y: 30 });
 gsap.from('.why-box', { scrollTrigger: { trigger: '.why-boxs' }, opacity: 0, y: 20, stagger: 0.3 });
 gsap.from('.info-slide_text p', { scrollTrigger: { trigger: '.info h2' }, opacity: 0 });
 gsap.to('.comments-box', { scrollTrigger: { trigger: '.comments-boxs' }, opacity: 1, stagger: 0.15 });
 gsap.from('.comments-bottom', { scrollTrigger: { trigger: '.comments-bottom' }, opacity: 0, x: 20, stagger: 0.2 });
 gsap.from('.request-form_three', { scrollTrigger: { trigger: '.request-form_three' }, opacity: 0, y: 30 });
 gsap.from('.request-three .section-title h2', { scrollTrigger: { trigger: '.request-three .section-title' }, opacity: 0, y: 20 });
 gsap.from('.footer-top_list li', { scrollTrigger: { trigger: '.footer-top_list' }, opacity: 0, stagger: 0.4 });
 gsap.from('.footer-bottom .container', { scrollTrigger: { trigger: '.footer-bottom' }, opacity: 0, y: 20 });
 gsap.from('.global-text_top p', { scrollTrigger: { trigger: '.global-text_top' }, opacity: 0, y: 20 });
 gsap.from('.global-text_bottom p', { scrollTrigger: { trigger: '.global-text_bottom' }, opacity: 0, y: 20 });
 gsap.from('.global-text_photo', { scrollTrigger: { trigger: '.global-text_photo' }, opacity: 0, y: 20 });
 gsap.from('.global-list li', { scrollTrigger: { trigger: '.global-list' }, opacity: 0, x: -20, stagger: 0.4 });
 gsap.from('.criteria-box p', { scrollTrigger: { trigger: '.criteria-box p' }, opacity: 0, stagger: 0.4 });
 gsap.from('.success-box', { scrollTrigger: { trigger: '.success-boxs' }, opacity: 0, x: -30, stagger: 0.3 });
 gsap.from('.licensed-slide', { scrollTrigger: { trigger: '.licensed-slider' }, opacity: 0, stagger: 0.1 });
 gsap.from('.requisites-box h4', { scrollTrigger: { trigger: '.requisites-box' }, opacity: 0, y: 10 });
 gsap.from('.requisites-table', { scrollTrigger: { trigger: '.requisites-table' }, opacity: 0 });
 gsap.from('.program-text p', { scrollTrigger: { trigger: '.program-text' }, opacity: 0 });
 gsap.from('.program-img', { scrollTrigger: { trigger: '.program-img' }, opacity: 0 });
 gsap.from('.how-box li', { scrollTrigger: { trigger: '.how-line', toggleClass: 'active' }, opacity: 0, stagger: 0.5 });
 gsap.from('.how-wrap .page-button', { scrollTrigger: { trigger: '.how-box' }, opacity: 0 });
 gsap.from('.software-bottom', { scrollTrigger: { trigger: '.software-bottom' }, opacity: 0, y: 20 });
 gsap.from('.cost-slide', { scrollTrigger: { trigger: '.cost-slider' }, opacity: 0, stagger: 0.1 });
 gsap.from('.cost-bgr', { scrollTrigger: { trigger: '.cost-bgr' }, opacity: 0 });
 gsap.from('.technology-slide', { scrollTrigger: { trigger: '.technology-slider' }, opacity: 0, stagger: 0.2 });
 gsap.from('.we-slide', { scrollTrigger: { trigger: '.we-slider' }, opacity: 0, stagger: 0.2 });
 gsap.from('.page-navigation_box', { scrollTrigger: { trigger: '.page-navigation_boxs' }, opacity: 0, stagger: 0.4 });
 gsap.from('.equipment-slide', { scrollTrigger: { trigger: '.equipment-slider' }, opacity: 0, stagger: 0.2 });
 gsap.to('.criteria-box path', 1, { scrollTrigger: { trigger: '.criteria-boxs' }, opacity: 1, stagger: 0.05 });
 gsap.from('.description p', { scrollTrigger: { trigger: '.description' }, opacity: 0, y: 15, stagger: 0.05 });
 gsap.from('.apply-box', { scrollTrigger: { trigger: '.apply-boxs' }, opacity: 0, x: -30, stagger: 0.3 });
 gsap.to('.error-img path', 1, { opacity: 1, stagger: 0.03 });
 gsap.to('.error-text span, .error-text h1, .error-text button, .error-text a', 1, { opacity: 1, y: 0, stagger: 0.2 });


 $('.provide-box').each(function(index) {
  var gsap1 = $(this).find('li');
  gsap.from(gsap1, 1, { scrollTrigger: { trigger: this }, opacity: 0, y: 15, stagger: 0.2 });
 });
 $('.software-boxs').each(function(index) {
  var gsap2 = $(this).find('.software-box');
  gsap.from(gsap2, 1, { scrollTrigger: { trigger: this }, opacity: 0, x: -15, stagger: 0.2 });
 });
 $('.result-slider').each(function(index) {
  var gsap3 = $(this).find('.result-slide');
  gsap.from(gsap3, 1, { scrollTrigger: { trigger: this }, opacity: 0, stagger: 0.2 });
 });
 $('.consulting-text').each(function(index) {
  var gsap4 = $(this).find('p');
  gsap.from(gsap4, 1, { scrollTrigger: { trigger: this }, opacity: 0, x: -15, stagger: 0.2 });
 });
  $('.consulting-text').each(function(index) {
  var gsap5 = $(this).find('span');
  gsap.from(gsap5, 1, { scrollTrigger: { trigger: this }, opacity: 0, y: 15, stagger: 0.2 });
 });
  $('.consulting-img').each(function(index) {
  var gsap6 = $(this).find('img');
  gsap.from(gsap6, 1, { scrollTrigger: { trigger: this }, y: 15, stagger: 0.2 });
 });
 /*scrollBars*/
 if (matchMedia('only screen and (max-width: 1200px)').matches) {
  $(".process").each(function(index) {
   new SimpleBar($('.process-boxs_one')[0]);
   new SimpleBar($('.process-boxs_two')[0]);
  });
 }
 if (matchMedia('only screen and (max-width: 768px)').matches) {
  $(".software-boxs").each(function(index) {
   new SimpleBar($('.software-boxs_one')[0]);
   new SimpleBar($('.software-boxs_two')[0]);
   new SimpleBar($('.software-boxs_three')[0]);
  });
 }
 if (matchMedia('only screen and (max-width: 768px)').matches) {
  $(".how-box").each(function(index) {
   new SimpleBar($('.how-box')[0]);
  });
 }
 $('.section.section-indent.request .form-button, .section.complex .form-button, .section.request-two .form-button, .section.request-three .form-button').on('click',function(){
    ym(53077474,'reachGoal','otpravka-formy'); 
 });
$('.tel_input').inputmask('+7(999)999-99-99');

$('.read-more').click(function(){
    $(this).next('.text-hidden').removeClass('text-hidden');
    $(this).fadeOut();
});

});