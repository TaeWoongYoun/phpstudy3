<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인포기</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <button class="logout" style="float: right;">로그아웃</button>
    <?php require('./btn_group/btn.php')?>
    <?php require('./modal/select_modal.php')?>
    <?php require('./modal/insert_modal.php')?>
    <?php require('./modal/update_modal.php')?>
    <?php require('./modal/delete_modal.php')?>

    <script src="main.js"></script>
</body>
</html>