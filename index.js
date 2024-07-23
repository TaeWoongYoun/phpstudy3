const join_btn = document.querySelector("#join_btn");
const join_modal = document.querySelector(".join_modal");
const join_reset = document.querySelector("#join_reset");
const login_btn = document.querySelector("#login_btn");
const login_modal = document.querySelector(".login_modal");
const login_reset = document.querySelector("#login_reset");

function modal(a,b,c){
    a.addEventListener('click', () =>{
        b.style.display = c;
    })  
}

modal(join_btn, join_modal, 'block');
modal(join_btn, login_modal, 'none');
modal(join_reset, join_modal, 'none');
modal(login_btn, login_modal, 'block');
modal(login_btn, join_modal, 'none');
modal(login_reset, login_modal, 'none');

$(document).ready(function(){
    $("#check_id").click(function(){
        var userid = $("#joinid").val();
        if (userid.length < 4){
            alert("아이디를 4글자 이상 입력해주세요.");
            return false;
        }
        $.ajax({url:"check_id.php", data: {joinid:userid}, method:"POST",
            success: function(data){
                if (data > 0) {
                    alert("사용중인 아이디입니다.");
                }else{
                    alert("사용 가능한 아이디입니다.");
                    $("#idok").val(1);
                }
            }
        });
    });
    $("#joinid").change(function(){
        $("#idok").val(0);
    });
    function ck(f){
        if (f.idok.value != 1){
            alert("아이디 중복확인을 해주세요.");
            return false;
        }
    }
})