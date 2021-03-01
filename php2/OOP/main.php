<center>
<?php
require_once 'test.php';


    $hs1 = new nhanvien();
    $hs1->ho =" Quang ";  
    $hs1->ten = " Đạt"; 
    $hs1->ngaysinh="24/3/2000";

    $nvut = new nhanvienuutu();
    $nvut->ho = 'Hải';
    $nvut->ten = 'Minh';
    $nvut->ngaysinh = '14/3/2001';
    $nvut->thuong = 20000000;

    echo 'Tôi tên:' . $hs1->ten.'<br>'; 
    echo 'Họ Và Tên:'.$hs1->hoten() .'<br>';
    echo 'Tuổi: '.$hs1->tuoi();
    echo '<br>';
    echo '<br>';
    echo 'Họ Tên: '.$nvut->hoten().'<br>';
    echo 'Tuổi: '.$nvut->tuoi().'<br>';
    echo 'Thưởng: '.number_format($nvut->thuong);

 
?>
</center>