<?php $conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $sql = "INSERT INTO club (department, grade, name, note) VALUES('$department', '$grade', '$name', '$note')";
    mysqli_query($conn, $sql);

    if (isset($_GET['id'])){
        echo "
        <script>
            alert('추가 성공');
            location.href = 'main.php?id=$id'
        </script>";
    }
?>
