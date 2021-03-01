<?php
require_once "../system/model_system.php";
session_start();
if (isset($_POST['submit'])) {
    $model = new model_system();
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $check_user = $model->queryOne("SELECT * FROM users WHERE Username = '$user' AND Password =  '$pass'");
   
    if (is_array($check_user)) {
        $_SESSION['uid'] = $check_user['idUser'];
        $_SESSION['name'] = $check_user['HoTen'];
        $_SESSION['password'] = $check_user['Password'];
        header("location:index.php");
       
    }else header("location:login.php");
} else

    require_once "./views/login.php";
