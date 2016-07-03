<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">my page</h2>
            <p class="page-title-sub">고객님의 쇼핑정보 및 회원정보를 관리 / 수정 할 수 있는 공간입니다.</p>
            <div class="mypage">
                <!-- 마이페이지 정보 조회 -->
                <span class="member-level">S</span>
                <p>김기훈 님은 <strong>Silver</strong> 회원이십니다 저희 쇼핑몰을 이용해 주셔서 감사합니다.</p>
                <ul class="mypage-info">
                    <li>
                        <span>가용적립금</span>
                        <strong>12,800원<a href="#" class="button button-xs button-secondary">조회</a></strong>
                    </li>
                    <li>
                        <span>예치금</span>
                        <strong>12,800원<a href="#" class="button button-xs button-secondary"">조회</a></strong>
                    </li>
                    <li>
                        <span>적립금</span>
                        <strong>10,000원</strong>
                    </li>
                    <li>
                        <span>쿠폰</span>
                        <strong>10,000원</strong>
                    </li>
                    <li>
                        <span>총 주문금액</span>
                        <strong>883,100원</strong>
                    </li>
                </ul>
                <!-- 마이페이지 정보 조회 //end -->
                <!-- 마이페이지 링크 리스트 -->
                <ul class="mypage-list">
                    <li>
                        <dl>
                            <dt>order<span>주문내역조회</span></dt>
                            <dd>고객께서 주문하신 상품의 주문내역을 확인하실 수 있습니다. 비회원의 경우, 주문서의 주문번호와 비밀번호로 주문조회가 가능합니다.</dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                    <li>
                        <dl>
                            <dt>profile<span>회원정보</span></dt>
                            <dd>회원이신 고객님의 개인정보를 관리하는 공간입니다. 개인정보를 최신 정보로 유지하시면 보다 간편히 쇼핑을 즐기실 수 있습니다.</dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                    <li>
                        <dl>
                            <dt>wishlist<span>관심상품</span></dt>
                            <dd>고객님께서 관심상품으로 등록하신 상품의 목록을 확인할 수 있으며, 구매가 가능합니다.</dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                    <li>
                        <dl>
                            <dt>mileage<span>적립금</span></dt>
                            <dd>적립금은 상품 구매 시 사용할 수 있습니다. 적립된 금액은 현금으로 환불되지 않습니다.</dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                    <li>
                        <dl>
                            <dt>deposit<span>예치금</span></dt>
                            <dd>고객님께서 주문하신 상품의 주문내역을 확인하실 수 있습니다. 비회원의 경우, 주문서의 주문번호와 비밀번호로 주문조회가 가능합니다.</dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                    <li>
                        <dl>
                            <dt>coupon<span>쿠폰</span></dt>
                            <dd>고객님께서 보유하고 계신 쿠폰내역을 보여드리며, 상품 구매 시 사용할 수 있습니다. </dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                    <li>
                        <dl>
                            <dt>board<span>게시물 관리</span></dt>
                            <dd>고객님께서 작성하신 게시물을 관리하는 공간입니다. 고객님께서 작성하신 글을 한눈에 관리할 수 있습니다.</dd>
                        </dl>
                        <a href="#" class="button">more</a>
                    </li>
                </ul>
                <!-- 마이페이지 링크 리스트 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>