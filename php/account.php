<?php
/**
 * Created by PhpStorm.
 * User: Andy_Wang
 * Date: 2018/5/28
 * Time: 下午 03:17
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $password = array($_POST['password1'], $_POST['password2']);
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $area = $_POST['area'];

    echo "id=".$id."<br>password1=".$password[0]."<br>password2=".$password[1]."<br>email=".$email."<br>gender=".$gender."<br>area=".$area;
}
echo "asd";