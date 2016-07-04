<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">search</h2>
            <p class="page-title-sub">상품검색<br>
            상품명으로 검색해 주세요.</p>
            <div class="search empty">
                <!-- 검색 영역 -->
                <div class="search-input">
                    <ul>
                        <li>
                            <label>제품명/키워드</label>
                            <input type="text" class="form-control">
                        </li>
                        <li class="salePrice">
                            <label>판매가격대</label>
                            <input type="text" class="form-control"> -
                            <input type="text" class="form-control">
                        </li>
                        <li>
                            <label>제조사</label>
                            <input type="text" class="form-control">
                        </li>
                        <li>
                            <label>상세내용</label>
                            <input type="text" class="form-control">
                        </li>
                    </ul>
                    <div class="button-align">
                        <a href="#" class="button">search</a>
                    </div>
                </div>
                <!-- 검색 영역 //end -->
                <!-- 검색 결과 영역 -->
                <div class="search-content">
                    검색된 상품이 없습니다.
                </div>
                <!-- 검색 결과 영역 //end -->
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>