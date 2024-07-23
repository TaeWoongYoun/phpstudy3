<table id="insert_modal" style="display: none;">
        <tr>
            <th>ID</th>
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
                        <td>{$row['id']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['note']}</td>
                    </tr>";
            }
            echo "
            <tr>
                <td colspan='5' style='text-align: center;'><a href='insert.php?id=$id'><button>추가</button></a></td>
            </tr>"
        ?>
    </table>