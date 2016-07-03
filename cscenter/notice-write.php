<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">cs center</h2>
            <p class="page-title-sub">사이트 이용 시 궁금하신 점은 아래 카테고리에서 확인이 가능합니다.</p>
            <div class="cs-center">
                <ul class="cs-menu">
                    <li class="current"><a href="#">notice</a></li>
                    <li><a href="#">Q&amp;A</a></li>
                    <li><a href="#">review</a></li>
                    <li><a href="#">information</a></li>
                    <li><a href="#">delivery</a></li>
                    <li><a href="#">membership</a></li>
                </ul>
                <h3 class="cs-title">notice</h3>
                <p class="cs-title-sub">디앤써 소식 - 디앤써의 최신 정보가 업데이트 됩니다</p>
                <!-- 디앤써 소식 쓰기 화면 -->
                <table class="table table-row-list notice">
                    <caption>디앤써 소식 글쓰기</caption>
                    <colgroup>
                        <col class="col-notice-info">
                        <col class="col-notice-content">
                        <col class="col-notice-info">
                        <col>
                    </colgroup>
                    <tbody>
                    <tr>
                        <th scope="row"><label for="notice-name">이름</label></th>
                        <td><input type="text" id="notice-name" class="form-control"></td>
                        <th scope="row"><label for="notice-name">비밀번호</label></th>
                        <td>
                            <input type="password" id="notice-name" class="form-control">
                            <span class="text-auto-lock">자동 잠금 기능</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="notice-subject">제목</label></th>
                        <td colspan="3" class="notice-subject">
                            <input type="text" id="notice-subject" class="form-control">
                            <p><label><input type="checkbox"> HTML태그 허용</label></p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="notice-content">내용</label></th>
                        <td colspan="3">
                            에디터 영역
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="notice-attached">파일</label></th>
                        <td colspan="3">
                            <div class="form-file">
                                <input type="file">
                                <input type="text" id="notice-attached" class="form-control">
                                <a href="#" class="button button-file">찾아보기...</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="button-align-right">
                    <a href="#" class="button button-secondary button-sm">list</a>
                </div>
                <!-- 디앤써 소식 쓰기 화면 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>