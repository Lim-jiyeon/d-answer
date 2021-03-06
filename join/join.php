<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <h2 class="page-title">membership</h2>
            <p class="page-title-sub">회원가입</p>
            <div class="join">
                <div class="certification">
                    <p>휴대폰 또는 아이핀 인증을 통하여 본인인증을 하셔야 합니다.<br>
                    <strong>인증 버튼을 눌러 본인인증을 진행해 주세요.</strong></p>
                    <div class="help-certification">
                        <a href="#">휴대폰 인증이란?</a>
                        <a href="#">아이핀 서비스란?</a>
                    </div>
                </div>
                <div class="button-certification">
                    <a href="#" class="button button-lg">휴대폰인증</a>
                    <a href="#" class="button button-lg">아이핀인증</a>
                </div>
                <div class="join-input">
                    <table class="table table-row-list">
                        <caption></caption>
                        <colgroup>
                            <col class="col-join-info">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row"><label for="join-name"><i class="essential">*</i>이름</label></th>
                            <td><input type="text" id="join-name" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-id"><i class="essential">*</i>아이디</label></th>
                            <td>
                                <input type="text" id="join-id" class="form-control">
                                <a href="#" class="button button-sm">중복확인</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-password"><i class="essential">*</i>비밀번호</label></th>
                            <td>
                                <input type="text" id="join-password" class="form-control">
                                <span class="help-certification">영문 대소문자/숫자/특수문자를 혼용하여 2종류 10-16자 또는 3종류 8-16자</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-password-check"><i class="essential">*</i>비밀번호 확인</label></th>
                            <td><input type="text" id="join-password-check" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-birthday-gender"><i class="essential">*</i>생일/성별</label></th>
                            <td class="cell-birthday-gender">
                                <select class="selectbox" id="join-birthday-gender">
                                    <option>1990</option>
                                    <option>1991</option>
                                </select> 년
                                <select class="selectbox">
                                    <option>선택</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select> 월
                                <select class="selectbox">
                                    <option>선택</option>
                                    <option>1</option>
                                    <option>11</option>
                                </select> 일
                                <label><input type="radio" name="gender"> 남</label>
                                <label><input type="radio" name="gender"> 여</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-zipcode"><i class="essential">*</i>우편번호</label></th>
                            <td class="cell-address">
                                <div class="zip-code-input">
                                    <input type="text" id="join-zipcode" class="form-control"> -
                                    <input type="text" class="form-control">
                                    <a href="#" class="button button-sm">우편번호검색</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-address"><i class="essential">*</i>집주소</label></th>
                            <td class="cell-address">
                                <div class="address-input">
                                    <input type="text" id="join-address" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-address-detail"><i class="essential">*</i>상세주소</label></th>
                            <td class="cell-address">
                                <div class="address-input">
                                    <input type="text" id="join-address-detail" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-phone"><i class="essential">*</i>연락처</label></th>
                            <td><input type="text" id="join-phone" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-email"><i class="essential">*</i>이메일</label></th>
                            <td class="cell-email">
                                <input type="text" id="join-email" class="form-control"> @
                                <select class="selectbox">
                                    <option>nate.com</option>
                                    <option>naver.com</option>
                                    <option>gmail.com</option>
                                </select>
                                <a href="#" class="button button-sm">중복확인</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-company-phone">회사전화</label></th>
                            <td><input type="text" id="join-company-phone" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-company-address">회사주소</label></th>
                            <td class="cell-address">
                                <div class="zip-code-input">
                                    <input type="text" id="join-zipcode" class="form-control"> -
                                    <input type="text" class="form-control">
                                    <a href="#" class="button button-sm">우편번호검색</a>
                                </div>
                                <div class="address-input">
                                    <input type="text" id="join-address" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="join-cellphone">휴대폰</label></th>
                            <td><input type="text" id="join-cellphone" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row">뉴스메일</th>
                            <td>
                                <label><input type="radio" name="newsletter" selected="selected"> 받습니다.</label>
                                <label><input type="radio" name="newsletter"> 받지 않습니다.</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">SMS안내</th>
                            <td>
                                <label><input type="radio" name="smsInfo" selected="selected"> 받습니다.</label>
                                <label><input type="radio" name="smsInfo"> 받지 않습니다.</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">엡PUSH알림</th>
                            <td>
                                <label><input type="radio" name="appPush" selected="selected"> 받습니다.</label>
                                <label><input type="radio" name="appPush"> 받지 않습니다.</label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="button-align-center">
                    <a href="#" class="button button-lg">가입완료</a>
                    <a href="#" class="button button-lg button-secondary">돌아가기</a>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>