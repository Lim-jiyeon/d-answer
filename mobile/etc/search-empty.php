<?php include '../header/header.php'; ?>
<div class="content">
    <div class="container page-category">
        <div class="row search-filter">
            <div class="col-xs-6">
                <div class="selectbox">
                    <strong class="selectbox-value">전체상품</strong>
                    <select onchange="selectboxEvent(this);" id="bank-account">
                        <option value="전체상품">전체상품</option>
                        <option value="선택1">선택1</option>
                        <option value="선택2">선택2</option>
                        <option value="선택3">선택3</option>
                        <option value="선택4">선택4</option>
                        <option value="선택5">선택5</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="selectbox">
                    <strong class="selectbox-value">최신순</strong>
                    <select onchange="selectboxEvent(this);" id="bank-account">
                        <option value="최신순">최신순</option>
                        <option value="선택1">선택1</option>
                        <option value="선택2">선택2</option>
                        <option value="선택3">선택3</option>
                        <option value="선택4">선택4</option>
                        <option value="선택5">선택5</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Category List -->
        <div class="search-empty">
            해당 데이터가 없습니다.
        </div>
        <!-- Category List //end -->
    </div>
</div>
<?php include '../footer/footer.php'; ?>