<?php
require_once "connectdb.php";
try {
  $sql = "SELECT * FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 0,12";
  $kq = $conn->query($sql);
} catch (Exception $e) {
  die("Lỗi thực thi sql: " . $e->getMessage());
}
?>

<style>
  #tinmoinhat {
    width: 100%;
    font-size: 1.2em
  }

  #tinmoinhat h4 {
    height: 60px;
    font-size: 1.3em;
    overflow: hidden;
    margin-top: 0
  }

  #tinmoinhat .col {
    width: 48%;
    float: left;
    height: 430px;
    border-radius:5px;
    box-shadow: 1px 1px 6px 1px #b2b2b275;
    margin: 5px;
    overflow: hidden;
    box-sizing: border-box;
    padding: 20px
  }

  #tinmoinhat .col img {
    margin: auto;
    width: 100%;
  }

  #tinmoinhat .tomtat {
    height: 120px;
    overflow: hidden;
    line-height: 150%
  }
</style>
<div id="tinmoinhat" class="data  ">
  <?php foreach ($kq as $tin) { ?>
    <div class="col m-2">
      <h4> <a href="layout.php?page=tin"><?= $tin['TieuDe'] ?> </a></h4>
      <em> Ngày đăng : <?= date('d/m/Y', strtotime($tin['Ngay'])); ?></em><br>
      <img src="<?= $tin['urlHinh'] ?>" height="180" width="100%">
      <div class="tomtat"> <?= $tin['TomTat'] ?></div>
    </div>
  <?php } ?>
</div>