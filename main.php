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
    </table>

    <table id="insert_modal" style="display: none;">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <tr>
            <td>자동차IT과</td>
            <td>3학년</td>
            <td>윤태웅</td>
            <td>회장</td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center;"><button>추가</button></td>
        </tr>
    </table>

    <table id="update_modal" style="display: none;">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <tr>
            <td>자동차IT과</td>
            <td>3학년</td>
            <td>윤태웅</td>
            <td>회장</td>
            <td><button>수정</button></td>
        </tr>
    </table>

    <table id="delete_modal" style="display: none;">
        <tr>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <tr>
            <td>자동차IT과</td>
            <td>3학년</td>
            <td>윤태웅</td>
            <td>회장</td>
            <td><button>삭제</button></td>
        </tr>
    </table>

    <script src="main.js"></script>
</body>
</html>