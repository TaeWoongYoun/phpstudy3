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
    <?php require('./btn_group/btn.php')?>
    <?php require('./modal/select_modal.php')?>
    <?php require('./modal/insert_modal.php')?>
    <?php require('./modal/update_modal.php')?>
    <?php require('./modal/delete_modal.php')?>
    <div class="member_modal">
        <h3>회원관리</h3>
        <button class="member_close" style="position: absolute; right:10px; top:10px;">닫기</button>
        <table style="margin-top: 40px;">
            <tr>
                <th>id</th>
                <th>userid</th>
                <th>name</th>
                <th>userpw</th>
            </tr>
            <?php
                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['userid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['userpw']}</td>
                            <td>
                                <form action='member_delete.php' method='post'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <input type='submit' value='삭제'>
                                </form>
                            </td>
                        </tr>";
                }    
            ?>
        </table>
    </div>

    <script src="main.js"></script>
</body>
</html>