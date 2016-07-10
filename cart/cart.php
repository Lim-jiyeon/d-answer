<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">cart</h2>
            <p class="page-title-sub">장바구니</p>
            <div class="order cart">
                <h3 class="order-title">장바구니 담긴 상품</h3>
                <div class="order-list">
                    <table class="table table-list">
                        <caption>주문할 상품 리스트</caption>
                        <colgroup>
                            <col class="order-number">
                            <col class="order-product">
                            <col class="order-option">
                            <col class="order-product-name">
                            <col class="order-quantity">
                            <col class="order-saved-money">
                            <col class="order-price">
                            <col class="order-shipping">
                            <col class="order-cancel">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>번호</th>
                            <th>사진</th>
                            <th>옵션</th>
                            <th>제품명</th>
                            <th>수량</th>
                            <th>적립</th>
                            <th>가격</th>
                            <th>배송비</th>
                            <th>취소</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="9">총 구매금액 : 75,080원 = <strong>75,050원</strong> (적립금 1,500원)</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="order-product">
                                <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                            </td>
                            <td class="order-option">
                                <span>color: black</span>
                                <span>size: 46</span>
                            </td>
                            <td><a href="#">차이나카라 포켓 반팔셔츠</a></td>
                            <td class="order-quantity">
                                <input type="text" class="form-control">
                                <a href="#" class="button button-xs button-board">수정</a>
                            </td>
                            <td>590</td>
                            <td class="order-price">59,000원</td>
                            <td>[기본배송조건]</td>
                            <td class="order-cancel">
                                <a href="#" class="button button-xs button-secondary">관심상품</a>
                                <a href="#" class="button button-xs button-secondary">삭제</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="member-level">
                    <span class="level-mark">S</span>
                    <p class="level-explain">김기훈님은 <strong>Silver</strong> 회원입니다.<br>
                    (적립금 적립 + 사용 가능 / 출석체크 적립금 사용 불가능)<br>
                    김기훈 님이 1,000원 이상 구매시 구매금액의 1%를 추가 적립해 드립니다.</p>
                </div>
                <div class="button-align-center">
                    <a href="#" class="button button-lg">주문하기</a>
                    <a href="#" class="button button-lg button-secondary">계속 쇼핑하기</a>
                    <a href="#" class="button button-lg button-secondary">장바구니 비우기</a>
                    <a href="#" class="button button-lg button-secondary">견적서 출력</a>
                </div>
                <div class="order-list interest-list">
                    <table class="table table-list">
                        <caption>관심 상품 리스트</caption>
                        <colgroup>
                            <col class="order-photo">
                            <col class="order-product">
                            <col class="order-quantity">
                            <col class="order-stock">
                            <col class="order-saved-money">
                            <col class="order-price">
                            <col class="order-cart">
                        </colgroup>
                        <thead>
                        <tr>
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
                            <td class="order-photo">
                                <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                            </td>
                            <td class="align-left"><a href="#">차이나카라 포켓 반팔셔츠</a></td>
                            <td class="order-quantity">
                                <input type="text" class="form-control"> 개
                            </td>
                            <td>없음</td>
                            <td>190원</td>
                            <td>옵션변동<br>19,000원</td>
                            <td>
                                <a href="#" class="button button-xs button-secondary">담기</a>
                                <a href="#" class="button button-xs button-secondary">삭제</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>