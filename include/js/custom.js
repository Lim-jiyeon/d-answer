$(document).ready(function() {

    var headerTop = $('.header');
     $(window).scroll(function(){
         headerTop.stop();
         headerTop.animate( { "top": $(document).scrollTop() + 0 }, 0 );
     });

    // Menu
    // --------------------------------------------------
    $(".nav > li > a").on({
        'mouseenter focusin': function() {
            $(this).closest("li").siblings().find('.selected').stop().stop().stop().fadeTo(50, 0, function() {
                $(this).hide().removeClass('selected');
            });
            $(this).siblings('.nav-child').show().addClass('selected').stop().stop().fadeTo(100, 1);
        },
        'focusout mouseleave': function() {
            $(this).siblings('.nav-child').fadeTo(50, 0, function() {
                $(this).hide().removeClass('selected');
            });
        }
    });
    $(document)
        .on('mouseenter', '.nav-child.selected', function(){
            $(this).stop().stop().fadeTo(200, 1);
        })
        .on('mouseleave', '.nav-child.selected', function(){
            $(this).fadeTo(50, 0, function(){ $(this).hide().removeClass('selected');});
        });

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
    $(function() {
        var $sidebar   = $(".detail-shop-info"),
            $window    = $(window),
            offset     = $sidebar.offset(),
            topPadding = 88,
            sidebarH = $(".detail-shop-inner").height(),
            detailH = $(".detail-shop").height() - sidebarH;
            //console.log(sidebarH);
            //console.log(detailH);
        $window.scroll(function() {
            if ($window.scrollTop() > offset.top) {
                $sidebar.stop().animate({
                    marginTop: $window.scrollTop() - offset.top + topPadding
                });
            } else {
                $sidebar.stop().animate({
                    marginTop: 0
                });
            }
            if ($window.scrollTop() > detailH ) {
                $sidebar.stop().animate({
                    marginTop: detailH
                });
            }
        });
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

// 상품상세 스크롤 따라다니는 상품 옵션 - 스크롤시 position 변경이 안되는 이슈 해결
// --------------------------------------------------
// $(window).scroll(function(){
//     var offset = $(window).scrollTop();
//     if(offset > 90) {
//         $(".detail-shop-inner").addClass("fixed");
//     } else {
//         $(".detail-shop-inner").removeClass("fixed");
//     }
// });

// Modal
// --------------------------------------------------
function modalOpen(modal) {
    var $this = $(modal);
    $this.show();
    return false;
}
function modalClose(modal) {
    var $this = $(modal);
    $this.parents('.modal').hide();
    return false;
}