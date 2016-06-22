$(document).ready(function() {

    $(".nav > li > a").mouseover(function() {
        $(".nav-child").hide();
        $(this).siblings(".nav-child").show();
    });
    $(".nav-child").mouseleave(function() {
        $(this).delay(1000).fadeOut(1000);
    });

    $(".category-nav > li > a").mouseover(function() {
        $(".category-nav-child").hide();
        $(this).siblings(".category-nav-child").show();
    });
    $(".category-nav-child").mouseleave(function() {
        $(this).delay(1000).fadeOut(1000);
    });

});