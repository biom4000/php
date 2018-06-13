<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
    $mail = $_POST['email'];
    $gender = $_POST['gender'];
    $area = $_POST['area'];

    include 'connect_mysql.php';

    $sql = "SELECT * FROM register WHERE ID='".$id."' OR Email='".$mail."'";
    //echo $sql;
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        echo 'Repeat Date';
    }
    else{

        echo 'ok';
    }

    mysqli_close($con);

}