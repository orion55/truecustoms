jQuery(document).ready(function ($) {
    $('.cocoen').cocoen();
    $('.work__slider').slick({
        lazyLoad: 'ondemand',
        autoplay: false,
        autoplaySpeed: 2000,
        fade: true,
        cssEase: 'linear',
        infinite: true,
        arrows: true
    });
});
