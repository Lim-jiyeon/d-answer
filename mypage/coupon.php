<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">coupon</h2>
            <p class="page-title-sub">보유하신 쿠폰목록입니다.</p>
            <div class="coupon">
                <!-- 나의 쿠폰 리스트 -->
                <p class="button-align-right table-top"><a href="#" class="button button-sm">쿠폰 번호 등록</a></p>
                <table class="table table-list">
                    <caption>나의 쿠폰 내역</caption>
                    <colgroup>
                        <col class="col-coupon-num">
                        <col class="col-coupon-name">
                        <col class="col-coupon-item">
                        <col class="col-use-money">
                        <col class="col-discount">
                        <col class="col-coupon-date">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">쿠폰번호</th>
                            <th scope="col">쿠폰이름</th>
                            <th scope="col">쿠폰전용품목</th>
                            <th scope="col">사용가능금액</th>
                            <th scope="col">할인액[률]/적립[률]</th>
                            <th scope="col">사용기간</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>36141412</td>
                        <td>시원한 여름 디앤써와 함께하는 5천원 할인쿠폰</td>
                        <td>전상품<br>
                        [단,기간 할인상품 제외]</td>
                        <td>제한없음</td>
                        <td>할인액 5,000원</td>
                        <td class="align-right">2016-06-15<br>
                        ~ 2016-06-30</td>
                    </tr>
                    </tbody>
                </table>
                <!-- 나의 쿠폰 리스트 //end -->
                <dl class="caption">
                    <dt>주문 할인쿠폰 적용방법</dt>
                    <dd>주문서 쿠폰 선택에서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액[또는 적립금액]이 나타납니다.<br>
                        [정률할인[적립]의 경우, 할인율[적립률]이 나타납니다.]
                    </dd>
                    <dt>쿠폰 사용시 유의사항</dt>
                    <dd>쿠폰마다 사용 가능 금액과 사용기한이 정해져 있으며, 1개 주문서에 1개의 쿠폰만을 사용하실 수 있습니다.<br>
                        쿠폰을 사용한 주문 후 반품/환불/취소의 경우 한번 사용하신 쿠폰은 다시 사용하실 수 없습니다.<br>
                        쿠폰 적용 품목 및 카테고리가 제한된 경우 해당 품목 또는 카테고리에서만 쿠폰을 사용하실 수 있습니다.<br>
                        할인/적립 쿠폰은 적립금할인 등을 제외한 실제 결제금액에 적용됩니다.<br>
                        모바일 아이콘 표시 쿠폰은 모바일에서만 사용이 가능합니다.
                    </dd>
                </dl>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>