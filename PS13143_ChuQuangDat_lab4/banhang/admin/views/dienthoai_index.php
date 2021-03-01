<div>
<span class="text-danger"><?php
if(isset($_SESSION['tb']) && $_SESSION['tb']!=''){
  echo $_SESSION['tb'];
unset($_SESSION['tb']);
}else {

}
   
?></span>
<table class="table table-sm ">
    
    <thead class="table-dark">
      <tr>
        <th scope="col">Thứ Tự</th>
        <th scope="col">Tên Điện Thoại</th>
        
        <th scope="col">Ảnh</th>
        <th scope="col">Mô Tả</th> 
        <th scope="col">Trạng Thái</th>  
        <th scope="col">Số lượng</th> 
        <th scope="col">ID</th>
        <th scope="col">Sửa</th>  
        <th scope="col">Xoá</th>  
      </tr>
    </thead>
    <tbody>
   <?php
    foreach($listdienthoai as $listnsx){
     
      if($listnsx['AnHien'] == "0"){
        $trangthai = 'Đang Ẩn';
      }else $trangthai = 'Đang Hiện';
      if($listnsx['Hot'] == "1"){
        $hot = 'HOT';
      }else $hot = '';
    ?> 
  
    <tr>
      <th scope="row"><?=$listnsx['ThuTu']?></th>
      <td><?=$listnsx['TenDT']?>
      
      <p>Giá: <?=number_format($listnsx['Gia'])?></p>
        <p>Giá KM: <?=number_format($listnsx['GiaKM'])?></p>
        <p>Nhập Ngày: <?=$listnsx['ThoiDiemNhap']?></p>
        
      </td>
      
      <td><img class="img-dt" src="<?=$listnsx['UrlHinh']?>" alt=""></td>
      <td><?=$listnsx['MoTa']?></td>
      <td>
        <p><?=$trangthai?></p>
        <p> <?=$hot?></p>
      </td>
      <td>
        <p>Tồn Kho: <?=$listnsx['SoLuongTonKho']?></p>
        <p>Lượt Xem: <?=$listnsx['SoLanXem']?></p>
        <p>Lượt Mua: <?=$listnsx['SoLanMua']?></p>
      </td>
      <td><?=$listnsx['idDT']?></td> 
      <td><a href="<?=ADMIN_URL.'/?ctrl=dienthoai&act=edit&idDT='.$listnsx['idDT']?>">Sửa</a></td> 
      <td><a href="<?=ADMIN_URL.'/?ctrl=dienthoai&act=delete&idDT='.$listnsx['idDT']?>">Xoá</a></td> 
    </tr>
    
    <?php   } ?> 
  </tbody>
 
</table>


 
</div>