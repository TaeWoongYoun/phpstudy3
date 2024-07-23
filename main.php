<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인포기</title>
</head>
<body>
    <style>
        *{margin: 0; padding: 0;}
        a{text-decoration: none; color: inherit;}
        table{border-collapse: collapse; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);}
        th{background-color: #ddd;}
        th,td{border: 1px solid black; padding: 10px;}
    </style>

    <?php
        if (isset($_GET['id']) && $_GET['id'] == 'admin'){
            echo "<button id='select_btn'>조회</button>
                <button id='insert_btn'>등록</button>
                <button id='update_btn'>수정</button>
                <button id='delete_btn'>삭제</button>";
        } elseif (isset($_GET['id']) && $_GET['id'] == 'manager'){
            echo "<button id='select_btn'>조회</button>
                <button id='insert_btn'>등록</button>
                <button id='update_btn'>수정</button>";
        } else {
            echo "<button id='select_btn'>조회</button>
                <button id='insert_btn'>등록</button>";
        }
    ?>

    <table id="select_modal">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <?php
            $sql = "SELECT * FROM club";
            $result = mysqli_query($conn, $sql);
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                    <tr>
                        <td>{$row['department']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['note']}</td>
                    </tr>";
            }
        ?>
    </table>

    <table id="insert_modal" style="display: none;">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <?php
            $sql = "SELECT * FROM club";
            $result = mysqli_query($conn, $sql);
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                    <tr>
                        <td>{$row['department']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['note']}</td>
                    </tr>";
            }
            echo "
            <tr>
                <td colspan='4' style='text-align: center;'><a href='insert.php?id=$id'><button>추가</button></a></td>
            </tr>"
        ?>
    </table>

    <table id="update_modal" style="display: none;">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <?php
            $sql = "SELECT * FROM club";
            $result = mysqli_query($conn, $sql);
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                    <tr>
                        <td>{$row['department']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['note']}</td>
                        <td><a href='update.php?id=$id'><button>수정</button></a></td>
                    </tr>";
            }
        ?>
    </table>

    <table id="delete_modal" style="display: none;">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <?php
            $sql = "SELECT * FROM club";
            $result = mysqli_query($conn, $sql);
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                    <tr>
                        <td>{$row['department']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['note']}</td>
                        <td><a href='delete.php?id=$id'><button>수정</button></a></td>
                    </tr>";
            }
        ?>
    </table>

    <script src="main.js"></script>
</body>
</html>