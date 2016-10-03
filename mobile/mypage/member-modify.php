<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container page-member">
        <h2 class="page-title">정보입력</h2>
        <div class="privacy-modify">
            <!-- 회원정보 -->
            <table class="table table-row-list">
                <colgroup>
                <col class="col-xs-3">
                <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">이름</th>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <th scope="row">아이디</th>
                    <td>
                        <div class="form-group"><input type="text" class="form-control"></div>
                        <div class="button-align-center">
                            <a href="#" class="button button-primary">중복체크</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">비밀번호</th>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <th scope="row">비밀번호확인</th>
                    <td>
                        <input type="password" class="form-control">
                        <p class="help-text">회원아이디 영문숫자만 사용가능<br>
                        (숫자만으로 아이디 사용금지)</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 회원정보 //end -->
            <!-- 생일/성별 -->
            <table class="table table-row-list gender-input">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">생일/성별</th>
                    <td>
                        <div class="selectbox">
                            <strong class="selectbox-value">1987</strong>
                            <select onchange="selectboxEvent(this);">
                                <option value="1987">1987</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                        <div class="selectbox">
                            <strong class="selectbox-value">월</strong>
                            <select onchange="selectboxEvent(this);">
                                <option value="월">월</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                        <div class="selectbox">
                            <strong class="selectbox-value">일</strong>
                            <select onchange="selectboxEvent(this);">
                                <option value="일">일</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                        <div class="radio">
                            <input type="radio" id="male" name="gender" checked>
                            <label for="male" class="radio-display"></label>
                            <label for="male" class="radio-label">남</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="female" name="gender">
                            <label for="female" class="radio-display"></label>
                            <label for="female" class="radio-label">여</label>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 생일/성별 //end -->
            <!-- 회원추가정보 -->
            <table class="table table-row-list">
                <colgroup>
                    <col class="col-xs-3">
                    <col class="col-xs-9">
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">이메일</th>
                    <td>
                        <div class="form-group input-group email-group">
                            <div>
                                <input type="email" value="1987" class="form-control">
                            </div>
                            <div class="input-group-addon at">@</div>
                            <div>
                                <div class="selectbox">
                                    <strong class="selectbox-value">선택</strong>
                                    <select onchange="selectboxEvent(this);">
                                        <option value="선택">선택</option>
                                        <option value="선택1">선택1</option>
                                        <option value="선택2">선택2</option>
                                        <option value="선택3">선택3</option>
                                        <option value="선택4">선택4</option>
                                        <option value="선택5">선택5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="button-align-center">
                            <a href="#" class="button button-primary">중복체크</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">연락처</th>
                    <td>
                        <div class="form-group"><input type="tel" class="form-control"></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">휴대폰</th>
                    <td>
                        <div class="form-group"><input type="tel" class="form-control"></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">메일정보수신</th>
                    <td>
                        <div class="radio">
                            <input type="radio" id="mail-agree" checked>
                            <label for="mail-agree" class="radio-display"></label>
                            <label for="mail-agree" class="radio-label">동의</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="mail-disagree">
                            <label for="mail-disagree" class="radio-display"></label>
                            <label for="mail-disagree" class="radio-label">동의안함</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">SMS수신</th>
                    <td>
                        <div class="radio">
                            <input type="radio" id="sms-agree" checked>
                            <label for="sms-agree" class="radio-display"></label>
                            <label for="sms-agree" class="radio-label">동의</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="sms-disagree">
                            <label for="sms-disagree" class="radio-display"></label>
                            <label for="sms-disagree" class="radio-label">동의안함</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">우편번호</th>
                    <td>
                        <div class="form-group input-group">
                            <div>
                                <input type="tel" value="" class="form-control">
                            </div>
                            <div class="input-group-addon hyphen">-</div>
                            <div>
                                <input type="tel" value="" class="form-control">
                            </div>
                        </div>
                        <div class="button-align-center">
                            <a href="#" class="button button-primary">우편번호찾기</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">주소</th>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- 회원추가정보 //end -->
        </div>
        <div class="button-align">
            <a href="#" class="button button-primary">다음</a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>