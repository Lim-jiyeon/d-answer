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
                지역별/상품개별배송정책에 따라 변동될 수 있습니다.
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
        </div>
        <div class="checkout">
            <h3 class="secondary-title">배송 정보</h3>
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
        <div class="checkout terms-of-use">
            <h3 class="secondary-title">이용약관</h3>
            <!-- 이용약관 -->
            <ul class="tabs">
                <li class="tab">
                    <input type="radio" id="agree-terms-of-use" name="join-terms-of-use" checked>
                    <label for="agree-terms-of-use" class="tab-label agree-policy-list">수집하는 항목</label>
                    <div class="tab-content">
                        인터넷 쇼핑몰 (주)디에이앤코 사이버 몰 회원 약관<br><br>
                        제1조(목적)
                        이 약관은 (주)디에이앤코 회사(전자상거래 사업자)가 운영하는 (주)디에이앤코 사이버 몰(이하&quot;몰&quot;이라 한다)
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
            </ul>
            <div class="checkbox">
                <input type="checkbox" id="terms-of-use-agree" checked>
                <label for="terms-of-use-agree" class="checkbox-display"></label>
                <label for="terms-of-use-agree" class="checkbox-label primary">동의함</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="terms-of-use-disagree">
                <label for="terms-of-use-disagree" class="checkbox-display"></label>
                <label for="terms-of-use-disagree" class="checkbox-label primary">동의안함</label>
            </div>
            <!-- 이용약관 //end -->
        </div>
        <div class="checkout privacy-policy">
            <h3 class="secondary-title">개인정보 수집 이용안내</h3>
            <!-- 개인정보 수집 이용안내 -->
            <ul class="tabs tabs-content-unlimited">
                <li class="tab">
                    <input type="radio" id="agree-policy-list" name="join-agree" checked>
                    <label for="agree-policy-list" class="tab-label agree-policy-list">수집하는 항목</label>
                    <div class="tab-content">
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해<br>
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해<br>
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
                <li class="tab">
                    <input type="radio" id="agree-policy-purpose" name="join-agree">
                    <label for="agree-policy-purpose" class="tab-label agree-policy-purpose">수집・이용 목적</label>
                    <div class="tab-content">
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
                <li class="tab">
                    <input type="radio" id="agree-policy-useDate" name="join-agree">
                    <label for="agree-policy-useDate" class="tab-label agree-policy-useDate">보유 및 이용기간</label>
                    <div class="tab-content">
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
            </ul>
            <div class="checkbox">
                <input type="checkbox" id="privacy-policy-agree" checked>
                <label for="privacy-policy-agree" class="checkbox-display"></label>
                <label for="privacy-policy-agree" class="checkbox-label primary">동의함</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="privacy-policy-disagree">
                <label for="privacy-policy-disagree" class="checkbox-display"></label>
                <label for="privacy-policy-disagree" class="checkbox-label primary">동의안함</label>
            </div>
            <!-- 개인정보 수집 이용안내 //end -->
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