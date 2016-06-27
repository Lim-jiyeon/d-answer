<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">order sheet</h2>
            <p class="page-title-sub">주문정보를 작성하신 후 주문하기를 눌러주세요</p>
            <div class="order-sheet">
                <h3 class="order-sheet-title">주문할 상품</h3>
                <div class="order-list">
                    <table class="table table-list">
                        <caption>주문할 상품 리스트</caption>
                        <colgroup>
                            <col class="order-product">
                            <col class="order-option">
                            <col class="order-product-name">
                            <col class="order-quantity">
                            <col class="order-price">
                            <col class="order-saved-money">
                        </colgroup>
                        <thead>
                        <tr>
                            <th></th>
                            <th>옵션</th>
                            <th>구입상품명</th>
                            <th>수량</th>
                            <th>가격</th>
                            <th>적립</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="6">결제금액 : 75,080원 = <strong>75,050원</strong> (적립금 1,500원)</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td class="order-product">
                                <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                            </td>
                            <td class="order-option">
                                <span>color: black</span>
                                <span>size: 46</span>
                            </td>
                            <td><a href="#">린넨 스탠드카라 포켓셔츠</a></td>
                            <td class="order-price">1개</td>
                            <td>59,000원</td>
                            <td>590</td>
                        </tr>
                        <tr>
                            <td class="order-product">
                                <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                            </td>
                            <td class="order-option">
                                <span>color: black</span>
                                <span>size: 46</span>
                            </td>
                            <td><a href="#">린넨 스탠드카라 포켓셔츠</a></td>
                            <td>1개</td>
                            <td class="order-price">
                                <span>59,000원</span>
                                <span>-2,600원</span>
                                <span>49,400원</span>
                            </td>
                            <td>590</td>
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
                <div class="orderer-input">
                    <div class="orderer-info">
                        <table class="table table-row-list">
                            <caption></caption>
                            <colgroup>
                                <col class="col-recipient-info">
                                <col>
                                <col class="col-recipient-info">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <th scope="row">이름</th>
                                <td colspan="3">김기훈</td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="orderer-email">E-mail</label></th>
                                <td><input type="text" id="orderer-email" class="form-control"></td>
                                <th scope="row" for="orderer-phone">연락처2</th>
                                <td class="cell-phone">
                                    <input type="text" id="orderer-phone" class="form-control"> -
                                    <input type="text" class="form-control"> -
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <label class="check-orderer"><input type="radio"> 주문자 정보 입력</label>
                    </div>
                    <div class="recipient-info">
                        <table class="table table-row-list">
                            <caption></caption>
                            <colgroup>
                                <col class="col-recipient-info">
                                <col>
                                <col class="col-recipient-info">
                                <col>
                                <col class="col-recipient-info">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <th scope="row"><label for="recipient-name">이름</label></th>
                                <td><input type="text" id="recipient-name" class="form-control"></td>
                                <th scope="row"><label for="recipient-phone">연락처1</label></th>
                                <td class="cell-phone">
                                    <input type="text" id="recipient-phone" class="form-control"> -
                                    <input type="text" class="form-control"> -
                                    <input type="text" class="form-control">
                                </td>
                                <th scope="row"><label for="recipient-phone2">연락처2</label></th>
                                <td class="cell-phone">
                                    <input type="text" id="recipient-phone2" class="form-control"> -
                                    <input type="text" class="form-control"> -
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="orderer-email">주소</label></th>
                                <td colspan="5" class="cell-address">
                                    <div class="select-address">
                                        <label><input type="radio" name="recipient-address"> 자택</label>
                                        <label><input type="radio" name="recipient-address"> 회사</label>
                                        <label><input type="radio" name="recipient-address"> 최근 배송지</label>
                                        <label><input type="radio" name="recipient-address"> 신규 배송지</label>
                                    </div>
                                    <div class="zip-code-input">
                                        <input type="text" class="form-control"> -
                                        <input type="text" class="form-control">
                                        <a href="#" class="button button-sm">우편번호검색</a>
                                    </div>
                                    <div class="address-input">
                                        <input type="text" class="form-control">
                                        <span>[기본주소]</span>
                                    </div>
                                    <div class="address-input">
                                        <input type="text" class="form-control">
                                        <span>[나머지주소]</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">주문메세지<br>[100자내외]</th>
                                <td colspan="5" class="order-message">
                                    <textarea cols="40" rows="3" id="register-content" class="form-control"></textarea>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="saved-money">
                        <h4 class="saved-money-title">적립금 사용</h4>
                        <div class="saved-money-box">
                            <input type="text" class="form-control"> 원
                            <span class="arrow"></span>
                            <input type="text" class="form-control"> 원 [사용가능 적립금]
                        </div>
                    </div>
                    <div class="coupon">
                        <h4 class="coupon-title">쿠폰사용</h4>
                        <div class="coupon-box">
                            <input type="text" class="form-control">
                            <a href="#" class="button button-sm">쿠폰선택</a>
                            <span class="subscript">보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.</span>
                        </div>
                    </div>
                </div>
                <div class="button-align-center">
                    <a href="#" class="button button-lg">주문하기</a>
                    <a href="#" class="button button-lg button-secondary">주문취소</a>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>