<center>
<?php

require_once "ham.php";

echo ThoiGianHienTai()."<br>";

echo stripUnicode("Chu Quang Đạt")."<br>";
echo slug("               người    ?    $ *  suốt   @ đời     gặp    may")."<br>";
if(isset($_GET['ngaysinh'])){
    echo tuoi($_GET['ngaysinh']);
}

?>
</center>