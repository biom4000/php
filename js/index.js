function showHint(str1, str2) {


    if( (str1.length == 0) || (str2.length == 0) ){
        document.getElementById("error_showbox").innerHTML = "**ID or Password is null**";
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'ok'){
                    document.location.href="../html/home.html";
                }
                else{
                    document.getElementById("error_showbox").innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../php/index.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+str1+"&pwd="+str2);

    }
}