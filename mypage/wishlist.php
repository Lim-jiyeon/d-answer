<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">wish list</h2>
            <p class="page-title-sub">관심상품</p>
            <div class="order wishlist">
                <div class="order-list">
                    <table class="table table-list">
                        <caption>관심 상품 리스트</caption>
                        <colgroup>
                            <col class="order-check">
                            <col class="order-product">
                            <col class="order-product-name">
                            <col class="order-quantity">
                            <col class="order-stock">
                            <col class="order-saved-money">
                            <col class="order-price">
                            <col class="order-cart">
                        </colgroup>
                        <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>사진</th>
                            <th>상품명</th>
                            <th>수량</th>
                            <th>재고</th>
                            <th>적립금</th>
                            <th>가격</th>
                            <th>장바구니</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="order-product">
                                <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                            </td>
                            <td><a href="#">차이나카라 포켓 반팔셔츠</a></td>
                            <td class="order-quantity">
                                <input type="text" class="form-control"> 개
                            </td>
                            <td>없음</td>
                            <td>590원</td>
                            <td>옵션변동<br>19,000원</td>
                            <td class="order-cart">
                                <a href="#" class="button button-xs button-secondary">담기</a>
                                <a href="#" class="button button-xs button-secondary">삭제</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="button-align-left">
                    <a class="button button-sm button-secondary">선택삭제</a>
                </div>
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
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>