<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">order</h2>
            <p class="page-title-sub">고객님께서 주문하신 상품내역입니다.<br>
            - 상품명 또는 주문상세의 조회 버튼을 클릭하시면, 주문상세 내역을 확인하실 수 있습니다.<br>
            - 배송현황의 조회 버튼을 클릭하시면, 해당 주문의 배송 현황을 한눈에 확인하실 수 있습니다.</p>
            <div class="order-view">
                <strong class="all-board-text">총 19건</strong>
                <!-- 나의 QNA 리스트 -->
                <div class="qna-list">
                    <table class="table table-list">
                        <caption> 내가 작성한 게시글 내역</caption>
                        <colgroup>
                            <col class="col-order-num">
                            <col class="col-order-date">
                            <col>
                            <col class="col-order-price">
                            <col class="col-order-view">
                            <col class="col-order-state">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">번호</th>
                                <th scope="col">주문일자</th>
                                <th scope="col">상품명</th>
                                <th scope="col">결제금액</th>
                                <th scope="col">주문상세</th>
                                <th scope="col">배송현황</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2</td>
                            <td>2016.03.13</td>
                            <td class="order-subject"><a href="#">SLP BABY 티셔츠</a></td>
                            <td>15,500</td>
                            <td><a href="#" class="button button-xs button-secondary">조회</a></td>
                            <td><a href="#" class="button button-xs button-secondary">조회</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2016.03.13</td>
                            <td class="order-subject"><a href="#">SLP BABY 티셔츠</a></td>
                            <td>15,500</td>
                            <td><a href="#" class="button button-xs button-secondary">조회</a></td>
                            <td><a href="#" class="button button-xs button-secondary">조회</a></td>
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
                </div>
                <!-- 나의 QNA 리스트 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>