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
        <th scope="col">Tên NSX</th>
        <th scope="col">ID</th>  

        <th scope="col">Trạng Thái</th>  
        
        <th scope="col">Sửa</th>  
        <th scope="col">Xoá</th>  
      </tr>
    </thead>
    <tbody>
   <?php
    foreach($listnhasanxuat as $listnsx){
     
      if($listnsx['AnHien'] == "0"){
        $trangthai = 'Đang Ẩn';
      }else $trangthai = 'Đang Hiện';
    ?> 
  
    <tr>
      <th scope="row"><?=$listnsx['ThuTu']?></th>
      <td><?=$listnsx['TenNSX']?></td>
      <td><?=$listnsx['idNSX']?></td> 
      <td><?=$trangthai?></td>
      <td><a href="<?=ADMIN_URL.'/?ctrl=nhasanxuat&act=edit&idNSX='.$listnsx['idNSX']?>">Sửa</a></td> 
      <td><a href="<?=ADMIN_URL.'/?ctrl=nhasanxuat&act=delete&idNSX='.$listnsx['idNSX']?>">Xoá</a></td> 
    </tr>
    
    <?php   } ?> 
  </tbody>
 
</table>


 
</div>