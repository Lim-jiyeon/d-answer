<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container order-complete">
        <h2 class="page-title">주문상품완료</h2>
        <div class="">
            <p class="orderer-info">
                김기훈 님의 주문이 완료되었습니다.<br><br>
                귀하의 주문확인 번호는 201628374829-293784928 입니다.<br>
                귀하의 제품 구입에 따른 적립금 1,180원은<br>
                배송과 함께 바로 적립됩니다.<br>
                입금방법이 무통장입금의 경우 계좌번호를 메모하세요.<br>
                입금 확인 후 상품을 준비하여 배송해 드리겠습니다.
            </p>
        </div>
        <div class="summary">
            <h3 class="third-title">주문내역</h3>
            <!-- 주문내역 -->
            <table class="table table-row-list">
                <colgroup>
                <col class="col-xs-3">
                <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <td colspan="2" class="ordered-info">
                        <a href="#"><b>CO 블랙 롱 튜닉셔츠 <i class="icon-left-strokes"></i></b></a>
                        <span>수량 - 1개</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Size - 48 Color - white
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 주문내역 //end -->
        </div>
        <div class="summary">
            <h3 class="third-title">결제정보</h3>
            <!-- 결제정보 -->
            <table class="table table-row-list">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">결제방식</th>
                    <td>무통장 입금 : <span class="informaion">우리은행 1005-102-632366<br>
                        (예금주 : (주)디에이앤코) 김기훈<br>
                        입금자 : 김기훈</span></td>
                </tr>
                <tr>
                    <th scope="row">금액</th>
                    <td>
                        59,000원 + 배송료 0원 = <span class="primary">59,000원</span><br>
                        (적립금 : 1,180원)
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 결제정보 //end -->
        </div>
        <div class="summary">
            <!-- 배송정보 -->
            <h3 class="third-title">배송정보</h3>
            <table class="table table-row-list get-shipping">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">보내는사람</th>
                    <td>김기훈</td>
                </tr>
                <tr>
                    <th scope="row">받는사람</th>
                    <td>김기훈</td>
                </tr>
                <tr>
                    <th scope="row">연락처1</th>
                    <td>010-9830-1930</td>
                </tr>
                <tr>
                    <th scope="row">연락처2</th>
                    <td>010-9830-1930</td>
                </tr>
                <tr>
                    <th scope="row">배송주소</th>
                    <td>
                        130-030<br>
                        서울 동대문구 청량리동 54-12번지 8층
                    </td>
                </tr>
                <tr>
                    <th scope="row">요청사항</th>
                    <td>
                        부재시 경비실에 맡겨주세요.
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 배송 정보 //end -->
        </div>
        <div class="button-align-center">
            <a href="#" class="button button-primary">주문내역확인하기</a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>