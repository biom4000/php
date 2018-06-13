function showHint() {
    if( (document.getElementById('id_input').value.length == 0)||
        (document.getElementById('pwd1_input').value.length == 0)||
        (document.getElementById('pwd2_input').value.length == 0)||
        (document.getElementById('email_input').value.length == 0) ){

        document.getElementById("error_show").classList.remove("alert", "alert-secondary");
        document.getElementById("error_show").classList.add("alert", "alert-warning");
        document.getElementById("error_show").innerHTML = "date can't null";
    }
    else if((document.getElementById('pwd1_input').value) != (document.getElementById('pwd2_input').value)){
        document.getElementById("error_show").classList.remove("alert", "alert-secondary");
        document.getElementById("error_show").classList.add("alert", "alert-warning");
        document.getElementById("error_show").innerHTML = "password error";
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'ok'){
                    history.back();
                }
                else{
                    document.getElementById("error_show").classList.remove("alert", "alert-secondary");
                    document.getElementById("error_show").classList.add("alert", "alert-warning");
                    document.getElementById("error_show").innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../php/index.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+document.getElementById('id_input').value+"&pwd="+document.getElementById('pwd1_input').value
                    +"&email="+document.getElementById('email_input').value+"&gender="+document.getElementById('gender_input').value
                    +"&area="+document.getElementById('area_input').value);

    }

}