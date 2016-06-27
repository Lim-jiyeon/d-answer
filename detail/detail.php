<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="product-detail">
            <div class="detail-img">
                <img src="../include/images/temp/temp-detail-img.jpg" alt="상세이미지">
            </div>
            <!-- 상품 Option 정보 -->
            <div class="detail-shop-info">
                <h2 class="product-name">SLP 테일러드 블레이저</h2>
                <span class="price">87,000 <em>won</em></span>
                <div class="sharing-links">
                    <a href="#"><i class="icon icon-facebook"></i></a>
                    <a href="#"><i class="icon icon-instagram"></i></a>
                </div>
                <div class="detail-discription">
                    fabrics - cotton 100%<br>
                    model size - 182cm 68kg 48 fit<br>
                    care instructions - dry clean
                </div>
                <div class="product-options">
                    <div class="shop-selectbox">
                        <label for="detail-color">color</label>
                        <select name="detail-color" id="detail-color">
                            <option>- Select Option -</option>
                            <option>white</option>
                            <option>black</option>
                        </select>
                    </div>
                    <div class="shop-selectbox">
                        <label for="detail-size">size</label>
                        <select name="detail-size" id="detail-size">
                            <option>- Select Option -</option>
                        </select>
                    </div>
                </div>
                <div class="product-options-button">
                    <a href="#" class="button">BUY NOW</a>
                    <a href="#" class="button">ADD TO CART</a>
                </div>
            </div>
            <!-- 상품 Option 정보 //end -->
            <div class="review">
                <h3 class="review-title">Review</h3>
                <!-- Review 리스트 -->
                <div class="review-list">
                    <table class="table table-list">
                        <caption>상품에 대한 review</caption>
                        <colgroup>
                            <col class="col-review-name">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <td>김기훈</td>
                                <td class="review-subject"><a href="#">오버핏인줄 알고 샀는.....</a><i class="icon icon-photo"></i></td>
                            </tr>
                            <tr>
                                <td>황종규</td>
                                <td class="review-subject"><a href="#">180/78 48사이즈 주문......</a></td>
                            </tr>
                            <tr>
                                <td>김민정</td>
                                <td class="review-subject"><a href="#">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz<</a></td>
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
    </div>

<?php
    include ("../footer/footer.php");
?>