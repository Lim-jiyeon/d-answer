<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container">
        <h2 class="page-title">id / password find</h2>
        <div class="forgot">
            <h3 class="secondary-title">아이디 찾기</h3>
            <p>아이디를 찾기 위한 방법을 선택하세요</p>
            <div class="forgot-box">
                <!-- 아이디 찾기 : 이메일 -->
                <div class="find-box">
                    <div class="radio find-email">
                        <input type="radio" name="findId" id="findId_email" value="findId-email" checked="">
                        <label for="findId_email" class="radio-display"></label>
                        <label for="findId_email" class="radio-label">이메일</label>
                    </div>
                    <div class="findId-input findId-email">
                        <ul class="input-list forgot-input-list">
                            <li>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="이름">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="이메일">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 아이디 찾기 : 이메일 //end -->
                <!-- 아이디 찾기 : 휴대폰 -->
                <div class="find-box">
                    <div class="radio find-phone">
                        <input type="radio" name="findId" id="findId_phone" value="findId-phone">
                        <label for="findId_phone" class="radio-display"></label>
                        <label for="findId_phone" class="radio-label">휴대폰</label>
                    </div>
                    <div class="findId-input findId-phone">
                        <ul class="input-list forgot-input-list">
                            <li>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="이름">
                                </div>
                            </li>
                            <li class="phone-group">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="휴대폰">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 아이디 찾기 : 휴대폰 //end -->
                <div class="button-block-group button-align">
                    <a href="#" class="button button-primary">아이디 찾기</a>
                    <a href="#" class="button">로그인</a>
                </div>
            </div>
            <div class="forgot-box">
                <h3 class="secondary-title">임시 비밀번호 발급</h3>
                <p>임시 비밀번호 발급을 위한 방법을 선택 하세요.</p>
                <div class="forgot-box">
                    <!-- 패스워드 찾기 : 이메일 -->
                    <div class="find-box">
                        <div class="radio find-email">
                            <input type="radio" name="findPassword" id="findPassword_email" value="findPassword-email" checked>
                            <label for="findPassword_email" class="radio-display"></label>
                            <label for="findPassword_email" class="radio-label">이메일</label>
                        </div>
                        <div class="findPassword-input findPassword-email">
                            <ul class="input-list forgot-input-list">
                                <li>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="이름">
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="이메일">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 패스워드 찾기 : 이메일 //end -->
                    <!-- 패스워드 찾기 : 핸드폰 -->
                    <div class="find-box">
                        <div class="radio find-phone">
                            <input type="radio" name="findPassword" id="findPassword_phone" value="findPassword-phone">
                            <label for="findPassword_phone" class="radio-display"></label>
                            <label for="findPassword_phone" class="radio-label">휴대폰</label>
                        </div>
                        <div class="findPassword-input findPassword-phone">
                            <ul class="input-list forgot-input-list">
                                <li>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="이름">
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="휴대폰">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 패스워드 찾기 : 핸드폰 번호 //end -->
                    <div class="button-block-group button-align">
                        <a href="#" class="button button-primary">임시 비밀번호 발급</a>
                        <a href="#" class="button">로그인</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>