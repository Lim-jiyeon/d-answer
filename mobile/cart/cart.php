<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container cart">
        <h2 class="page-title">cart</h2>
        <div class="order-product">
            <!-- 쇼핑백 상품 확인 -->
            <ul class="product-list order-product-list">
                <li>
                    <div class="product-info">
                        <div class="checkbox">
                            <input type="checkbox" id="order-product1" checked>
                            <label for="order-product1" class="checkbox-display"></label>
                        </div>
                        <div class="product-image"><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></div>
                        <div class="item-info">
                            <strong class="item-name"><a href="#">CO 블랙 롱 튜닉셔츠</a></strong>
                            <ul class="item-option">
                                <li>Color : 블랙</li>
                                <li>Size : M</li>
                                <li><span>상품가격</span>59,000원</li>
                                <li><span>적립금</span>590원</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-option-button">
                        <input type="tel" class="form-control" value="1">
                        <a href="#" class="button"><i class="icon-up"></i></a>
                        <a href="#" class="button"><i class="icon-down"></i></a>
                        <a href="#" class="button button-primary">수량변경</a>
                    </div>
                </li>
                <li>
                    <div class="product-info">
                        <div class="checkbox">
                            <input type="checkbox" id="order-product2" checked>
                            <label for="order-product2" class="checkbox-display"></label>
                        </div>
                        <div class="product-image"><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></div>
                        <div class="item-info">
                            <strong class="item-name"><a href="#">CO 블랙 롱 튜닉셔츠</a></strong>
                            <ul class="item-option">
                                <li>Color : 블랙</li>
                                <li>Size : M</li>
                                <li><span>상품가격</span>59,000원</li>
                                <li><span>적립금</span>590원</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-option-button">
                        <input type="tel" class="form-control" value="1">
                        <a href="#" class="button"><i class="icon-up"></i></a>
                        <a href="#" class="button"><i class="icon-down"></i></a>
                        <a href="#" class="button button-primary">수량변경</a>
                    </div>
                </li>
            </ul>
            <div class="checkbox">
                <input type="checkbox" id="order-product-all" checked>
                <label for="order-product-all" class="checkbox-display"></label>
                <label for="order-product-all" class="checkbox-label">전체 선택/해제</label>
            </div>
            <div class="button-block-group button-align">
                <a href="#" class="button">선택삭제</a>
                <a href="#" class="button button-primary">전체삭제</a>
            </div>
            <!-- 쇼핑백 상품 확인 //end -->
        </div>
        <div class="cart-totals">
            <h3 class="page-title">amount</h3>
            <!-- 쇼핑백 결제 정보 -->
            <dl class="cart-amount">
                <dt>상품 합계금액</dt>
                <dd>78,000원</dd>
                <dt>적립금</dt>
                <dd>1,560원</dd>
                <dt class="total">총합계금액</dt>
                <dd class="total"><b>79,560</b>원</dd>
            </dl>
            <p class="cart-info">
                배송정보 - 50,000원 미만시 3,000원<br>
                지역별/상품개별배송정책에 따라 변동될 수 있습니다.<br>
                <b>김기훈</b>님은 <b>[Silver]</b>회원입니다.<br>
                (적림금 적립 + 사용 가능 / 출석체크 적립금 사용 불가능)<br>
                김기훈 님이 1,000원 이상 구매시, 구매금액의 <strong>1</strong>%를 <br>
                <strong>추가적</strong>립 해 드립니다.
            </p>
            <div class="button-align">
                <a href="#" class="button button-primary">주문하기</a>
            </div>
            <!-- 쇼핑백 결제 정보 //end -->
        </div>
        <div class="order-product cart-wishlist">
            <h3 class="page-title">wish list</h3>
            <!-- wish list -->
            <ul class="product-list order-product-list">
                <li>
                    <div class="product-info">
                        <div class="checkbox">
                            <input type="checkbox" id="order-product1" checked>
                            <label for="order-product1" class="checkbox-display"></label>
                        </div>
                        <div class="product-image"><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></div>
                        <div class="item-info">
                            <strong class="item-name"><a href="#">CO 블랙 롱 튜닉셔츠</a></strong>
                            <ul class="item-option">
                                <li><span>상품가격</span>59,000원</li>
                                <li><span>적립금</span>590원</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-option-button">
                        <a href="#" class="button button-primary">CART</a>
                    </div>
                </li>
            </ul>
            <!-- wish list //end -->
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>