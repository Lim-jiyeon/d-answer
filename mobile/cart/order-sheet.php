<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container order-sheet">
        <h2 class="page-title">written order</h2>
        <div class="order-product">
            <!-- 주문 상품 확인 -->
            <ul class="product-list order-product-list">
                <li>
                    <div class="product-info">
                        <div class="product-image"><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></div>
                        <div class="item-info">
                            <strong class="item-name"><a href="#">CO 블랙 롱 튜닉셔츠</a></strong>
                            <ul class="item-option">
                                <li>Color : 블랙</li>
                                <li>Size : M</li>
                                <li>
                                    <dl>
                                        <dt>상품가격</dt>
                                        <dd>59,000원</dd>
                                        <dt>적립금</dt>
                                        <dd>590원</dd>
                                    </dl>
                                </li>
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
                        <div class="product-image"><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></div>
                        <div class="item-info">
                            <strong class="item-name"><a href="#">CO 블랙 롱 튜닉셔츠</a></strong>
                            <ul class="item-option">
                                <li>Color : 블랙</li>
                                <li>Size : M</li>
                                <li>
                                    <dl>
                                        <dt>상품가격</dt>
                                        <dd>59,000원</dd>
                                        <dt>적립금</dt>
                                        <dd>590원</dd>
                                    </dl>
                                </li>
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
            <!-- 주문 상품 확인 //end -->
            <p class="member-order-info">
                배송정보 - 50,000원 미만시 3,000원<br>
                지역별/상품개별배송정책에 따라 변동될 수 있습니다.<br>
                <b>김기훈</b>님은 <b>[Silver]</b>회원입니다.<br>
                (적림금 적립 + 사용 가능 / 출석체크 적립금 사용 불가능)<br>
                김기훈 님이 1,000원 이상 구매시, 구매금액의 <strong>1</strong>%를 <br>
                <strong>추가적</strong>립 해 드립니다.
            </p>
        </div>
        <div class="checkout">
            <h3 class="secondary-title">주문자정보</h3>
            <!-- 주문자정보 -->
            <table class="table table-row-list">
                <colgroup>
                <col class="col-xs-3">
                <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">이름</th>
                    <td>김기훈</td>
                </tr>
                <tr>
                    <th scope="row">연락처</th>
                    <td><input type="tel" class="form-control" value="01098301930"></td>
                </tr>
                <tr>
                    <th scope="row">이메일</th>
                    <td><input type="email" class="form-control" value="superb03@naver.com"></td>
                </tr>
                </tbody>
            </table>
            <!-- 주문자정보 //end -->
            <!-- 배송 정보 -->
            <table class="table table-row-list get-shipping">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <td colspan="2">
                        <div class="checkbox-big">
                            <input type="checkbox" id="same-order-name" checked>
                            <label for="same-order-name" class="checkbox-label"><b>주문고객정보와 동일</b></label>
                            <label for="same-order-name" class="checkbox-display"></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="checkbox-big">
                                    <input type="checkbox" id="home">
                                    <label for="home" class="checkbox-label">자택</label>
                                    <label for="home" class="checkbox-display"></label>
                                </div>
                            </div>
                            <div class="col-xs-2"></div>
                            <div class="col-xs-5 col-lg-pull-2">
                                <div class="checkbox-big">
                                    <input type="checkbox" id="company">
                                    <label for="company" class="checkbox-label">회사</label>
                                    <label for="company" class="checkbox-display"></label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="checkbox-big">
                                    <input type="checkbox" id="recently-shipping">
                                    <label for="recently-shipping" class="checkbox-label">최근 배송지</label>
                                    <label for="recently-shipping" class="checkbox-display"></label>
                                </div>
                            </div>
                            <div class="col-xs-2"></div>
                            <div class="col-xs-5 col-lg-pull-2">
                                <div class="checkbox-big">
                                    <input type="checkbox" id="new-shipping">
                                    <label for="new-shipping" class="checkbox-label">신규 배송지</label>
                                    <label for="new-shipping" class="checkbox-display"></label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">받으실분</th>
                    <td>김기훈</td>
                </tr>
                <tr>
                    <th scope="row">우편번호</th>
                    <td>
                        <div class="form-group input-group">
                            <div>
                                <input type="tel" value="130" class="form-control">
                            </div>
                            <div class="input-group-addon hyphen">-</div>
                            <div>
                                <input type="tel" value="080" class="form-control">
                            </div>
                        </div>
                        <div class="button-align-center">
                            <a href="#" class="button button-primary">우편번호찾기</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">주소</th>
                    <td><input type="text" class="form-control" value="서울 동대문구 청량리동"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" value="54-12번지 8층"></td>
                </tr>
                <tr>
                    <th scope="row">연락처</th>
                    <td><input type="tel" class="form-control" value="01098301930"></td>
                </tr>
                <tr>
                    <th scope="row">주문메세지</th>
                    <td>
                        <textarea cols="10" rows="4" class="form-control"></textarea>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 배송 정보 //end -->
        </div>
        <div class="checkout">
            <h3 class="secondary-title">결제정보</h3>
            <!-- 결제정보 -->
            <table class="table table-row-list">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">결제내역</th>
                    <td><b class="primary">97,000</b>원 = <b class="primary">97,000</b>원 (적립금 1,940)</td>
                </tr>
                <tr>
                    <th scope="row">적립금</th>
                    <td class="saved">
                        <input type="tel" class="form-control" value="0"> 원
                        <p class="notify">내적립금 2,861원 / 10,000원이상 사용가능</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 결제정보 //end -->
        </div>
        <div class="checkout total-payment">
            <h3 class="secondary-title">결제</h3>
            <!-- 결제 -->
            <table class="table table-row-list">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">
                        <div class="checkbox-big">
                            <input type="checkbox" id="without-bankbook">
                            <label for="without-bankbook" class="checkbox-label">
                                <i class="icon-bank"></i>
                                <p>무통장</p>
                            </label>
                            <label for="without-bankbook" class="checkbox-display"></label>
                        </div>
                    </th>
                    <td>
                        <label for="depositor">입금자명</label>
                        <input type="text" class="form-control" id="depositor">
                        <label for="bank-account">계좌</label>
                        <div class="selectbox">
                            <strong class="selectbox-value">우리은행 1005-102-632366</strong>
                            <select onchange="selectboxEvent(this);" id="bank-account">
                                <option value="우리은행 1005-102-632366">우리은행 1005-102-632366</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                        <p class="notify">결제방식별 할인은 결제시에 반영됩니다.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="checkbox-big">
                            <input type="checkbox" id="credit-card">
                            <label for="credit-card" class="checkbox-label">
                                <i class="icon-card"></i>
                                <p>신용카드</p>
                            </label>
                            <label for="credit-card" class="checkbox-display"></label>
                        </div>
                    </th>
                    <td>
                        <p>결제방식별 할인은 결제시에 반영됩니다.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="checkbox-big">
                            <input type="checkbox" id="cellphone">
                            <label for="cellphone" class="checkbox-label">
                                <i class="icon-cellphone"></i>
                                <p>휴대폰요금결제</p>
                            </label>
                            <label for="cellphone" class="checkbox-display"></label>
                        </div>
                    </th>
                    <td>
                        <p>결제 후, 핸드폰 요금청구서에 &#39;소액결제&#39;로 표시됩니다.<br>
                        결제방식별 할인은 결제시에 반영됩니다.</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="payment-agree">
                <div class="checkbox-big">
                    <input type="checkbox" id="new-shipping" checked>
                    <label for="new-shipping" class="checkbox-display"></label>
                    <label for="new-shipping" class="checkbox-label">상기 결제정보를 확인하였으며, 구매진행에 동의합니다.</label>
                </div>
            </div>
            <!-- 결제 //end -->
        </div>
        <div class="button-block-group button-align">
            <a href="#" class="button button-primary">결제하기</a>
            <a href="#" class="button">이전</a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>