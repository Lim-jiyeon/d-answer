<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">order information</h2>
            <p class="page-title-sub">회원님의 주문 내역을 상세 조회하실 수 있습니다.</p>
            <div class="order-information">
                <strong class="order-info-text">김기훈 님께서 2016년 07월 02일에 주문하신 내역입니다.</strong>
                <!-- 주문자 정보 -->
                <div class="orderer-info">
                    <h3>주문자 정보</h3>
                    <table class="table table-row-list">
                        <caption>주문자 정보 목록</caption>
                        <colgroup>
                            <col class="col-info">
                            <col class="col-info-content">
                            <col class="col-info">
                            <col class="col-info-content">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">주문번호</th>
                            <td>201603292839-2837102039123</td>
                            <th scope="row">주문일자</th>
                            <td>2016.07.02</td>
                        </tr>
                        <tr>
                            <th scope="row">주문자</th>
                            <td>김기훈</td>
                            <th scope="row">주문서 입금현황</th>
                            <td>미입금</td>
                        </tr>
                        <tr>
                            <th scope="row">주문메모</th>
                            <td colspan="3">test</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 주문자 정보 //end -->
                <!-- 배송지 정보 -->
                <div class="shipping-info">
                    <h3>배송지 정보</h3>
                    <table class="table table-row-list">
                        <caption>배송지 정보 목록</caption>
                        <colgroup>
                            <col class="col-info">
                            <col class="col-info-content">
                            <col class="col-info">
                            <col class="col-info-content">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">배송번호</th>
                            <td>s-123123123-5489172390</td>
                            <th scope="row">송장번호</th>
                            <td>
                                0392819023
                                <a href="#" class="button button-sm">배송추척</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">수취인</th>
                            <td>김기훈</td>
                            <th scope="row">주문서 입금현황</th>
                            <td>미입금</td>
                        </tr>
                        <tr>
                            <th scope="row">주소</th>
                            <td colspan="3">130-030 : 서울 동대문구 청량리동 54-12번지 2층</td>
                        </tr>
                        <tr>
                            <th scope="row">배송메세지</th>
                            <td colspan="3">부재시 경비실에 맡겨주세요.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 배송지 정보 //end -->
                <!-- 주문상품정보 -->
                <div class="order-product-info">
                    <h3>주문상품정보</h3>
                    <table class="table table-list table-list-border">
                        <caption>주문상품정보 목록</caption>
                        <colgroup>
                            <col class="col-order-info-img">
                            <col class="col-order-info">
                            <col class="col-order-number">
                            <col class="col-amount">
                            <col class="col-price">
                            <col class="col-mileage">
                            <col class="col-state">
                            <col class="col-shipping-number">
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">주문상품정보</th>
                            <th scope="col">상품별주문번호</th>
                            <th scope="col">수량</th>
                            <th scope="col">가격</th>
                            <th scope="col">적립금</th>
                            <th scope="col">처리상태</th>
                            <th scope="col">배송번호</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="8">170,000원(상품구매금액)-8.500(할인/추가금액) = <strong>161,500원</strong></td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td class="order-info-img">
                                <img src="../include/images/temp/temp-product.jpg" alt="">
                            </td>
                            <td class="order-info">
                                <a href="#">women 오버사이즈<br>트렌치 코트</a>
                            </td>
                            <td>2016938293123-<br>2938129389_[1]</td>
                            <td class="order-amount">
                                <select class="selectbox">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </td>
                            <td class="order-product-price">170.000원</td>
                            <td>1.610</td>
                            <td>거래완료</td>
                            <td>s-123123123-<br>5489172390</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 주문상품정보 //end -->
                <!-- 결제정보 -->
                <div class="order-payment-info">
                    <h3>결제정보</h3>
                    <table class="table table-list table-list-bg">
                        <caption>결제정보 목록</caption>
                        <colgroup>
                            <col class="col-payment-option">
                            <col class="col-payment-total">
                            <col class="col-payment-detail">
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col">결제방법</th>
                            <th scope="col">결제금액</th>
                            <th scope="col">세부내역</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>사용한 적립금</td>
                            <td>원</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>사용한 예치금</td>
                            <td>원</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>카드</td>
                            <td>161,500원(입금완료)</td>
                            <td>IN:INIPHPCARDMSDANSWER102150910150291298323</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 결제정보 //end -->
                <!-- 결제정보 -->
                <div class="order-payment-info">
                    <h3>결제정보</h3>
                    <table class="table table-list table-list-bg">
                        <caption>결제정보 목록</caption>
                        <colgroup>
                            <col class="col-payment-info">
                            <col class="col-payment-info">
                            <col class="col-payment-info">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">금액</th>
                            <th scope="col">적립금</th>
                            <th scope="col">세부내역</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>기간할인</td>
                            <td>-8,500원</td>
                            <td>0원</td>
                            <td>[women] lc 오버사이즈 레인 트렌치코트 2015912838-123098123_1[1]
기간할인 : 9/10 신상품 할인-ALL</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 결제정보 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>