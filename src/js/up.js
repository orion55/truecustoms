jQuery(document).ready(function ($) {
    $('#up').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500);
        return false;
    })
});
