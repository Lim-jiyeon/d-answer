<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">join</h2>
            <p class="page-title-sub">간편회원가입</p>
            <div class="simple-join">
                <ul>
                    <li>
                        <div class="form-group">
                            <label for="simple-name">이름</label>
                            <input type="text" id="simple-name" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="simple-id">아이디</label>
                            <input type="password" id="simple-id" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="simple-password">비밀번호</label>
                            <input type="password" id="simple-password" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="simple-password-check">비밀번호 확인</label>
                            <input type="password" id="simple-password-check" class="form-control">
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label for="simple-email">이메일</label>
                            <input type="password" id="simple-email" class="form-control">
                        </div>
                    </li>
                </ul>
                <label class="simple-join-agree"><input type="checkbox" checked> 14세 이상입니다.(필수)</label>
                <p>회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.</p>
                <div class="button-align-center">
                    <a href="#" class="button">회원가입</a>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>