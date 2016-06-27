<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">membership</h2>
            <p class="page-title-sub">회원가입</p>
            <div class="join">
                <div class="member-level">
                    <p>휴대폰 또는 아이핀 인증을 통하여 본인인증을 하셔야 합니다.<br>
                    <strong>인증 버튼을 눌러 본인인증을 진행해 주세요.</strong></p>
                    <a href="#">휴대폰 인증이란?</a>
                    <a href="#">아이핀 서비스란?</a>
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