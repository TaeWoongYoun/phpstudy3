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