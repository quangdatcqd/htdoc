<?php
require_once "connectdb.php";
$conn = connectdb();
$sql = "SELECT idTL, TenTL FROM theloai WHERE AnHien=1 AND lang='vi' "
    . "ORDER BY ThuTu DESC";
$theloai = $conn->query($sql);

$sql = "SELECT * FROM loaitin WHERE AnHien=1 AND lang='vi' "
    . "ORDER BY ThuTu DESC";
$loaitin = $conn->query($sql)->fetchAll();
 
?>

<style>
    .menu1 {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .menu1>li {
        display: inline-block;
        height: 45px;
        line-height: 45px;
        
        color: white;
  
    }
 
    .menu1>li::after {
        content: '  |  '
    }

    .menu1 li a {
        color: yellow; 
        width: 1px;
        
    }
    .menu1 li a:hover{
        padding-bottom: 3px;
        border-bottom: 3px solid #f0ff10;
        transition: all .4s;
    }
    .li-parent{
        position: relative;
    }
    .li-parent:hover   .ul-child li{
        display: block;
    }
    .ul-child{
        position: absolute;
        left: 0px;
        top:40px;
        background-color: #933c3c;
        z-index: 5;
        display: block;
        list-style: none !important;
        min-width: 150px;
        border-radius: 8px;
        
    }
    .ul-child li {
        width: 100%; 
        display: none;
        border-radius: 8px;
        border-bottom: white 1px solid;
        
       
    }
    .ul-child li:hover{
        background-color: #511515 !important;
    }

</style>
<ul class="menu1">
    <li><a href="layout.php"> Trang chủ</a></li>
    <?php
    foreach ($theloai as $loai) {
        ?> 
        <li class="li-parent">
            <a href="layout.php?page=theloai&idTL= <?= $loai['idTL']?>"> <?= $loai['TenTL']?> </a>
            <ul class="ul-child p-0 m-0">
           <?php
                foreach($loaitin as  $ltin){
                    if($ltin['idTL'] ==  $loai['idTL'] ){
                    ?>
                         <a href="layout.php?page=loaitin&idcat= <?= $ltin['idLT']?>"> <li class="px-2 py-0">  <?= $ltin['Ten']?></li></a>
                    <?php
                    } 
                }
           ?>
             
            </ul>
        </li>
        <?php
      
    }
    ?>
    <li><a href="layout.php?page=lienhe">Liên hệ</a></li>
    <li><a href="layout.php?page=gioithieu">Giới thiệu</a></li>
</ul>