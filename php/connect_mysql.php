<?php

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