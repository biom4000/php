function showHint() {
    var id = document.getElementById('id_input');
    var mail = document.getElementById('email_input');
    var error = document.getElementById("error_show");

    if( (id.value.length == 0)||(mail.value.length == 0) ){
        error.classList.remove("alert", "alert-secondary", "alert-warning", "alert-success");
        error.classList.add("alert", "alert-warning");
        error.innerHTML = "date can't null";
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'ok'){
                    error.classList.remove("alert", "alert-secondary", "alert-warning", "alert-success");
                    error.classList.add("alert", "alert-success");
                    error.innerHTML = this.responseText;
                }
                else{
                    error.classList.remove("alert", "alert-secondary", "alert-warning", "alert-success");
                    error.classList.add("alert", "alert-warning");
                    error.innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../php/forget.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+id.value+"&mail="+mail.value);

    }

}