<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인포기(추가)</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <tr>
            <form action="insert_process.php" method="post" id="insert_form">
                <td>auto</td>
                <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id'])?>">
                <td><input type="text" name="department" id="department" placeholder="학과"></td>
                <td><input type="text" name="grade" id="grade" placeholder="학년"></td>
                <td><input type="text" name="name" id="name" placeholder="이름"></td>
                <td><input type="text" name="note" id="note" placeholder="비고"></td>
                <td><input type="submit" value="제출"></td>
            </form>
        </tr>
    </table>
    <script>
        document.getElementById('insert_form').addEventListener('submit', function(event) {
            const id = new URLSearchParams(window.location.search).get('id');
            if (id) {
                this.action = `insert_process.php?id=${encodeURIComponent(id)}`;
            }
        });
    </script>
</body>
</html>