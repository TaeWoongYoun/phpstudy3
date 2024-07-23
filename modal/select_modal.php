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