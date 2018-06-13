function showHint() {
    if( (document.getElementById('id_input').value.length == 0)||
        (document.getElementById('email_input').value.length == 0) ){

        document.getElementById("id_error").classList.remove("alert", "alert-secondary");
        document.getElementById("id_error").classList.add("alert", "alert-warning");
        document.getElementById("id_error").innerHTML = "date can't null";
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'ok'){
                    history.back();
                }
                else{
                    document.getElementById("id_error").classList.remove("alert", "alert-secondary");
                    document.getElementById("id_error").classList.add("alert", "alert-warning");
                    document.getElementById("id_error").innerHTML = this.responseText;
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