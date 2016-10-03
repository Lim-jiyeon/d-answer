<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container page-login">
        <h2 class="page-title">login</h2>
        <div class="login">
            <ul class="input-list forgot-input-list">
                <li>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="id">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                </li>
            </ul>
            <div class="row login-find">
                <div class="col-xs-5">
                    <div class="checkbox">
                        <input type="checkbox" id="save_id" checked="">
                        <label for="save_id" class="checkbox-display"></label>
                        <label for="save_id" class="checkbox-label">아이디 저장</label>
                    </div>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-5">
                    <div class="checkbox">
                        <input type="checkbox" id="save_id" checked="">
                        <label for="save_id" class="checkbox-display"></label>
                        <label for="save_id" class="checkbox-label">자동로그인</label>
                    </div>
                </div>
            </div>
            <div class="button-block-group button-align">
                <a href="#" class="button button-secondary"><b>LOGIN</b></a>
                <a href="#" class="button button-secondary"><b>FIND ID / FIND PASSWORD</b></a>
            </div>
        </div>
        <div class="login">
            <h3 class="secondary-title">비회원 구매조회</h3>
            <ul class="input-list forgot-input-list">
                <li>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="주문자">
                    </div>
                </li>
                <li>
                    <div>
                        <input type="password" class="form-control" placeholder="주문번호">
                    </div>
                </li>
            </ul>
        </div>
        <div class="login">
            <p class="login-member-info">
                <b>비회원이신가요?</b><br>
                회원이 되시면 빠른 신상품 정보와 다양한 할인 혜택을 받으실 수 있습니다.
            </p>
            <div class="button-block-group button-align">
                <a href="#" class="button button-primary">회원가입</a>
            </div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>