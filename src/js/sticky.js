jQuery(document).ready(function ($) {

    var header = $(".offer__header");
    var stickyTop = header.offset().top;
    var win = $(window);

    function myFunction() {
        if (win.scrollTop() >= stickyTop) {
            header.addClass("offer__sticky");
        } else {
            header.removeClass("offer__sticky");
        }
    }

    win.scroll(myFunction);
});
