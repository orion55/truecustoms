jQuery(document).ready(function ($) {
    $('.cocoen').cocoen();
    $('.work__slider').slick({
        autoplay: false,
        autoplaySpeed: 2000,
        fade: true,
        cssEase: 'linear',
        infinite: true,
        arrows: true
    });
});
