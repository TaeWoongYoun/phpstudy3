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