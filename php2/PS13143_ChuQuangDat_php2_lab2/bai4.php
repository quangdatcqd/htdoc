<center>
<style>
    span{
        color: red;
    }
</style>
<?php
if(isset($_GET['phone'])){
    $phone = $_GET['phone'];
    $par= '/^\(?(0[0-9]{3})\)?([ .-]?)([0-9]{2})\2([0-9]{2})\2([0-9]{2})$/';
    if(preg_match($par,$phone)) $check =  'số phone <span>'. $phone.'</span>  hợp lệ';
    else $check = 'số phone không hợp lệ';
}else echo 'Vui lòng nhập số điện thoại';

?>

<h2><?=$check?></h2>
</center>