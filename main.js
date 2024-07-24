document.addEventListener('DOMContentLoaded', () => {
    const selectBtn = document.getElementById("select_btn");
    const insertBtn = document.getElementById("insert_btn");
    const updateBtn = document.getElementById("update_btn");
    const deleteBtn = document.getElementById("delete_btn");
    const selectModal = document.getElementById("select_modal");
    const insertModal = document.getElementById("insert_modal");
    const updateModal = document.getElementById("update_modal");
    const deleteModal = document.getElementById("delete_modal");
    const logout = document.querySelector('.logout');

    function modal(a, b, c){
        if (a) {
            a.addEventListener('click', () => {
                b.style.display = c;
            });
        }
    }

    modal(selectBtn, selectModal, 'block');
    modal(insertBtn, insertModal, 'block');
    modal(updateBtn, updateModal, 'block');
    modal(deleteBtn, deleteModal, 'block');

    modal(selectBtn, insertModal, 'none');
    modal(selectBtn, updateModal, 'none');
    modal(selectBtn, deleteModal, 'none');
    modal(insertBtn, selectModal, 'none');
    modal(insertBtn, updateModal, 'none');
    modal(insertBtn, deleteModal, 'none');
    modal(updateBtn, insertModal, 'none');
    modal(updateBtn, selectModal, 'none');
    modal(updateBtn, deleteModal, 'none');
    modal(deleteBtn, insertModal, 'none');
    modal(deleteBtn, selectModal, 'none');
    modal(deleteBtn, updateModal, 'none');

    logout.addEventListener('click', () =>{
        alert("로그아웃 성공");
        location.href = 'index.php'
    })

});