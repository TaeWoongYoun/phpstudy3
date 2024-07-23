<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>중복 확인 시발</title>
</head>
<body>
    <h1>회원가입</h1>
    <form action="join.php" method="post" onsubmit="return ck(this)">
        <input type="text" name="userid" id="userid" placeholder="아이디">
        <button type="button" id="check_id">중복확인</button> <br>
        <input type="hidden" name="idok" id="idok" value="0">
        <input type="text" name="name" id="name" placeholder="이름"> <br>
        <input type="password" name="userpw" id="userpw" placeholder="비밀번호"> <br>
        <input type="password" id="userpw_check" placeholder="비밀번호 확인"> <br>
        <input type="submit" value="제출">
    </form>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
</body>
</html>