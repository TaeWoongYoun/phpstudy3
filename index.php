<?php $conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인포기</title>
</head>
<body>
    <h1>메인페이지</h1>
    <button class="login_btn">로그인</button>
    <button class="join_btn">회원가입</button>

    <div class="login_modal" style="display: none;">
        <h3>로그인</h3>
        <form action="login.php" method="post">
            <input type="text" name="userid" placeholder="아이디"> <br>
            <input type="password" name="userpw" placeholder="비밀번호"> <br>
            <input type="submit" value="로그인">
            <input type="reset" value="취소" class="login_reset">
        </form>
    </div>

    <div class="join_modal" style="display:none;">
        <h3>회원가입</h3>
        <form action="join.php" method="post" onsubmit="return ck(this)">
            <input type="text" name="userid" id="userid" placeholder="아이디">
            <button type="button" id="check_id">중복확인</button> <br>
            <input type="hidden" name="idok" id="idok" value="0">
            <input type="text" name="name" id="name" placeholder="이름"> <br>
            <input type="password" name="userpw" id="userpw" placeholder="비밀번호"> <br>
            <input type="password" id="userpw_check" placeholder="비밀번호 확인"> <br>
            <input type="submit" value="회원가입" class="join_submit">
            <input type="reset" value="취소" class="join_reset">
        </form>
    </div>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
    <script src="check_id.js"></script>
</body>
</html>