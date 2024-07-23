<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>

<?php
    $id = $_POST['joinid'];
    $sql = "SELECT * FROM user WHERE userid = '$id'";
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result)
?>