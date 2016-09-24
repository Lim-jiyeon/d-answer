<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>D-answer</title>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="../include/css/styles.css">
    <script type="text/javascript" src="../include/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../include/js/slick.min.js"></script>
    <script type="text/javascript" src="../include/js/custom.js"></script>
</head>
<body>
<header>
    <div class="top">
        <h1 class="site-brand">
            <a href="#" title="D-answer" class="center-block">
                <img src="../include/images/brand-logo.png" alt="D-answer">
            </a>
        </h1>
        <div class="mobile-menu">
            <a href="#"><i class="icon-menu"></i></a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <!-- [D] 2뎁스 메뉴가 있을 경우 child-item 클래스 추가 -->
    <div class="mobile-menu-wrap">
        <div class="sidebar-menu">
            <ul class="quick-access">
               <li><a href="#">cart</a></li>
               <li><a href="#">wish list</a></li>
               <li><a href="#">my page</a></li>
            </ul>
            <!-- Search Form -->
            <div class="form-search">
                <input type="text" id="search_word" class="form-control">
                <label for="search_word" class="search-word"><i class="icon-search"></i></label>
            </div>
            <!-- Search Form //end -->
            <!-- My Info -->
            <div class="quick-info">
                <!-- [D] 로그아웃 시 dl 영역 삭제 -->
                <dl>
                    <dt><b>김기훈</b> 님 환영합니다.</dt>
                    <dd>
                        <span>적립금</span>
                        <strong>2861원</strong>
                    </dd>
                    <dd>
                        <span>쿠폰</span>
                        <strong>1개</strong>
                    </dd>
                    <dd>
                        <span>총 주문금액</span>
                        <strong>88291원</strong>
                    </dd>
                </dl>
                <div class="row button-inline-group">
                    <div class="col-xs-6"><a href="#" class="button">LOGOUT</a></div>
                    <div class="col-xs-6"><a href="#" class="button">PROFILE</a></div>
                </div>
            </div>
            <!-- My Info //end -->
            <!-- Main Category Menu -->
            <!-- [D] 2뎁스, 3뎁스가 있을 경우 해당 li에 child-item 클래스 추가
                해당 메뉴 선택시 li에 selected 클래스 추가 -->
            <div class="main-category">
                <ul class="level-1">
                    <li class="menu-item"><a href="#">basic</a></li>
                    <li class="menu-item child-item">
                        <a href="#">men</a>
                        <ul class="level-2">
                            <li class="child-item">
                                <a href="#">outer</a>
                                <ul class=" level-3">
                                    <li class="selected"><a href="#">all</a></li>
                                    <li><a href="#">coat</a></li>
                                    <li><a href="#">padding</a></li>
                                    <li><a href="#">jacket</a></li>
                                    <li><a href="#">leather</a></li>
                                </ul>
                            </li>
                            <li><a href="#">top</a></li>
                            <li><a href="#">bottom</a></li>
                            <li class="child-item">
                                <a href="#">knit</a>
                                <ul class=" level-3">
                                    <li><a href="#">all</a></li>
                                    <li><a href="#">coat</a></li>
                                    <li><a href="#">padding</a></li>
                                    <li><a href="#">jacket</a></li>
                                    <li><a href="#">leather</a></li>
                                </ul>
                            </li>
                            <li><a href="#">jean</a></li>
                            <li><a href="#">suit</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">etc</a></li>
                            <li><a href="#">sale</a></li>
                        </ul>
                    </li>
                    <li class="menu-item child-item">
                        <a href="#">women's</a>
                        <ul class="level-2">
                            <li class="child-item">
                                <a href="#">outer</a>
                                <ul class=" level-3">
                                    <li><a href="#">all</a></li>
                                    <li><a href="#">coat</a></li>
                                    <li><a href="#">padding</a></li>
                                    <li><a href="#">jacket</a></li>
                                    <li><a href="#">leather</a></li>
                                </ul>
                            </li>
                            <li><a href="#">top</a></li>
                            <li><a href="#">bottom</a></li>
                            <li class="child-item">
                                <a href="#">knit</a>
                                <ul class=" level-3">
                                    <li><a href="#">all</a></li>
                                    <li><a href="#">coat</a></li>
                                    <li><a href="#">padding</a></li>
                                    <li><a href="#">jacket</a></li>
                                    <li><a href="#">leather</a></li>
                                </ul>
                            </li>
                            <li><a href="#">jean</a></li>
                            <li><a href="#">suit</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">etc</a></li>
                            <li><a href="#">sale</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#">coming soon</a></li>
                    <li class="menu-item"><a href="#">celeb</a></li>
                    <li class="menu-item"><a href="#">only you</a></li>
                    <li class="menu-item"><a href="#">notice</a></li>
                    <li class="menu-item"><a href="#">review</a></li>
                    <li class="menu-item"><a href="#">Q &amp; A</a></li>
                    <li class="menu-item"><a href="#">offline</a></li>
                </ul>
            </div>
            <!-- Main Category Menu //end -->
            <!-- Social Link -->
            <div class="link-social">
                <a href="#" title="D-answer" class="brand-logo center-block">
                    <img src="../include/images/brand-logo.png" alt="D-answer">
                </a>
                <ul>
                    <li><a href="#"><i class="icon-instagram-rect"></i></a></li>
                    <li><a href="#"><i class="icon-facebook-rect"></i></a></li>
                </ul>
            </div>
            <!-- Social Link //end -->
            <!-- 최근 본 상품 -->
            <div class="recently-viewed">
                <h3>최근 본 상품</h3>
                <ul>
                    <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                    <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                    <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                    <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                    <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                </ul>
            </div>
            <!-- 최근 본 상품 //end -->
        </div>
        <a href="#" class="menu-close"></a>
        <div class="menu-overlay"></div>
    </div>
    <!-- Sidebar Menu //end -->
</header>