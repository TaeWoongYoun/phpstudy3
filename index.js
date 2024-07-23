const login_modal = document.querySelector(".login_modal");
const login_btn = document.querySelector(".login_btn");
const login_reset = document.querySelector(".login_reset");
const join_modal = document.querySelector(".join_modal");
const join_btn = document.querySelector(".join_btn");
const join_reset = document.querySelector(".join_reset");

function modal(a,b,c){
    a.addEventListener('click', () =>{
        b.style.display = c;
    })
}
modal(login_btn, login_modal, 'block');
modal(login_btn, join_modal, 'none');
modal(login_reset, login_modal, 'none');
modal(join_btn, join_modal, 'block');
modal(join_btn, login_modal, 'none');
modal(join_reset, join_modal, 'none');

document.querySelector('.join_submit').addEventListener('click', (event) =>{
    const name = document.querySelector("#name");
    const pw = document.querySelector("#userpw");
    const pw_ck = document.querySelector("#userpw_check");
    const idok = document.querySelector('#idok')
    
    if (idok.value != 1){
        alert("중복확인을 해주세요.");
        event.preventDefault();
        return false;
    }

    if (name.value.length < 2){
        alert("이름을 2글자 이상 입력해주세요.")
        event.preventDefault();
        return false;
    }

    if (pw.value.length < 4){
        alert("비밀번호를 4글자 이상 입력해주세요.")
        event.preventDefault();
        return false;
    }

    if (pw.value != pw_ck.value){
        alert("비밀번호가 일치하지 않습니다. 다시 확인해주세요.")
        event.preventDefault();
        return false;
    }
})