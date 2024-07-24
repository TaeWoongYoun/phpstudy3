<div class="member_modal">
        <h3>회원관리</h3>
        <button class="member_close" style="position: absolute; right:10px; top:10px;">닫기</button>
        <table style="margin-top: 40px;">
            <tr>
                <th>id</th>
                <th>userid</th>
                <th>name</th>
                <th>userpw</th>
            </tr>
            <?php
                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['userid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['userpw']}</td>
                            <td>
                                <form action='member_delete.php' method='post'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <input type='submit' value='삭제'>
                                </form>
                            </td>
                        </tr>";
                }    
            ?>
        </table>
    </div>