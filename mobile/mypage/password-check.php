<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">비밀번호 재확인</h2>
        <div class="password-check-info">
            본인확인을 위해 한번 더 비밀번호를 입력해 주세요.<br>
            비밀번호는 타인에게 노출되지 않도록 주의해 주세요.
        </div>
        <div class="password-check">
            <ul>
                <li class="row">
                    <div class="col-xs-4">아이디</div>
                    <div class="col-xs-8 id-text">danswer</div>
                </li>
                <li class="row">
                    <div class="col-xs-4">비밀번호</div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호 입력">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="button-block-group button-align">
            <a href="#" class="button button-primary">확인</a>
            <a href="#" class="button">취소</a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>