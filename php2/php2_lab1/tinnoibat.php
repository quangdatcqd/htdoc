<?php 
require_once "connectdb.php";


try {
    $sql="SELECT TieuDe, SoLanXem FROM tin WHERE NoiBat=1 ORDER BY Ngay DESC LIMIT 0,8"; 
    $kq = $conn->query($sql); 
  }
  catch (Exception $e){
     die("Lỗi thực thi sql: " . $e->getMessage() ) ;
  }
 
?>
  <hr class="bg-white">
<h3 class="font-weight-bold   text-center">Tin nổi bật</h3>
<div id="txn" class="data">
<?php foreach ($kq as $tin) { ?>
<p class="title-p"> <a href="layout.php?page=tin">-  <?=$tin['TieuDe']?> <span> <?=$tin['SoLanXem']?> lượt xem</span></a></p>
<?php }?>
</div>