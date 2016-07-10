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

    // Select Box
    // --------------------------------------------------
    //$(function() {
    //    $( "#detail-color, #detail-size, #qna-search-filter, .selectbox" )
    //        .selectmenu()
    //        .addClass( "overflow" );
    //});

    // Main Banner
    // --------------------------------------------------
    $(".main-slide").slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1
    });

    // Top Button
    // --------------------------------------------------
    if ($(".top-link").length) {
        var scrollTrigger = 100, // px
            theTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $(".top-link").removeClass('top');
                } else {
                    $(".top-link").addClass('top');
                }
            };
        theTop();
        $(window).on('scroll', function () {
            theTop();
        });
        $(".top-link").on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    // 상품상세 스크롤 따라다니는 상품 옵션
    // --------------------------------------------------
    $(".detail-shop-inner").sticky({
        topSpacing: 150,
        bottomSpacing: 800
    });

    // Tab
    // --------------------------------------------------
    $(".tab-box .tab-button").click(function() {
        $(".tab-button").removeClass("selected").siblings("div").hide();
        $(this).addClass("selected").siblings("div").show();
        return false;
    });

    // Review
    // --------------------------------------------------
    $(".review-preview").on('click', function() {
        $(".review-view").hide();
        $(this).next(".review-view").show();
        return false;
    });

    // Forgot id, password Select Tab
    // --------------------------------------------------
    $(".findId-select input[type=radio]").change(function () {
        var findIdCheck = $(".findId-select input[type=radio]").attr("name");
        $('.'+findIdCheck+'-box').hide();
        $('.'+$(this).val()).show();
    });
    $(".findPassword-select input[type=radio]").change(function () {
        var findPasswordCheck = $(".findPassword-select input[type=radio]").attr("name");
        $('.'+findPasswordCheck+'-box').hide();
        $('.'+$(this).val()).show();
    });

});
