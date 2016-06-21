$(document).ready(function() {
    $(".menu > li > a").mouseover(function() {
        $(".depth2").hide();
        $(this).siblings(".depth2").show();
    });
});