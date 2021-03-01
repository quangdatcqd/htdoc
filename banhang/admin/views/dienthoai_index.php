<div class="noidung_dt ">
  <span class="text-danger"><?php
                            if (isset($_SESSION['tb']) && $_SESSION['tb'] != '') {
                              echo $_SESSION['tb'];
                              unset($_SESSION['tb']);
                            } else {
                            }

                            ?></span>
  <table class="table table-sm tb_dt">

    <thead class="table-dark">
    <tr>
        <th width="50px" scope="col">STT</th>
        <th scope="col" width="300px">Tên Điện Thoại</th>

        <th scope="col" width="100px">Ảnh</th>
        <th scope="col" width="400px">Mô Tả</th>
        <th scope="col" width="200px">Trạng Thái</th>
        <th scope="col " width="200px">Số lượng</th>
        <th scope="col" width="50px">Sửa</th>
        <th scope="col" width="50px">Xoá</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listdienthoai as $listnsx) {

        if ($listnsx['AnHien'] == "0") {
          $trangthai = 'Đang Ẩn';
        } else $trangthai = 'Đang Hiện';
        if ($listnsx['Hot'] == "1") {
          $hot = 'HOT';
        } else $hot = '';
      ?>

        <tr>
          <th scope="row"><?= $listnsx['ThuTu'] ?></th>
          <td><?= $listnsx['TenDT'] ?>

            <p>Giá: <?= number_format($listnsx['Gia']) ?></p>
            <p>Giá KM: <?= number_format($listnsx['GiaKM']) ?></p>
            <p>Nhập Ngày: <?= $listnsx['ThoiDiemNhap'] ?></p>

          </td>

          <td><img class="img-dt" src="<?= $listnsx['UrlHinh'] ?>" alt=""></td>
          <td><?= $listnsx['MoTa'] ?></td>
          <td>
            <p><?= $trangthai ?></p>
            <p> <?= $hot ?></p>
          </td>
          <td>
            <p>Tồn Kho: <?= $listnsx['SoLuongTonKho'] ?></p>
            <p>Lượt Xem: <?= $listnsx['SoLanXem'] ?></p>
            <p>Lượt Mua: <?= $listnsx['SoLanMua'] ?></p>
          </td>
          <td><a href="<?= ADMIN_URL . '/?ctrl=dienthoai&act=edit&idDT=' . $listnsx['idDT'] ?>"><i class="bi bi-pencil"></i></a></td>
          <td><a  onclick= "return confirm()" href="<?= ADMIN_URL . '/?ctrl=dienthoai&act=delete&idDT=' . $listnsx['idDT'] ?>"><i  class="bi bi-x-circle"></i></a></td>
        </tr>

      <?php   } ?>
    </tbody>

  </table>



</div>

<script>
  function confirm() {
   confirm("Bạn có muốn xoá!");
     

}
</script>