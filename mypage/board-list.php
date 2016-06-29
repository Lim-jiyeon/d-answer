<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">board list</h2>
            <p class="page-title-sub">회원님이 작성한 게시글 내역입니다.<br>
            전체 게시판 <em class="board-amount">총 게시글 - 43건</em></p>
            <div class="board-list">
                <strong class="all-board-text">전체게시판 <em class="board-amount">총 게시글 - 43건</em></strong>
                <!-- 나의 QNA 리스트 -->
                <div class="qna-list">
                    <table class="table table-list">
                        <caption> 내가 작성한 게시글 내역</caption>
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
                                <th scope="col">제목</th>
                                <th scope="col">작성자</th>
                                <th scope="col">작성날짜</th>
                                <th scope="col">조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.</a></td>
                            <td>김기훈</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>김기훈</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>김기훈</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>김기훈</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>김기훈</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>김기훈</td>
                            <td>2016-06-06</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><i class="icon icon-lock"></i></td>
                            <td class="qna-subject"><a href="#">문의드립니다.</a></td>
                            <td>김기훈</td>
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
                <!-- 나의 QNA 리스트 //end -->
                <!-- 나의 QNA 검색 -->
                <div class="qna-search">
                    <label for="qna-search-word">검색어</label>
                    <select name="qna-search-filter" id="qna-search-filter">
                        <option>이름</option>
                        <option>내용</option>
                    </select>
                    <input type="text" id="qna-search-word" class="form-control">
                    <a href="#" class="button button-sm button-secondary">search</a>
                </div>
                <!-- 나의 QNA 검색 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>