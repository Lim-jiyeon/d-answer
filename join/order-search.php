<?php
    include ("../header/header.php");
?>

    <div class="container">
        <div class="page-container">
            <div class="member-order-search">
                <h2 class="page-title">member login</h2>
                <p class="page-title-sub">회원가입을 하시면 다양하고 특별한 혜택이 준비되어 있습니다.</p>
                <div class="login">
                    <h3>LOGIN</h3>
                    <div class="form-group">
                        <label for="login-id">ID</label>
                        <input type="text" id="login-id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="login-password">PASSWORD</label>
                        <input type="password" id="login-password" class="form-control">
                    </div>
                    <div class="login-find">
                        <span><a href="#">Find id</a></span>
                        <span><a href="#">Find password</a></span>
                    </div>
                    <a href="#" class="button button-lg button-third">LOGIN</a>
                    <a href="#" class="button button-lg button-third">JOIN US</a>
                </div>
            </div>
            <div class="nonmember-order-search">
                <h2 class="page-title">order search</h2>
                <p class="page-title-sub">비회원의 경우, 주문서의 주문번호로 주문조회가 가능합니다.</p>
                <div class="login">
                    <div class="form-group">
                        <label for="login-name">NAME</label>
                        <input type="text" id="login-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="login-order-number">ORDER NO.</label>
                        <input type="password" id="login-order-number" class="form-control">
                    </div>
                    <a href="#" class="button button-lg button-third">OK</a>
                </div>
            </div>
        </div>
    </div>

<?php
    include ("../footer/footer.php");
?>