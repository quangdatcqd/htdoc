<?php
 
    require_once "../system/config.php";
    session_start();
    
    define("ARR_CONTROLLER",['home']);
    $act = 'home';

    if(isset($_GET['act']) == true){
        $act = $_GET['act'];
    }
    if(in_array($act, ARR_CONTROLLER)==false) die('URL không tồn tại');
    else {
    header("location: controllers/home.php");
}
?>