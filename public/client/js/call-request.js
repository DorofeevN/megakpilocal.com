$(function() {
//show go-top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) $(".call-request").fadeIn(600);
        else $(".call-request").fadeOut(600);
    });
//go to top function
    $(".call-request").on("click", function () {
        $("body, html").animate({
            scrollTop: $("body").position().top
        }, 600);
        return false;
    });

});