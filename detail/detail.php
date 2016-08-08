<?php
    include ("../header/header.php");
?>

    <div class="container detail-container">
        <div class="product-detail">
            <div class="detail-shop">
                <div class="detail-img">
                    <img src="../include/images/temp/temp-detail-img.jpg" alt="상세이미지">
                </div>
                <div class="review">
                    <h3 class="review-title">Review</h3>
                    <!-- Review 리스트 -->
                    <div class="review-list">
                        <table class="table table-list">
                            <caption>상품에 대한 review</caption>
                            <colgroup>
                                <col class="col-review-name">
                                <col class="col-review-content">
                            </colgroup>
                            <tbody>
                            <tr>
                                <td>김기훈</td>
                                <td class="review-subject">
                                    <a href="#">오버핏인줄 알고 샀는.....
                                        <i class="icon icon-camera"></i>
                                        <i class="icon-badge">reply</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>황종규</td>
                                <td class="review-subject">
                                    <a href="#">
                                        180/78 48사이즈 주문......
                                        <i class="icon icon-camera"></i>
                                    </a>
                                    <a href="#" class="icon-badge">수정</a>
                                    <a href="#" class="icon icon-delete">삭제</a>
                                </td>
                            </tr>
                            <tr class="review-view">
                                <td colspan="2" class="align-left">
                                    <div class="review-content">
                                        <img src="../include/images/temp/temp-product.jpg">
                                        <p>187에 45키로 인데 옷이 너무 이쁘고 자수퀄 굉장합니다</p>
                                    </div>
                                    <div class="review-reply">
                                        <i class="icon icon-reply"></i>
                                        <i class="icon-badge">reply</i>
                                        이 제품의 특징인 과하지도 부족하지도 않은 적적한 핏의 느낌으로 편안하면서도 실용성을 살린 장점을 지닌 아이템입니다^^
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>김민정</td>
                                <td class="review-subject"><a href="#">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</a></td>
                            </tr>
                            <tr>
                                <td>김민정</td>
                                <td class="review-subject"><a href="#">가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하가나다라마바사아자차카타파하</a></td>
                            </tr>
                            <tr>
                                <td>김기훈</td>
                                <td class="review-subject"><a href="#">오버핏인줄 알고 샀는.....</a></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="button-align-right">
                            <a class="button button-sm">LIST</a>
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
                    <!-- Review 리스트 //end -->
                    <!-- Review 등록하기 -->
                    <ul class="review-register">
                        <li>
                            <label for="register-name">이름 : </label>
                            <input type="text" id="register-name" class="form-control">
                        </li>
                        <li>
                            <label for="register-attached">첨부 : </label>
                            <div class="form-file">
                                <input type="file">
                                <input type="text" id="register-attached" class="form-control">
                                <a href="#" class="button button-file">찾아보기...</a>
                            </div>
                        </li>
                        <li>
                            <label for="register-content">내용 : </label>
                            <textarea cols="40" rows="3" id="register-content" class="form-control"></textarea>
                            <a href="#" class="button button-xl">ok</a>
                        </li>
                    </ul>
                    <!-- Review 등록하기 //end -->
                </div>
                <!-- QNA -->
                <div class="qna">
                    <h3 class="sr-only">QNA</h3>
                    <!-- QNA 리스트 -->
                    <div class="qna-list">
                        <table class="table table-list">
                            <caption>상품에 대한 QNA</caption>
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
                                <td class="qna-subject">
                                    <a href="#">
                                        문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.문의드립니다.
                                        <span class="icon-badge">new</span>
                                    </a>
                                </td>
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
                            <tr class="qna-view-password">
                                <td colspan="6" class="align-left">
                                    <span>비공개 글 입니다.</span>
                                    <p>글 작성시 입력한 비밀번호를 입력해주세요.</p>
                                    <input type="password" class="form-control">
                                    <a href="#" class="button button-xs">ok</a>
                                </td>
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
                    <!-- QNA 리스트 //end -->
                    <!-- QNA 검색 -->
                    <div class="qna-search">
                        <label for="qna-search-word">검색어</label>
                        <select name="qna-search-filter" id="qna-search-filter">
                            <option>이름</option>
                            <option>내용</option>
                        </select>
                        <input type="text" id="qna-search-word" class="form-control">
                        <a href="#" class="button button-sm button-secondary">search</a>
                    </div>
                    <!-- QNA 검색 //end -->
                </div>
                <!-- QNA //end -->
            </div>
            <!-- 상품 Option 정보 -->
            <div class="detail-shop-info">
                <div class="detail-shop-inner">
                    <h2 class="product-name">SLP 테일러드 블레이저</h2>
                    <span class="price discount">87,000 won</span>
                    <span class="price">87,000 won (5% new)</span>
                    <p class="shop-deposit">적립금 : 310원(1%)</p>
                    <div class="sharing-links">
                        <a href="#"><i class="icon icon-facebook"></i></a>
                        <a href="#"><i class="icon icon-instagram"></i></a>
                    </div>
                    <a href="#none" onclick="modalOpen('.modal-size-guide');" class="size-guide">size guide</a>
                    <div class="detail-discription">
                        fabrics - cotton 100%<br>
                        model size - 182cm 68kg 48 fit<br>
                        care instructions - dry clean
                    </div>
                    <div class="product-options">
                        <div class="shop-selectbox">
                            <label for="detail-color">color</label>
                            <select class="selectbox" id="detail-color">
                                <option>- Select Option -</option>
                                <option>white</option>
                                <option>black</option>
                            </select>
                        </div>
                        <div class="shop-selectbox">
                            <label for="detail-size">size</label>
                            <select class="selectbox" id="detail-size">
                                <option>- Select Option -</option>
                            </select>
                        </div>
                    </div>
                    <div class="product-options-button">
                        <a href="#" class="button button-lg">BUY IT NOW</a>
                        <a href="#" class="button button-lg button-secondary">ADD TO CART</a>
                        <a href="#" class="button button-lg button-secondary">WISH LIST</a>
                    </div>
                    <div class="naverPay">
                        <a href="#"><img src="../include/images/naverPay.jpg" alt="네이버 ID 간편결제"></a>
                    </div>
                </div>
            </div>
            <!-- 상품 Option 정보 //end -->
            <!--  실측가이드 레이어 -->
            <div class="modal modal-size-guide">
                <div class="modal-content">
                    <img src="../include/images/size-guide.jpg" alt="실측 가이드">
                    <a href="#none" onclick="modalClose(this);" class="closeModal">×</a>
                </div>
                <div class="overlay"></div>
            </div>
            <!--  실측가이드 레이어 //end -->
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>