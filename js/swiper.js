jQuery(document).ready(function ($) {
    //Home Slider
    var swiper = new Swiper('.mySwiper', {
      loop: true,
      effect: 'fade',
      draggable: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination-home',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});
  