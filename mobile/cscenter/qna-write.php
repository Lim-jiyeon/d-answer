<?php include ("../header/header.php"); ?>

<div class="content">
    <div class="container">
        <div class="page-container">
            <h2 class="page-title">Q &amp; A</h2>
            <div class="board-qna">
                <ul class="board-write">
                    <li class="form-group">
                        <label for="board-title" class="form-label">Title</label>
                        <div class="selectbox">
                            <strong class="selectbox-value">제목을 선택하세요</strong>
                            <select onchange="selectboxEvent(this);">
                                <option value="제목을 선택하세요">제목을 선택하세요</option>
                                <option value="선택1">선택1</option>
                                <option value="선택2">선택2</option>
                                <option value="선택3">선택3</option>
                                <option value="선택4">선택4</option>
                                <option value="선택5">선택5</option>
                            </select>
                        </div>
                    </li>
                    <li class="row form-group">
                        <div class="col-xs-6">
                            <label for="board-title" class="form-label">Name</label>
                            <input type="text" id="board-title" class="form-control" value="speed87kh">
                        </div>
                        <div class="col-xs-6 password-input">
                            <label for="board-title" class="form-label">Password
                                <span class="primary">자동잠금기능</span>
                            </label>
                            <input type="text" id="board-title" class="form-control">
                        </div>
                    </li>
                    <li class="form-group">
                        <textarea cols="10" rows="5" class="form-control" placeholder="안내글 예제⟩ 신규 게시글을 작성시에는 반드시 회원ID를 적어주세요! 네임 아이디는 고정입니다."></textarea>
                    </li>
                </ul>
                <div class="board-write-button">
                    <div class="box"></div>
                    <div class="button-block-group">
                        <a href="#" class="button">사진첨부</a>
                        <a href="#" class="button button-primary">글쓰기</a>
                        <a href="#" class="button">목록</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("../footer/footer.php"); ?>