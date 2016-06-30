<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">mileage</h2>
            <p class="page-title-sub">고객님의 사용가능 적립금 금액 입니다.</p>
            <p class="page-explain">- 적립된 금액이 10,000원 이상 누적되었을 때, 사용하실 수 있습니다.<br>
            - 결제 시 적립금 사용 여부를 확인할 수 있는 안내문이 나옵니다.</p>
            <div class="mileage">
                <ul class="my-mileage">
                    <li>
                        <span>총 보유 적립금액</span>
                        <strong><em>2,861</em>원</strong>
                    </li>
                    <li>
                        <span>출석체크 누적 적립금액</span>
                        <strong>0원</strong>
                    </li>
                </ul>
                <!-- 나의 예치금 리스트 -->
                <h3 class="table-title">적립금 내역</h3>
                <table class="table table-list">
                    <caption>나의 적럽금 내역</caption>
                    <colgroup>
                        <col class="col-date">
                        <col>
                        <col class="col-money">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">날짜</th>
                            <th scope="col">적럽내역</th>
                            <th scope="col">적럽금</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2016-06-06</td>
                        <td class="deposit-subject">물품구매에 대한 적립내역</td>
                        <td class="deposit-money"><em>1,160</em>원</td>
                    </tr>
                    <tr>
                        <td>2016-06-06</td>
                        <td class="deposit-subject">물품구매에 대한 적립내역</td>
                        <td class="deposit-money"><em>1,160</em>원</td>
                    </tr>
                    </tbody>
                </table>
                <!-- Paginate -->
                <div class="paginate">
                    <a href="#" class="arrow-page prev-first"></a>
                    <a href="#" class="arrow-page prev"></a>
                    <div class="number">
                        <strong class="selected">1</strong>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                    </div>
                    <a href="#" class="arrow-page next"></a>
                    <a href="#" class="arrow-page next-last"></a>
                </div>
                <!-- Paginate //end -->
                <!-- 나의 예치금 리스트 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>