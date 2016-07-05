<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">find id/password</h2>
            <p class="page-title-sub">아이디 / 비밀번호 찾기</p>
            <!-- 아이디 찾기 -->
            <div class="find">
                <h3>아이디 찾기</h3>
                <p class="find-info">회원가입 시, 입력하신 이름 + 이메일 또는 휴대폰 번호로 아이디를 확인하실 수 있습니다.</p>
                <div class="findId-box findId-email">
                    <div class="form-group">
                        <label for="find-name">이 름</label>
                        <input type="text" id="find-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="find-email">이메일</label>
                        <input type="password" id="find-email" class="form-control">
                    </div>
                </div>
                <div class="findId-box findId-phone">
                    <div class="form-group">
                        <label for="find-name">이 름</label>
                        <input type="text" id="find-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="find-email">번 호</label>
                        <input type="password" id="find-email" class="form-control">
                    </div>
                </div>
                <div class="find-select findId-select">
                    <label><input type="radio" name="findId" value="findId-email" checked> 이메일</label>
                    <label><input type="radio" name="findId" value="findId-phone"> 휴대폰</label>
                </div>
                <a href="#" class="button">아이디 찾기</a>
                <a href="#" class="button button-secondary">로그인</a>
            </div>
            <!-- 아이디 찾기 //end -->
            <!-- 임시 비밀번호 발급 -->
            <div class="find">
                <h3>임시 비밀번호 발급</h3>
                <p class="find-info">가입하신 아이디 + 이메일 또는 휴대폰 번호를 입력, 본인인증을 통해 이메일 또는 휴대폰 번호로<br>
                임시 비밀번호를 보내드립니다. 확인 후 로그인하셔서 반드시 비밀번호를 변경하시기 바랍니다.</p>
                <div class="findPassword-box findPassword-email">
                    <div class="form-group">
                        <label for="find-name">이 름</label>
                        <input type="text" id="find-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="find-email">이메일</label>
                        <input type="password" id="find-email" class="form-control">
                    </div>
                </div>
                <div class="findPassword-box findPassword-phone">
                    <div class="form-group">
                        <label for="find-name">이 름</label>
                        <input type="text" id="find-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="find-email">번 호</label>
                        <input type="password" id="find-email" class="form-control">
                    </div>
                </div>
                <div class="find-select findPassword-select">
                    <label><input type="radio" name="findPassword" value="findPassword-email" checked> 이메일</label>
                    <label><input type="radio" name="findPassword" value="findPassword-phone"> 휴대폰</label>
                </div>
                <a href="#" class="button">발 급</a>
                <a href="#" class="button button-secondary">로그인</a>
            </div>
            <!-- 임시 비밀번호 발급 //end -->
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>