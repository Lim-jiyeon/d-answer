<?php include '../header/header.php'; ?>

<div class="content">
    <div class="container page-join">
        <h2 class="page-title">join</h2>
        <div class="join">
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
                <tr>
                    <th scope="row">이메일</th>
                    <td><input type="email" class="form-control"></td>
                </tr>
                </tbody>
            </table>
            <!-- 회원정보 //end -->
            <div class="join-age-agree">
                <div class="checkbox">
                    <input type="checkbox" id="over-age-agree">
                    <label for="over-age-agree" class="checkbox-display"></label>
                    <label for="over-age-agree" class="checkbox-label"><span class="informaion">14세 이상입니다.</span> (필수)</label>
                </div>
                <p>- 회원가입에 필요한 최소한의 정보만 입력 받음으로써 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.</p>
            </div>
        </div>
        <div class="join terms-of-use">
            <h3 class="secondary-title">이용약관</h3>
            <!-- 이용약관 -->
            <ul class="tabs">
                <li class="tab">
                    <input type="radio" id="agree-terms-of-use" name="join-terms-of-use" checked>
                    <label for="agree-terms-of-use" class="tab-label agree-policy-list">수집하는 항목</label>
                    <div class="tab-content">
                        인터넷 쇼핑몰 (주)디에이앤코 사이버 몰 회원 약관<br><br>
                        제1조(목적)
                        이 약관은 (주)디에이앤코 회사(전자상거래 사업자)가 운영하는 (주)디에이앤코 사이버 몰(이하&quot;몰&quot;이라 한다)
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
            </ul>
            <!-- 이용약관 //end -->
        </div>
        <div class="join privacy-policy">
            <h3 class="secondary-title">개인정보 수집 이용안내</h3>
            <!-- 개인정보 수집 이용안내 -->
            <ul class="tabs tabs-content-unlimited">
                <li class="tab">
                    <input type="radio" id="agree-policy-list" name="join-agree" checked>
                    <label for="agree-policy-list" class="tab-label agree-policy-list">수집하는 항목</label>
                    <div class="tab-content">
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해<br>
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해<br>
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
                <li class="tab">
                    <input type="radio" id="agree-policy-purpose" name="join-agree">
                    <label for="agree-policy-purpose" class="tab-label agree-policy-purpose">수집・이용 목적</label>
                    <div class="tab-content">
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
                <li class="tab">
                    <input type="radio" id="agree-policy-useDate" name="join-agree">
                    <label for="agree-policy-useDate" class="tab-label agree-policy-useDate">보유 및 이용기간</label>
                    <div class="tab-content">
                        수집하는 개인정보의 항목 및 수집방법<br>
                        디앤써는 회원가입, 비회원 구매, 상담 불량이용의 방지 등을 위해
                        <a href="#" class="button button-block button-primary">내용전체보기</a>
                    </div>
                </li>
            </ul>
            <div class="checkbox">
                <input type="checkbox" id="privacy-policy-agree" checked>
                <label for="privacy-policy-agree" class="checkbox-display"></label>
                <label for="privacy-policy-agree" class="checkbox-label">전체 약관 동의</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="privacy-policy-disagree">
                <label for="privacy-policy-disagree" class="checkbox-display"></label>
                <label for="privacy-policy-disagree" class="checkbox-label">위의 이용약관에 동의합니다.</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="privacy-policy-disagree">
                <label for="privacy-policy-disagree" class="checkbox-display"></label>
                <label for="privacy-policy-disagree" class="checkbox-label">개인정보 수집 및 이용안내에 동의합니다.</label>
            </div>
            <!-- 개인정보 수집 이용안내 //end -->
        </div>
        <div class="button-align">
            <a href="#" class="button button-primary">회원가입</a>
        </div>
    </div>
</div>

<?php include '../footer/footer.php'; ?>