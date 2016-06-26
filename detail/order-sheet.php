<?php
    include ("../header/header.php");
?>

    <div class="container">
        <h2>order sheet</h2>
        <p>주문정보를 작성하신 후 주문하기를 눌러주세요</p>
        <div class="order-sheet">
            <h3>주문할 상품</h3>
            <div class="order-list">
                <table class="table table-list">
                    <caption>주문할 상품 리스트</caption>
                    <colgroup>
                        <col class="">
                        <col class="">
                        <col class="">
                        <col class="">
                        <col class="">
                        <col class="">
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
                        <td>결제금액 : 75,080원 = <strong>75,050원</strong> (적립금 1,500원)</td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                        </td>
                        <td>
                            <span>color: black</span>
                            <span>size: 46</span>
                        </td>
                        <td><a href="#">린넨 스탠드카라 포켓셔츠</a></td>
                        <td>1개</td>
                        <td>59,000원</td>
                        <td>590</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><img src="../include/images/temp/temp-order-sheet-img.jpg" alt="상품 이미지"></a>
                        </td>
                        <td>
                            <span>color: black</span>
                            <span>size: 46</span>
                        </td>
                        <td><a href="#">린넨 스탠드카라 포켓셔츠</a></td>
                        <td>1개</td>
                        <td>59,000원</td>
                        <td>590</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="member-level">
                <span></span>
                <p>김기훈님은 <strong>Silver</strong> 회원입니다.<br>
                (적립금 적립 + 사용 가능 / 출석체크 적립금 사용 불가능)<br>
                김기훈 님이 1,000원 이상 구매시 구매금액의 1%를 추가 적립해 드립니다.</p>
            </div>
            <div class="orderer-input">
                <div class="orderer-info">
                    <table>
                        <caption></caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
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
                            <td><input type="text" id="orderer-phone" class="form-control"> - <input type="text" class="form-control"> - <input type="text" class="form-control"></td>
                        </tr>
                        </tbody>
                    </table>
                    <label><input type="radio"> 주문자 정보 입력</label>
                </div>
                <div class="recipient-info">
                    <table>
                        <caption></caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row"><label for="recipient-name">이름</label></th>
                            <td><input type="text" id="recipient-name" class="form-control"></td>
                            <th scope="row"><label for="recipient-phone">연락처1</label></th>
                            <td><input type="text" id="recipient-phone" class="form-control"></td>
                            <th scope="row"><label for="recipient-phone2">연락처2</label></th>
                            <td><input type="text" id="recipient-phone2" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="orderer-email">주소</label></th>
                            <td colspan="3">
                                <div>
                                    <label><input type="radio" name="recipient-address"> 자택</label>
                                    <label><input type="radio" name="recipient-address"> 회사</label>
                                    <label><input type="radio" name="recipient-address"> 최근 배송지</label>
                                    <label><input type="radio" name="recipient-address"> 신규 배송지</label>
                                </div>
                                <div>
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                    <a href="#" class="button button-sm">우편번호검색</a>
                                </div>
                                <div>
                                    <input type="text" class="form-control">
                                    <span>[기본주소]</span>
                                </div>
                                <div>
                                    <input type="text" class="form-control">
                                    <span>[나머지주소]</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">주문메세지<br>[100자내외]</th>
                            <td>
                                <textarea cols="40" rows="3" id="register-content" class="form-control"></textarea>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <label><input type="radio"> 주문자 정보 입력</label>
                </div>
                <div class="saved-money">
                    <h4>적립금 사용</h4>
                    <div>
                        <input type="text" class="form-control"> 원
                        <span></span>
                        <input type="text" class="form-control"> 원 [사용가능 적립금]
                    </div>
                </div>
                <div class="coupon">
                    <h4>쿠폰사용</h4>
                    <div>
                        <input type="text" class="form-control">
                        <a href="#" class="button button-sm">쿠폰선택</a>
                        <span>보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.</span>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="button">주문하기</a>
                <a href="#" class="button button-secondary">주문취소</a>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>