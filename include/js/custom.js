$(document).ready(function() {

    // Menu
    // --------------------------------------------------
    $(".nav > li > a").on({
        'mouseenter focusin': function() {
            $(this).closest("li").siblings().find('.acc').stop().stop().stop().fadeTo(50, 0, function() {
                $(this).hide().removeClass('selected');
            });
            $(this).siblings('.nav-child').show().addClass('selected').stop().stop().fadeTo(100, 1);
        },
        'focusout mouseleave': function() {
            $(this).siblings().hide();
            $(this).siblings('.nav-child').delay(1000).fadeTo(500, 0, function() {
                $(this).hide().removeClass('selected');
            });
        }
    });
    $(document)
        .on('mouseenter', '.nav-child.selected', function(){
            $(this).stop().stop().fadeTo(200, 1);
        })
        .on('mouseleave', '.nav-child.selected', function(){
            $(this).delay(1200).fadeTo(500, 0, function(){ $(this).hide().removeClass('selected');});
        });

});

$(function() {
    $( "#detail-color, #detail-size, #qna-search-filter" )
        .selectmenu()
        .addClass( "overflow" );
});