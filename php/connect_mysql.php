<?php
/**
 * Created by PhpStorm.
 * User: andy_wang
 * Date: 2018/6/4
 * Time: 下午 03:06
 */

$db_server  = "localhost";
$db_user = "bion4000";
$db_passwd  = "ga9871109kppq";
$db_name  = "toLife";

$con=mysqli_connect($db_server,$db_user,$db_passwd ,$db_name );

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
