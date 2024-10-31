<?php $conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $userid = mysqli_real_escape_string($conn, $_GET['userid']);

    $sql = "DELETE FROM club WHERE id = $id";
    mysqli_query($conn, $sql);

    echo "
    <script>
        alert('삭제 성공')
        location.href = 'main.php?id=$userid'
    </script>";
?>