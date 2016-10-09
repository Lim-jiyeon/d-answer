<?php include ("../header/header.php"); ?>

<div class="content">
    <div class="container">
        <div class="page-container">
            <h2 class="page-title">Q &amp; A</h2>
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
                        <strong class="board-title notice"><b>NOTICE의 이용안내 확인부탁드립니다. 이메일 / 1:1 게시판은 확인이 어려우니 Q&amp;A로 문의부탁드립니다.</b></strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <strong class="board-title notice">디앤써 모바일 어플 할인혜택</strong>
                        <div>
                            <span>D-ANSWER</span>
                            <span>2016-11-30</span>
                        </div>
                    </a>
                </li>
                <li class="customer-qna">
                    <a href="#">
                        <p class="product-info">와이드넥 새미오버 티셔츠</p>
                        <strong class="board-title">
                            <i class="icon-mobile"></i>
                            <i class="icon-lock"></i>
                            교환 / 환불 문의
                        </strong>
                        <div>
                            <span>speed87kh</span>
                            <span>2016-11-30</span>
                            <span class="badge">new</span>
                        </div>
                    </a>
                </li>
                <li class="customer-qna">
                    <a href="#">
                        <p class="product-info">THEOR 린넨 스트레이트 팬츠</p>
                        <strong class="board-title">
                            <i class="icon-lock"></i>
                            상품 문의
                        </strong>
                        <div>
                            <span>speed87kh</span>
                            <span>2016-11-30</span>
                            <span class="badge">new</span>
                        </div>
                    </a>
                </li>
                <li class="customer-qna">
                    <a href="#">
                        <strong class="board-title">
                            <i class="icon-lock"></i>
                            상품 문의
                        </strong>
                        <div>
                            <span>speed87kh</span>
                            <span>2016-11-30</span>
                            <span class="badge">new</span>
                        </div>
                    </a>
                </li>
                <li class="customer-qna review">
                    <a href="#">
                        <strong class="board-title">
                            <i class="icon-lock"></i>
                            상품 문의
                        </strong>
                        <div>
                            <span>speed87kh</span>
                            <span>2016-11-30</span>
                            <span class="badge">new</span>
                        </div>
                    </a>
                </li>
                <li class="customer-qna">
                    <a href="#">
                        <p class="product-info">THEOR 린넨 스트레이트 팬츠</p>
                        <strong class="board-title">
                            <i class="icon-mobile"></i>
                            <i class="icon-lock"></i>
                            상품 문의
                        </strong>
                        <div>
                            <span>speed87kh</span>
                            <span>2016-11-30</span>
                            <span class="badge">new</span>
                        </div>
                    </a>
                </li>
                <li class="customer-qna review">
                    <a href="#">
                        <p class="product-info">THEOR 린넨 스트레이트 팬츠</p>
                        <strong class="board-title">
                            <i class="icon-mobile"></i>
                            <i class="icon-lock"></i>
                            상품 문의
                        </strong>
                        <div>
                            <span>speed87kh</span>
                            <span>2016-11-30</span>
                            <span class="badge">new</span>
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

<?php include ("../footer/footer.php"); ?>