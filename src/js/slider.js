jQuery(document).ready(function ($) {
    $('.cocoen').cocoen();

    $('.work__slider').slick({
        lazyLoad: 'ondemand',
        autoplay: false,
        autoplaySpeed: 10000,
        fade: true,
        cssEase: 'linear',
        infinite: true,
        arrows: true
    });
    $('.reviews__slider').slick({
        lazyLoad: 'ondemand',
        autoplay: false,
        autoplaySpeed: 10000,
        fade: true,
        cssEase: 'linear',
        infinite: true,
        arrows: true
    });

    var reviews__picture = $('.reviews__picture');
    if (reviews__picture.length > 0) {
        $(reviews__picture[0]).addClass('reviews__picture--active');
    }

    $(reviews__picture).click(function () {
        $(reviews__picture).removeClass('reviews__picture--active');
        $(this).addClass('reviews__picture--active');
        var index = $(this).data('index');
        console.log(index);
    });
});
