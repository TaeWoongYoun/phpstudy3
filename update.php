<?php 
$conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디자인포기(수정)</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
        $id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : null;
        $userid = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['userid']) : null;

        if($id){
            $sql = "SELECT * FROM club WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
        }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>학과</th>
            <th>학년</th>
            <th>이름</th>
            <th>비고</th>
        </tr>
        <tr>
            <form action="update_process.php" method="post" id="update_form">
                <td><?= htmlspecialchars($row['id']) ?></td>
                <input type="hidden" name="userid" value="<?= htmlspecialchars($userid) ?>">
                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                <td><input type="text" name="department" id="department" placeholder="학과" value="<?= htmlspecialchars($row['department']) ?>"></td>
                <td><input type="text" name="grade" id="grade" placeholder="학년" value="<?= htmlspecialchars($row['grade']) ?>"></td>
                <td><input type="text" name="name" id="name" placeholder="이름" value="<?= htmlspecialchars($row['name']) ?>"></td>
                <td><input type="text" name="note" id="note" placeholder="비고" value="<?= htmlspecialchars($row['note']) ?>"></td>
                <td><input type="submit" value="제출"></td>
            </form>
        </tr>
    </table>

    <script>
        document.getElementById('update_form').addEventListener('submit', function(event) {
            const userid = new URLSearchParams(window.location.search).get('userid');
            if (userid) {
                this.action = `update_process.php?userid=${encodeURIComponent(userid)}`;
            }
        });
    </script>
</body>
</html>
