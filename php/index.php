<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['pwd'] = $_POST['pwd'];

    $db_server  = "localhost";
    $db_user = "root";
    $db_passwd  = "1sopqjr";
    $db_name  = "tolife";

    $con=mysqli_connect($db_server,$db_user,$db_passwd ,$db_name );
    mysqli_set_charset($con,"utf8");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "SELECT * FROM register WHERE ID='".$_SESSION['id']."' AND Password='".$_SESSION['pwd']."'";
    //echo $sql;
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        echo 'ok';
    }
    else{
        unset($_SESSION['id']);
        unset($_SESSION['pwd']);
        echo '**ID or Password is not**';
    }

    mysqli_close($con);

}