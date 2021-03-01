<div class="row">
    <div class="modal-product-img col-sm-4">
        <img class="mt-5" src="../<?= $pr_view['UrlHinh'] ?>" width="500px" height="500px" alt="">
    </div>
    <div class="col-sm-2"></div>
    <div class="modal-product-content col-sm-6 p-4 ">
        <div class="modal-pr-name h4 ms-0 fw-bold border-bottom border-white pb-1  "><?= $pr_view['TenDT'] ?></div>

        <!-- <div class="gift-div">
        <ul class="p-promotion">
            <li>
                <span class="promotion-title">Khuyến mại </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> <a href=" "> Thẻ Gold Member - ƯU ĐÃI GIÁ TRỊ </a> <span class="gia-kmai"> 1.290.000 đ </span> </span>
                <span class="kmai-info">

                    <span class="desc-kmai"> </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> Miễn phí dán Skin mặt lưng Laptop tại Skin88 <span class="gia-kmai"> 180.000 đ </span> </span>
                <span class="kmai-info">

                    <span class="desc-kmai">Dán vỏ Laptop, điện thoại theo hình ảnh khách
                        hàng tùy chọn </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> <a href=" ">Balo laptop chống sốc BL88 </a> <span class="gia-kmai"> 295.000 đ </span> </span>
                <span class="kmai-info">

                    <span class="desc-kmai">hoặc Túi xách Laptop88 </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> <a href=" ">Chuột không dây Office </a> <span class="gia-kmai"> 159.000 đ </span> </span>
                <span class="kmai-info">

                    <span class="desc-kmai"> </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> Giảm tặng 30%, tối đa 300.000vnđ </span>
                <span class="kmai-info">

                    <span class="desc-kmai">(áp dụng tại hệ thống Laptop88 và Bệnh Viện Công
                        Nghệ 88) </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> Cân màu màn hình miễn phí bằng Spyder 5 Elite tại cơ sở
                    94 Trần Vỹ </span>
                <span class="kmai-info">

                    <span class="desc-kmai"> </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> Window 10 Bản Quyền theo máy </span>
                <span class="kmai-info">

                    <span class="desc-kmai"> </span>

                </span>
            </li>
            <li class="private-offer specialOfferGroup">
                <span class="kmai"> Các quà tặng đánh dấu (*) sẽ không được áp dụng khi
                    thanh toán qua VISA/MASTER </span>
                <span class="kmai-info">

                    <span class="desc-kmai"> </span>

                </span>
            </li>
        </ul>
    </div> -->

        <p class="modal-price  h4  fw-bold "><?= number_format($pr_view['Gia']) ?>đ
            <!-- <span class="position-relative"><span class="sale-off-span sale-off-span-modal bg-danger "> -30%</span></span> -->
        </p>
        <p class="hotline m-0  ">Hotline tư vấn: <a class="text-info" href="tel:2471069999">024.7106.9999</a></p>
        <div class="add-cart btn btn-primary">

            <a class="text-light" href="?act=cart&what=add&ac=buy&id=<?= $pr_view['idDT'] ?>"><span>Mua ngay</span></a>
        </div>

        <div class="modal-mota mt-3">
            <!-- <p class="h6 fw-bold bg-white text-dark p-2"><i class="bi bi-back"></i> ĐẶC ĐIỂM NỔI BẬT
        </p>
        <ul>
            <li class="short-descr-col-1">Màn hình 14 inch Full HD cho hình ảnh sắc nét</li>
            <li class="short-descr-col-1">Khối lượng nhẹ 1.6 kg dễ dàng mang theo sử dụng
            </li>
            <li class="short-descr-col-1">Viền màn hình mỏng mở rộng không gian hiển thị
            </li>
            <li class="short-descr-col-1">Đèn nền bàn phím tiện lợi trong điều kiện thiếu sáng
            </li>
            <li class="short-descr-col-1">Hiệu năng mạnh mẽ xử lý tốt các tác vụ hàng ngày
            </li>
            <li class="short-descr-col-1">Bảo mật vân tay mở khóa nhanh chóng với 1 chạm
            </li>
            <li class="short-descr-col-1">Trang bị đầy đủ các cổng kết nối phổ biến</li>
            <li class="short-descr-col-1">Công nghệ sạc pin nhanh, sạc 60% trong 49 phút
            </li>
        </ul> -->
            <p class="h6 fw-bold bg-white text-dark p-2"><i class="bi bi-alt"></i> THÔNG SỐ KỸ THUẬT</p>
            <div class=" ">
                <table class=" ">

                    <tbody class="thongso">
                        <tr>
                            <td class="title">CPU:</td>
                            <td class="value"> <?= $thuoctinh['CPU'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Dung lượng RAM:</td>
                            <td class="value"><?= $thuoctinh['RAM'] ?></td>
                        </tr>
                        <tr>
                            <td class="title">Dung lượng :</td>
                            <td class="value"><?= $thuoctinh['BoNhoTrong'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Loại màn hình:</td>
                            <td class="value"> <?= $thuoctinh['ManHinh'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Dung lượng pin:</td>
                            <td class="value"> <?= $thuoctinh['DungLuongPin'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Thẻ Nhớ:</td>
                            <td class="value"> <?= $thuoctinh['TheNho'] ?></td>
                        </tr>
                        <tr>
                            <td class="title">Camera trước:</td>
                            <td class="value"> <?= $thuoctinh['CameraTruoc'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Camera sau:</td>
                            <td class="value"> <?= $thuoctinh['CameraSau'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Thẻ Sim:</td>
                            <td class="value"> <?= $thuoctinh['TheSIM'] ?> </td>
                        </tr>
                        <tr>
                            <td class="title">Hệ Điều Hành:</td>
                            <td class="value"> <?= $thuoctinh['HeDieuHanh'] ?> </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="form-group binhluan mt-5  ">
    <label for="comment" class="fw-bold h3">Bình luận:</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
    <button class="btn btn-success float-right mt-3">Bình luận</button>
</div>
<div class="ndungbinhluan mt-5  border border-success rounded p-3">
    <?php
        foreach ($cmt as $cmt ) {
            ?>
    <div class="boxbinhluan bg-light p-3 ps-5 rounded-pill mt-3">
        <p class="h5 fw-bold"><?=$this->model->userdetail($cmt['idUser'])['HoTen']?></p>
        <p class="ps-2"><?=$cmt['NoiDungBL']?></p>
    </div>
            <?php
        }
    
    ?>
    
</div>