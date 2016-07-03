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
                <!-- 문의하기 쓰기 화면 -->
                <table class="table table-row-list notice">
                    <caption>제품에 대해 문의하는 목록</caption>
                    <colgroup>
                        <col class="col-notice-info">
                        <col class="col-notice-content">
                        <col class="col-notice-info">
                        <col>
                    </colgroup>
                    <tbody>
                    <tr>
                        <th scope="row"><label for="qna-name">이름</label></th>
                        <td><input type="text" id="qna-name" class="form-control"></td>
                        <th scope="row"><label for="qna-name">비밀번호</label></th>
                        <td>
                            <input type="password" id="qna-name" class="form-control">
                            <span class="text-auto-lock">자동 잠금 기능</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="qna-subject">제목</label></th>
                        <td class="notice-subject">
                            <select class="selectbox" id="qna-subject">
                                <option>제목을 선택하세요</option>
                                <option>상품문의</option>
                                <option>입금/취소문의</option>
                                <option>교환/환불문의</option>
                            </select>
                        </td>
                        <th scope="row"><label for="qna-subject">연락처2</label></th>
                        <td class="cell-phone">
                            <input type="text" id="qna-phone" class="form-control"> -
                            <input type="text" class="form-control"> -
                            <input type="text" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="qna-content">내용</label></th>
                        <td colspan="3">
                            <textarea cols="80" rows="9" id="qna-content" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="qna-attached">파일</label></th>
                        <td colspan="3">
                            <div class="form-file">
                                <input type="file">
                                <input type="text" id="qna-attached" class="form-control">
                                <a href="#" class="button button-file">찾아보기...</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="button-align-right">
                    <a href="#" class="button button-secondary button-sm">list</a>
                </div>
                <!-- 문의하기 쓰기 화면 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>