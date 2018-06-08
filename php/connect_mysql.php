<?php
/**
 * Created by PhpStorm.
 * User: andy_wang
 * Date: 2018/6/4
 * Time: 下午 03:06
 */

$db_server  = "localhost";
$db_user = "root";
$db_passwd  = "1sopqjr";
$db_name  = "tolife";

$con=mysqli_connect($db_server,$db_user,$db_passwd ,$db_name );

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}