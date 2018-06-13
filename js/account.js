function showHint() {
    var id = document.getElementById('id_input');
    var pwd1 = document.getElementById('pwd1_input');
    var pwd2 = document.getElementById('pwd2_input');
    var mail = document.getElementById('email_input');
    var gender = document.getElementById('gender_input');
    var area = document.getElementById('area_input');
    var error = document.getElementById("error_show");

    if( (id.value.length == 0)||(pwd1.value.length == 0)||(pwd2.value.length == 0)||(mail.value.length == 0) ){
        error.classList.remove("alert", "alert-secondary");
        error.classList.add("alert", "alert-warning");
        error.innerHTML = "date can't null";
    }
    else if((id.value.length<4)||(id.value.length>15)){
        error.classList.remove("alert", "alert-secondary");
        error.classList.add("alert", "alert-warning");
        error.innerHTML = "id length error";
    }
    else if((pwd1.value) != (pwd2.value)){
        error.classList.remove("alert", "alert-secondary");
        error.classList.add("alert", "alert-warning");
        error.innerHTML = "password error";
    }
    else if((pwd1.value.length<6) || (pwd1.value.length > 20)){
        error.classList.remove("alert", "alert-secondary");
        error.classList.add("alert", "alert-warning");
        error.innerHTML = "password length error";
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'ok'){
                    history.back();
                }
                else{
                    error.classList.remove("alert", "alert-secondary");
                    error.classList.add("alert", "alert-warning");
                    error.innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../php/account.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+id.value+"&pwd="+pwd1.value+"&email="+mail.value+"&gender="+gender.value+"&area="+area.value);

    }

}