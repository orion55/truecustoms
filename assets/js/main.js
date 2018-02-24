AOS.init({
    easing: 'ease-in-out-sine'
});
jQuery(document).ready(function ($) {
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {
        myMap = new ymaps.Map("map", {
            center: [56.881222, 60.574343],
            zoom: 16
        });
        myMap.container.fitToViewport();

        myPlacemark = new ymaps.Placemark([56.881222, 60.574343], {
            hintContent: 'TrueCustoms'
        }, {
            preset: 'islands#yellowDotIcon'
        });

        myMap.geoObjects.add(myPlacemark);
    }
});
jQuery(document).ready(function ($) {
    $('.modal-blur').click(function (e) {
        this.blur();
        e.preventDefault();
    });
});

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

jQuery(document).ready(function ($) {
    $('#up').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500);
        return false;
    })
});
