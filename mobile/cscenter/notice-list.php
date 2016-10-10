<?php include ("../header/header.php"); ?>

<div class="content">
    <div class="container">
        <div class="page-container">
            <h2 class="page-title">notice</h2>
            <div class="board-notice">
                <div class="board-search">
                    <div class="input-group">
                        <div>
                            <div class="selectbox">
                                <strong class="selectbox-value">이름</strong>
                                <select onchange="selectboxEvent(this);">
                                    <option value="이름">이름</option>
                                    <option value="선택1">선택1</option>
                                    <option value="선택2">선택2</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group-addon blank"></div>
                        <div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group-addon blank"></div>
                        <div><a href="#" class="button">검색</a></div>
                    </div>
                </div>
                <ul class="board-list">
                    <li>
                        <a href="#">
                            <strong class="board-title notice">디앤써 모바일 어플 할인혜택</strong>
                            <div>
                                <span>D-ANSWER</span>
                                <span>2016-11-30</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <strong class="board-title notice">2016년 회원혜택 안내</strong>
                            <div>
                                <span class="badge">admin</span>
                                <span>2016-11-30</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <strong class="board-title notice">2016년 회원혜택 안내</strong>
                            <div>
                                <span class="badge">admin</span>
                                <span>2016-11-30</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <strong class="board-title notice">2016년 회원혜택 안내</strong>
                            <div>
                                <span class="badge">admin</span>
                                <span>2016-11-30</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="button-align-center">
                    <a href="#" class="button button-primary">WRITE</a>
                </div>
                <!-- paging -->
                <div class="paging">
                    <a href="#" class="first"><i class="icon-left-double"></i></a>
                    <a href="#" class="prev"><i class="icon-left-arrow"></i></a>
                    <span class="pagingNum">
                        <span class="current"><a href="#">1</a></span>
                        <span><a href="#">2</a></span>
                        <span><a href="#">3</a></span>
                    </span>
                    <a href="#" class="next"><i class="icon-right-arrow"></i></a>
                    <a href="#" class="last"><i class="icon-right-double"></i></a>
                </div>
                <!-- paging //end -->
            </div>
        </div>
    </div>
</div>

<?php include ("../footer/footer.php"); ?>