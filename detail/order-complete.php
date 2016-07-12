<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">order sheet</h2>
            <p class="page-title-sub">주문정보를 작성하신 후 주문하기를 눌러주세요</p>
            <div class="order order-sheet order-complete">
                <!-- 주문한 상품 -->
                <h3 class="order-title">주문한 상품</h3>
                <div class="order-list">
                    <table class="table table-list">
                        <caption>주문한 상품 리스트</caption>
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
                            <td></td>
                            <td class="align-left order-option">Silver</td>
                            <td colspan="4">(적립금액_270원)</td>
                        </tr>
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
                <!-- 주문한 상품 //end -->
                <!-- 결제방법 -->
                <div class="orderer-info">
                    <h3 class="order-title">결제방법</h3>
                    <div class="order-complete-payment">
                        무통장 입금 : <strong>우리은행 1005-102-632366 (예금주:(주)디에이앤코) 김기훈</strong><br>
                        (입금확인 후 배송이 됩니다.)
                    </div>
                </div>
                <!-- 결제방법 //end -->
                <!-- 주문자 정보 -->
                <div class="orderer-info">
                    <h3 class="order-title">주문자 정보</h3>
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
                            <th scope="row">이름</th>
                            <td colspan="3">김기훈</td>
                        </tr>
                        <tr>
                            <th scope="row">E-mail</th>
                            <td>superb03@naver.com</td>
                            <th scope="row">연락처</th>
                            <td>010-9830-1930</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 주문자 정보 //end -->
                <!-- 배송지 정보 -->
                <div class="orderer-info shipping-info">
                    <h3 class="order-title">배송지 정보</h3>
                    <table class="table table-row-list">
                        <caption>배송지 정보 목록</caption>
                        <colgroup>
                            <col class="col-info">
                            <col>
                            <col class="col-info">
                            <col>
                            <col class="col-info">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row">이름</th>
                            <td colspan="5">김기훈</td>
                        </tr>
                        <tr>
                            <th scope="row">주소</th>
                            <td>서울 동대문구 청량리동 54-12번지 2층</td>
                            <th scope="row">연락처1</th>
                            <td>010-9830-1930</td>
                            <th scope="row">연락처2</th>
                            <td>010-9830-1930</td>
                        </tr>
                        <tr>
                            <th scope="row" class="align-right">주문메세지<br>(100자내외)</th>
                            <td colspan="5">부재시 경비실에 맡겨주세요.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 배송지 정보 //end -->
                <div class="button-align-center">
                    <a href="#" class="button button-lg button-secondary">프린트 하기</a>
                    <a href="#" class="button button-lg">주문확인</a>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>