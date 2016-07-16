<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">money on deposit</h2>
            <p class="page-title-sub">회원님이 예치금 내역입니다.</p>
            <p class="page-explain"><span>[김기훈]</span> 님이 쇼핑몰에서 사용 가능한 예치금 내역입니다.</p>
            <div class="deposit">
                <div class="my-deposit">
                    <span>총 보유 예치금</span>
                    <strong><em>2,861</em>원</strong>
                </div>
                <!-- 나의 예치금 리스트 -->
                <h3 class="table-title">예치금 내역</h3>
                <table class="table table-list">
                    <caption>나의 예치금 내역</caption>
                    <colgroup>
                        <col class="col-date">
                        <col>
                        <col class="col-money">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">날짜</th>
                            <th scope="col">예치내역</th>
                            <th scope="col">예치금</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2016-06-06</td>
                        <td class="deposit-subject">예치금 내역이 없습니다.</td>
                        <td class="deposit-money"><em>1,160</em>원</td>
                    </tr>
                    <tr>
                        <td>2016-06-06</td>
                        <td class="deposit-subject">예치금 내역이 없습니다.</td>
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