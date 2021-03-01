<?php
    session_start();
    require_once "../system/config.php";
    if(isset($_SESSION['uid'] ) && $_SESSION['uid'] >= 0){

   

    define('ARR_CONTROLLER', ['home','binhluan','dienthoai','donhang','users','nhasanxuat']);
    $ctrl='nhasanxuat';
    if(isset($_GET['ctrl']) == true){
        $ctrl = $_GET['ctrl'];
    }
    if(in_array($ctrl, ARR_CONTROLLER)==false) die('URL không tồn tại');
    $pathFile = "controllers/".$ctrl.".php"; 
    if(isset($pathFile)==true){
      
       
        require_once $pathFile;
        $controller = new $ctrl;
       
    }else echo "Controller không tồn tại!";
}else header("location:login.php");



?>