<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">order sheet</h2>
            <p class="page-title-sub">주문정보를 작성하신 후 주문하기를 눌러주세요</p>
            <div class="order order-sheet">
                <h3 class="order-title">주문할 상품</h3>
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
                            <td>1개</td>
                            <td class="order-price">59,000원</td>
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
                <div class="orderer-input orderer-guest">
                    <div class="orderer-info">
                        <h4 class="orderer-info-title">주문자 정보</h4>
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
                        <h4 class="recipient-info-title">주문자 정보 입력</h4>
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
                    <div class="Personal-policy">
                        <h3 class="agree-title">개인정보 수집에 대한 동의</h3>
                        <ul class="tabs">
                            <li class="tab">
                                <input type="radio" id="agree-policy-list" name="join-agree" checked>
                                <label for="agree-policy-list">수집하는 개인정보 항목</label>
                                <div class="tab-content">
                                    <textarea>
                                        1111111111
                                        인터넷 쇼핑몰 『(주)디에이앤코 사이버 몰』회원 약관
                                        제1조(목적)
                                        이 약관은 (주)디에이앤코 회사(전자상거래 사업자)가 운영하는 (주)디에이앤코 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
                                        ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
                                    </textarea>
                                </div>
                            </li>
                            <li class="tab">
                                <input type="radio" id="agree-policy-purpose" name="join-agree">
                                <label for="agree-policy-purpose">개인정보의 수집 이용목적</label>
                                <div class="tab-content">
                                    <textarea>
                                        2222222222
                                        인터넷 쇼핑몰 『(주)디에이앤코 사이버 몰』회원 약관
                                        제1조(목적)
                                        이 약관은 (주)디에이앤코 회사(전자상거래 사업자)가 운영하는 (주)디에이앤코 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
                                        ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
                                    </textarea>
                                </div>
                            </li>
                            <li class="tab">
                                <input type="radio" id="agree-policy-useDate" name="join-agree">
                                <label for="agree-policy-useDate">개인정보의 보유 및 이용기간</label>
                                <div class="tab-content">
                                    <textarea>
                                        33333333333
                                        인터넷 쇼핑몰 『(주)디에이앤코 사이버 몰』회원 약관
                                        제1조(목적)
                                        이 약관은 (주)디에이앤코 회사(전자상거래 사업자)가 운영하는 (주)디에이앤코 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
                                        ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
                                    </textarea>
                                </div>
                            </li>
                        </ul>
                        <label class="agree-check"><input type="checkbox"> 정보수집에 동의합니다.</label>
                        <label class="agree-check"><input type="checkbox"> 동의하지 않습니다.</label>
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