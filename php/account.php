<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    $mail = $_POST['email'];
    $gender = $_POST['gender'];
    $area = $_POST['area'];

    include 'connect_mysql.php';

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