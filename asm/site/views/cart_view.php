<div class="card mt-5 col-10 m-auto p-0">
            <div class="card-header fw-bold">SẢN PHẨM BẠN ĐÃ CHỌN</div>
                <?php
                $stt = 0;
                $tongtien=0;
                if(!isset($_SESSION['giohang']) || count($_SESSION['giohang'])==0) echo "<h4 class=' p-3 text-danger text-center'>Chưa chọn sản phẩm nào!</h4>";
                else{ 
                foreach ($_SESSION['giohang'] as $idProduct => $sp) {
                    $tongtien += $sp['Gia'] * $sp['Amount'];
                ?>
                <span></span>
                    <div class="card-body ">
                        <div class="d-flex">
                            <div class="p-2 border"><?= $stt ?></div>
                            <div class="p-2 border  col-4 "><?= $sp['TenDT'] ?> <p>Tồn kho: <?=$this->model->detail($idProduct)['SoLuongTonKho'] ?> </p> </div>
                            <div class="p-2 border col-3 border text-center">
                                <div class="input-group">
                                    <a class="input-group-text btn btn-danger"  href="?act=cart&what=removea&id=<?= $idProduct ?>" > - </a>
                                    <input type="number" value="<?= $sp['Amount'] ?>" class="form-control text-center" min="1" max="100">
                                    <?php if(  $sp['Amount']  >= $this->model->detail($idProduct)['SoLuongTonKho']  ) {?>
                                        <span class="input-group-text btn btn-dark "  href="?act=cart&what=adda&id=<?= $idProduct ?>" > + </span>
                                    <?php }else {?>
                                       
                                        <a class="input-group-text btn btn-success "  href="?act=cart&what=adda&id=<?= $idProduct ?>" > + </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="p-2 border col-2 border text-end"><?= number_format($sp['Gia'] * $sp['Amount']) ?>đ</div>
                            <div class="p-2 border flex-grow-1 text-end"><a href="?act=cart&what=remove&id=<?= $idProduct ?>"  onclick="return deletetrue()" class="btn btn-default ">
                                    <i class="bi bi-trash"></i>
                                </a></div>
                        </div>
                    </div>
                <?php
                    $stt++;
                                    }
                }
                ?>
                <div class="d-flex">
                    <div class="p-2 flex-fill">
                        <a href="<?= SITE_URL ?>" class="btn btn-secondary">TIẾP TỤC MUA HÀNG</a>
                    </div>
                    <?php
                         if(!isset($_SESSION['giohang']) || count($_SESSION['giohang'])!=0){
                                                 ?>
                    <div class="p-2 flex-fill text-center">
                        <a href="?act=cart&what=removeall" onclick="return deletetrue()" class="btn btn-warning">XÓA GIỎ HÀNG</a>
                    </div>
                    <div class="p-2 flex-fill text-end">
                        <a href="?act=checkout" class="btn btn-primary">THANH TOÁN</a>
                    </div>
                    <?php }?>
                </div>
                <div class="card-footer fw-bold">TỔNG TIỀN: <span class=" text-danger"><?=number_format($tongtien)?> VNĐ</span></div>
            </div>