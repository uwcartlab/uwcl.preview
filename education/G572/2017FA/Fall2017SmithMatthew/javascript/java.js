$(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
        $('#scroller').css('top', $(window).scrollTop());
    }
}
);