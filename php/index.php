<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $pwd = $_POST['password'];

    include 'connect_mysql.php';
}