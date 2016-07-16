<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">cs center</h2>
            <p class="page-title-sub">사이트 이용 시 궁금하신 점은 아래 카테고리에서 확인이 가능합니다.</p>
            <div class="cs-center">
                <ul class="cs-menu">
                    <li><a href="#">notice</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li class="current"><a href="#">review</a></li>
                    <li><a href="#">information</a></li>
                    <li><a href="#">delivery</a></li>
                    <li><a href="#">membership</a></li>
                </ul>
                <h3 class="cs-title">review</h3>
                <p class="cs-title-sub">디앤써 - 상품 후기입니다.</p>
                <!-- 상품후기 리스트 -->
                <div class="review-list">
                    <table class="table table-list">
                        <caption>디앤써 상품후기 목록</caption>
                        <colgroup>
                            <col class="col-review-image">
                            <col class="col-review-product">
                            <col class="col-review-member">
                            <col class="col-review-date">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">이미지</th>
                                <th scope="col">상품명/상품리뷰</th>
                                <th scope="col">작성자</th>
                                <th scope="col">등록일</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="review-preview">
                            <td class="review-image"><img src="../include/images/temp/temp-product.jpg"></td>
                            <td class="review-product">
                                <a href="#">
                                    <strong>상품명 - slp 스페이스쉽 카모야상</strong>
                                    184/77 48사이즈 옷 너무 마음에 들어요 최고 자수퀄
                                    <i class="icon icon-camera"></i>
                                </a>
                            </td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                        </tr>
                        <tr class="review-view">
                            <td colspan="4" class="align-left">
                                <div class="review-content">
                                    <img src="../include/images/temp/temp-product.jpg">
                                    <p>187에 45키로 인데 옷이 너무 이쁘고 자수퀄 굉장합니다</p>
                                </div>
                                <div class="review-reply">
                                    <i class="icon icon-reply"></i>
                                    <i class="icon-badge">reply</i>
                                    이 제품의 특징인 과하지도 부족하지도 않은 적적한 핏의 느낌으로 편안하면서도 실용성을 살린 장점을 지닌 아이템입니다^^
                                </div>
                            </td>
                        </tr>
                        <tr class="review-preview">
                            <td class="review-image"><img src="../include/images/temp/temp-product.jpg"></td>
                            <td class="review-product">
                                <a href="#">
                                    <strong>상품명 - slp 스페이스쉽 카모야상</strong>
                                    184/77 48사이즈 옷 너무 마음에 들어요 최고 자수퀄
                                    <i class="icon icon-camera"></i>
                                </a>
                            </td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                        </tr>
                        <tr class="review-view">
                            <td colspan="4" class="align-left">
                                <div class="review-content">
                                    <img src="../include/images/temp/temp-product.jpg">
                                    <p>187에 45키로 인데 옷이 너무 이쁘고 자수퀄 굉장합니다</p>
                                </div>
                                <div class="review-reply">
                                    <i class="icon icon-reply"></i>
                                    <i class="icon-badge">reply</i>
                                    이 제품의 특징인 과하지도 부족하지도 않은 적적한 핏의 느낌으로 편안하면서도 실용성을 살린 장점을 지닌 아이템입니다^^
                                </div>
                            </td>
                        </tr>
                        <tr class="review-preview">
                            <td class="review-image"><img src="../include/images/temp/temp-product.jpg"></td>
                            <td class="review-product">
                                <a href="#">
                                    <strong>상품명 - slp 스페이스쉽 카모야상</strong>
                                    184/77 48사이즈 옷 너무 마음에 들어요 최고 자수퀄
                                    <i class="icon icon-camera"></i>
                                </a>
                            </td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                        </tr>
                        <tr class="review-view">
                            <td colspan="4" class="align-left">
                                <div class="review-content">
                                    <img src="../include/images/temp/temp-product.jpg">
                                    <p>187에 45키로 인데 옷이 너무 이쁘고 자수퀄 굉장합니다</p>
                                </div>
                                <div class="review-reply">
                                    <i class="icon icon-reply"></i>
                                    <i class="icon-badge">reply</i>
                                    이 제품의 특징인 과하지도 부족하지도 않은 적적한 핏의 느낌으로 편안하면서도 실용성을 살린 장점을 지닌 아이템입니다^^
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- Paginate -->
                    <div class="paginate">
                        <a href="#" class="arrow-page prev-first"></a>
                        <a href="#" class="arrow-page prev"></a>
                        <div class="number">
                            <strong class="selected">1</strong>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                        </div>
                        <a href="#" class="arrow-page next"></a>
                        <a href="#" class="arrow-page next-last"></a>
                    </div>
                    <!-- Paginate //end -->
                </div>
                <!-- 상품후기 리스트 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>