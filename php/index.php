<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $pwd = $_POST['password'];



}

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

$sql = "SELECT * FROM register WHERE ID='bion4000'";
$result = mysqli_query($con, $sql);


if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['ID'].", ".$row['Password']."<br>";

    }
}
else{
    echo "0 results";
}

mysqli_close($con);