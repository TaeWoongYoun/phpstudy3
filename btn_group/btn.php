<?php
    if (isset($_GET['id']) && $_GET['id'] == 'admin'){
        echo "<button id='select_btn'>조회</button>
                <button id='insert_btn'>등록</button>
                <button id='update_btn'>수정</button>
                <button id='delete_btn'>삭제</button>
                <button class='logout' style='float:right;'>로그아웃</button>
                <button class='member' style='float:right;'>회원관리</button>";
    } elseif (isset($_GET['id']) && $_GET['id'] == 'manager'){
        echo "<button id='select_btn'>조회</button>
                <button id='insert_btn'>등록</button>
                <button id='update_btn'>수정</button>
                <button class='logout' style='float: right;'>로그아웃</button>";
    } else {
        echo "<button id='select_btn'>조회</button>
                <button id='insert_btn'>등록</button>
                <button class='logout' style='float: right;'>로그아웃</button>";
    }
?>