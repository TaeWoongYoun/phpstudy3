<?php $conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3')?>

<?php
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $userpw = mysqli_real_escape_string($conn, $_POST['userpw']);
    $sql = "INSERT INTO user (userid, name, userpw) VALUES ('$userid', '$name', '$userpw')";

    mysqli_query($conn, $sql);
?>

<script>
    alert("회원가입이 완료되었습니다.")
    location.href = 'index.php'
</script>