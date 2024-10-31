<?php $conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인포기</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php require('./btn_group/btn.php')?>
    <?php require('./modal/select_modal.php')?>
    <?php require('./modal/insert_modal.php')?>
    <?php require('./modal/update_modal.php')?>
    <?php require('./modal/delete_modal.php')?>
    <?php require('./modal/member_modal.php')?>

    <script src="main.js"></script>
</body>
</html>