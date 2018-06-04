<?php
/**
 * Created by PhpStorm.
 * User: andy_wang
 * Date: 2018/6/4
 * Time: 下午 04:08
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $password = $_POST['password'];
    $row;

    $db_server  = "localhost";
    $db_user = "bion4000";
    $db_passwd  = "ga9871109kppq";
    $db_name  = "tolife";

    $con=mysqli_connect($db_server,$db_user,$db_passwd ,$db_name );

// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con, "SELECT id FROM member");
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($row["id"] == $id){
                if($row["password"] == $password)
                echo ok;
                break;
            }
        }
    } else {
        echo "0 results";
    }

    mysqli_close($con);


}