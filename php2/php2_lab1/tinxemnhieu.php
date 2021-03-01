<?php require_once "connectdb.php";


try {
    $sql = "SELECT TieuDe, SoLanXem FROM tin WHERE AnHien=1 ORDER BY SoLanXem DESC LIMIT 0,10";
    $kq = $conn->query($sql); 
  }
  catch (Exception $e){
     die("Lỗi thực thi sql: " . $e->getMessage() ) ;
  }
 
?>

<h3 class="font-weight-bold mt-3 text-center ">Tin xem nhiều</h3>
<div id="txn" class="data">
<?php foreach ($kq as $tin) { ?>
<p class="title-p"> <a   href="layout.php?page=tin">- <?=$tin['TieuDe']?> <span> <?=$tin['SoLanXem']?> lượt xem</span></a></p>
<?php }?>
</div>