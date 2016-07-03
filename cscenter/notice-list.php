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
                <!-- 디앤써 소식 리스트 -->
                <div class="qna-list">
                    <table class="table table-list">
                        <caption>디앤써 최신 정보 게시글</caption>
                        <colgroup>
                            <col class="col-qna-num">
                            <col class="col-qna-lock">
                            <col>
                            <col class="col-qna-name">
                            <col class="col-qna-date">
                            <col class="col-qna-hits">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">번호</th>
                                <th scope="col"></th>
                                <th scope="col">내용</th>
                                <th scope="col">작성자</th>
                                <th scope="col">작성날짜</th>
                                <th scope="col">조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10</td>
                            <td><i class="icon icon-mic"></i></td>
                            <td class="qna-subject"><a href="#"><b>소재별 세팅방법 안내</b></a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>24525</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><i class="icon icon-mic"></i></td>
                            <td class="qna-subject"><a href="#"><b>교환/반품 방법 변경 안내 [3]</b></a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><i class="icon icon-doc"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><i class="icon icon-doc"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><i class="icon icon-doc"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><i class="icon icon-doc"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><i class="icon icon-doc"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>d.answer</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="button-align-right">
                        <a class="button button-sm">write</a>
                    </div>
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
                <!-- 디앤써 소식 리스트 //end -->
                <!-- 디앤써 소식 검색 -->
                <div class="qna-search">
                    <label for="qna-search-word">검색어</label>
                    <select name="qna-search-filter" id="qna-search-filter">
                        <option>이름</option>
                        <option>내용</option>
                    </select>
                    <input type="text" id="qna-search-word" class="form-control">
                    <a href="#" class="button button-sm button-secondary">search</a>
                </div>
                <!-- 디앤써 소식 검색 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>