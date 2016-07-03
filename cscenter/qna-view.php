<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">cs center</h2>
            <p class="page-title-sub">사이트 이용 시 궁금하신 점은 아래 카테고리에서 확인이 가능합니다.</p>
            <div class="cs-center">
                <ul class="cs-menu">
                    <li><a href="#">notice</a></li>
                    <li class="current"><a href="#">Q&amp;A</a></li>
                    <li><a href="#">review</a></li>
                    <li><a href="#">information</a></li>
                    <li><a href="#">delivery</a></li>
                    <li><a href="#">membership</a></li>
                </ul>
                <h3 class="cs-title">Q &amp; A</h3>
                <p class="cs-title-sub">제품에 대한 궁금증 게시판을 통해 빠르고 정확하게 답변 드리겠습니다</p>
                <!-- 문의 한 상품 정보 -->
                <div class="qna-product-info">
                    <div class="product-image"><img src="../include/images/temp/temp-product2.jpg" alt=""></div>
                    <div class="product-view">
                        <strong>앵커자수 스트라이프 티셔츠</strong>
                        <span>29,000원</span>
                        <div class="button-align-left">
                            <a href="#" class="button">상품상제보기</a>
                        </div>
                    </div>
                </div>
                <!-- 문의 한 상품 정보 //end -->
                <!-- 문의 글 보기 화면 -->
                <table class="table table-row-list notice">
                    <caption>문의 글 상세내용</caption>
                    <colgroup>
                        <col class="col-notice-info">
                        <col>
                    </colgroup>
                    <tbody>
                    <tr>
                        <th scope="row">제 목</th>
                        <td>상품문의</td>
                    </tr>
                    <tr>
                        <th scope="row">작성자</th>
                        <td>speed78kh</td>
                    </tr>
                    <tr>
                        <th scope="row">작성일</th>
                        <td>2015-12-30</td>
                    </tr>
                    <tr>
                        <th scope="row">조회수</th>
                        <td>22</td>
                    </tr>
                    <tr>
                        <th scope="row">내 용</th>
                        <td class="notice-subject">
                            내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="button-align">
                    <div class="button-align-left">
                        <a href="#" class="button button-sm">modify</a>
                        <a href="#" class="button button-secondary button-sm">delete</a>
                        <a href="#" class="button button-secondary button-sm">reply</a>
                    </div>
                    <div class="button-align-right">
                        <a href="#" class="button button-sm">write</a>
                        <a href="#" class="button button-secondary button-sm">list</a>
                    </div>
                </div>
                <!-- 문의 글 보기 화면 //end -->
                <!-- 문의 글에 대한 덧글 -->
                <ul class="qna-reply-write">
                    <li>
                        <span>이름 - speed78kh</span>
                        <span>
                            <label>비밀번호 - </label>
                            <input type="password" class="form-control">
                        </span>
                    </li>
                    <li>
                        <label for="register-content" class="sr-only">내용</label>
                        <textarea cols="170" rows="3" id="register-content" class="form-control"></textarea>
                        <a href="#" class="button button-xl">ok</a>
                    </li>
                </ul>
                <!-- 문의 글에 대한 덧글 //end -->
                <!-- 문의 글 리스트 미리보기 -->
                <div class="qna-list qna-view-list">
                    <table class="table table-list">
                        <caption>문의 글 목록</caption>
                        <colgroup>
                            <col class="col-qna-lock">
                            <col>
                            <col class="col-qna-name">
                            <col class="col-qna-date">
                            <col class="col-qna-hits">
                        </colgroup>
                        <thead>
                        <tr>
                            <th></th>
                            <th>내용</th>
                            <th>작성자</th>
                            <th>작성날짜</th>
                            <th>조회수</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="align-left reply-subject"><a href="#">문의드립니다.</a></td>
                            <td>speed87kh</td>
                            <td>2015-12-30</td>
                            <td>1</td>
                        </tr>
                        <tr class="reply">
                            <td><i class="icon icon-lock"></i></td>
                            <td class="align-left reply-subject"><a href="#">문의드립니다.</a></td>
                            <td>D-answer</td>
                            <td>2015-12-30</td>
                            <td>1</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 문의 글 리스트 미리보기 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>