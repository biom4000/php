<?php
/**
 * Created by PhpStorm.
 * User: andy_wang
 * Date: 2018/6/14
 * Time: 上午 09:45
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $email = $_POST['email'];

    include 'connect_mysql.php';

    $sql = "SELECT * FROM register WHERE ID='".$id."' AND Email='".$email."'";
    //echo $sql;
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        include  'send_mail.php';
    }
    else{
        echo 'Check no data';
    }

    mysqli_close($con);

}