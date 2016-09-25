<?php include '../header/header.php'; ?>

<div class="content">
    <!-- 상품 상세 -->
    <div class="container">
        <div class="row detail">
            <!-- 상품 이름 -->
            <div class="col-xs-12">
                <h2 class="product-name">[WONMEN] SLP BABY 티셔츠</h2>
            </div>
            <!-- 상품 이름 //end -->
            <!-- 상품 이미지 -->
            <div class="col-xs-12">
                <div class="product-images">
                    <div><img src="../include/images/temp/temp-product.jpg" alt=""></div>
                </div>
            </div>
            <!-- 상품 이미지 -->
            <!-- 상품 옵션 정보 -->
            <div class="col-xs-12">
                <div class="product-option-info">
                    <div class="detail-info">
                        <div class="product-price">
                            <strong class="price"><b>380,000</b>원</strong>
                        </div>
                        <span class="saved">적립금 : 1%</span>
                        <a class="size-guide"><i class="icon-ruler"></i>Size guide</a>
                    </div>
                    <!-- 상품 옵션 선택 영역 -->
                    <div class="detail-option">
                        <div class="selectbox-block">
                            <div class="selectbox">
                                <strong class="selectbox-value">COLOR</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="COLOR">COLOR</option>
                                    <option value="선택1">선택1</option>
                                    <option value="선택2">선택2</option>
                                    <option value="선택3">선택3</option>
                                    <option value="선택4">선택4</option>
                                    <option value="선택5">선택5</option>
                                </select>
                            </div>
                            <div class="selectbox selectbox-block">
                                <strong class="selectbox-value">SIZE</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="SIZE">SIZE</option>
                                    <option value="선택1">선택1</option>
                                    <option value="선택2">선택2</option>
                                    <option value="선택3">선택3</option>
                                    <option value="선택4">선택4</option>
                                    <option value="선택5">선택5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- 상품 옵션 선택 영역 //end -->
                    <!-- 상품 옵션 선택 시 -->
                    <div class="detail-option-selected">
                        <div class="left">
                            Black, M
                            <input type="number" class="form-control" value="1">
                            <a href="#" class="button"><i class="icon-up"></i></a>
                            <a href="#" class="button"><i class="icon-down"></i></a>
                        </div>
                        <div class="right">
                            39,000원
                            <a href="#"><i class="icon-delete"></i></a>
                        </div>
                        <p class="total-price">
                            <span>Total</span>
                            <b>39,000</b>원
                        </p>
                    </div>
                    <!-- 상품 옵션 선택 시 //end -->
                    <!-- 상품 버튼 영역 -->
                    <div class="row button-inline-group">
                        <div class="col-xs-6"><a href="#" class="button">Cart</a></div>
                        <div class="col-xs-6"><a href="#" class="button">wishlist</a></div>
                    </div>
                    <div class="button-block">
                        <a href="#" class="button button-primary">BUY IT NOW</a>
                    </div>
                    <!-- 상품 버튼 영역 //end -->
                    <!-- naver nPay 영역 -->
                    <div class="product-nPay"><img src="../include/images/temp/temp-npay.jpg" alt=""></div>
                    <!-- naver nPay 영역 //end -->
                    <div class="product-explain">
                        Fabrics : Cotton 100%<br>
                        Color : White<br>
                        Model Size : 182cm, 68kg 46 착용<br>
                        Care Instructions : Dry Clean<br>
                        (Q&A 소재별 세탁방법 참고)
                    </div>
                    <a href="#" class="subscribe">재입고 알림신청<i class="icon-left"></i></a>
                </div>
                <!-- Social Link -->
                <div class="detail-link-social">
                    <ul>
                        <li><a href="#"><i class="icon-instagram-rect"></i></a></li>
                        <li><a href="#"><i class="icon-facebook-rect"></i></a></li>
                    </ul>
                </div>
                <!-- Social Link //end -->
            </div>
            <!-- 상품 옵션 정보 -->
        </div>
    </div>
    <!-- 상품 상세 //end -->
    <!-- 상품 상세 정보 컨텐츠 -->
    <div class="container">
        <div class="detail-contents">
            <!-- 상품상세 -->
            <div class="detail-content">상세페이지 노출</div>
            <!-- 상품상세 -->
            <!-- size guide -->
            <div class="size-guide">
                <table class="table">
                    <colgroup>
                        <col class="col-xs-3">
                        <col class="col-xs-3">
                        <col class="col-xs-3">
                        <col class="col-xs-3">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>어깨</th>
                        <th>가슴</th>
                        <th>소매</th>
                        <th>총길이</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>43</td>
                        <td>27</td>
                        <td>85</td>
                        <td>105</td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>27</td>
                        <td>85</td>
                        <td>105</td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>27</td>
                        <td>85</td>
                        <td>105</td>
                    </tr>
                    </tbody>
                </table>
                <p>CM</p>
            </div>
            <!-- size guide //end -->
            <!-- features -->
            <div class="features">
                <h4>features</h4>
                적당한 핏감의 테일러드 자켓 입니다. 봄,가을,겨울 착용하기<br>
                적당한 두께감이며 원단 재봉 신경 많이 쓴 제품입니다.<br>
                원단은 시중에선 볼 수 없는 탄탄한 조직감<br>
                으로 짜여진 원단을 사용했습니다.
            </div>
            <!-- features //end -->
        </div>
    </div>
    <!-- 상품 상세 정보 컨텐츠 //end -->
    <!-- 관련상품 -->
    <div class="container">
        <div class="related-product">
            <h3>관련상품</h3>
            <ul>
                <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
                <li><a href="#"><img src="../include/images/temp/temp-product.jpg" alt=""></a></li>
            </ul>
        </div>
    </div>
    <!-- 관련상품 //end -->
    <!-- 배송/입금/교환/환불/반품 안내  -->
    <div class="container">
        <div class="detail-information">
            <h3>배송안내</h3>
            - 택배사:우체국택배(1588-1300) - 배송지역:전국(해외배송가능)<br>
            - 배송비용:5만원이상 배송비무료(5만원 미만 3,000원 배송비/도서
            산간지역은 배송비 추가됩니다.)<br>
            - 배송기간:결제를 완료하신후 2~4일 (토, 일 공휴일 제외) 이내에 받아
            보실 수 있습니다.<br>
            - 해외배송:해외배송비는 고객님께서 부담하셔야 하며,
            국가/무게/부피에 따라 가격이 측정됩니다.
            <h3>입금안내</h3>
            -주문자 성함과 입금자 성함이 정확하게 매칭되셨을 경우 20분이내에
            자동 입금처리가 됩니다.<br>
            - 주문서를 2개로 나눠 주문하셨을 경우 입금도 각각 따로 입금해주셔야
            입금확인이 가능합니다.<br>
            - 주문자와 입금자 성함이 다를 경우 게시글이나 고객센터로 연락바랍니다.
            <h3>교환/환불/반품 안내</h3>
            - 상품수령 후 당일 게시판 또는 고객센터로 환불의사를 밝히고 7일 이내에
            본사에 도착해야 환불이 가능합니다.(택제거시 환불불가)<br>
            - 단순 변심에 의한 교환/반품은 우체국택배(1588-1300)로 접수하신후
            섬함/아이디/연락처를 메모지에 작성후
            6,000원 입금후(우리은행 1005-102-632366 ㈜디에이엔코)
            보내주시면 됩니다.(타택배 이용시 추가금 발생)<br>
            - 교환은 1회에 한하며 상습적인 교환/환불은 불가합니다.<br>
            - 교환/환불비용 동봉해서 보낼경우 분실사고 발생시 본사에서
            책임지지 않습니다.
            <h3>교환/환불이 불가한 경우</h3>
            - 환불기간이 지나서 본사에 도착한경우<br>
            - 포장이 훼손되어 상품가치가 상실된경우<br>
            - 택을 제거하였을 경우<br>
            - 상품착용, 세착, 수선, 향수 등 상품가치가 훼손된경우
        </div>
    </div>
    <!-- 배송/입금/교환/환불/반품 안내 //end -->
    <!-- 고객센터 -->
    <div class="detail-customer">
        <ul>
            <li><a href="#">Review</a><span>0</span></li>
            <li><a href="#">Q&amp;A</a><span>5</span></li>
        </ul>
    </div>
    <!-- 고객센터 //end -->
</div>

<?php include '../footer/footer.php'; ?>