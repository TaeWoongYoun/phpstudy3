<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인혐오</title>
</head>
<body>
    <h1>메인페이지</h1>
    <button id="login_btn">로그인</button>
    <button id="join_btn">회원가입</button>

    <div class="login_modal" style="display: none;">
        <h3>로그인</h3>
        <input type="text" name="userid" id="userid" placeholder="아이디"> <br>
        <input type="password" name="userpw" id="userpw" placeholder="비밀번호"> <br>
        <input type="submit" value="로그인" id="login_submit">
        <input type="reset" value="취소" id="login_reset">
    </div>

    <div class="join_modal" style="display: none;">
        <h3>회원가입</h3>
        <form action="join.php" method="post" onsubmit="return ck(this)">
            <input type="text" name="joinid" id="joinid" placeholder="아이디"> 
            <button id="check_id">중복확인</button> <br>
            <input type="hidden" name="idok" id="idok" value="0">
            <input type="text" name="name" id="name" placeholder="이름"> <br>
            <input type="password" name="joinpw" id="joinpw" placeholder="비밀번호"> <br>
            <input type="password" id="joinpw_check" placeholder="비밀번호 확인"> <br>
            <input type="submit" value="회원가입" id="join_submit">
            <input type="reset" value="취소" id="join_reset">
        </form>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
</body>
</html>