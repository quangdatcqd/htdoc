<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop | For Future</title>
    <link rel="stylesheet" href="../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/css/lapshop.css">
    <script src="../views/js/bootstrap.min.js"></script>
    <script src="../views/js/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="../views/js/app.js"></script>

</head>

<body>

    <div class="div-loading flex-center ">
        <div class="nano-div"></div>
        <div class="loading">
            <img src="../views/../views/images/loading.gif" alt="">
        </div>
    </div>
    <div class="contact-div row m-0">
        <div class="col-sm-4 contact flex-center">
            <span class="me-3 "><i class="bi bi-envelope"></i> support@company.com </span> | <span class="ms-3"> <i class="bi bi-phone"></i> (+01) 123 456 78</span>
        </div>
        <div class="div-search col-sm-5 flex-center">
            <form class="d-flex w-75">
                <input class="form-control  " type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-primary rounded-circle ms-1  " type="submit"> <i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="col-sm-2   flex-center   ">
            <div class="">
                <i class="bi bi-person-plus mb-1 me-1"></i> <span>Tạo Tài Khoản</span>
            </div>

        </div>
        <div class="col-sm-1  d-flex align-items-center">
            <label for="favcolor" class="layout-c"></label>
            <input type="color" id="favcolor" name="favcolor" class="d-none" value="#ff0000">

            <label for="favcolor-a" class="t-c  ">A</label>
            <input type="color" id="favcolor-a" name="favcolor" class="d-none " value="#ff0000">
            <!-- <div class="form-check form-switch "> 
                <input class="form-check-input " type="checkbox" id="darkmode"> 
            </div> -->
        </div>
    </div>
    <header class=" header-css   ">

        <div class=" row m-0  div-head ">
            <div class="col-3 div-logo flex-center">
                <a href="home.php"><em> <span>
                            Lapshop
                        </span></em></a>
            </div>
            <div class="col-6 div-nav flex-center">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item  me-4">
                                    <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
                                </li>
                                <li class="nav-item  me-4">
                                    <a class="nav-link" href="#">SẮP RA MẮT</a>
                                </li>
                                <li class="nav-item  me-4">
                                    <a class="nav-link" href="#">THỬ NGHIỆM</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-3 div-cart  h-100 ">
                <a href="?act=cartview">
                    <div class="flex-center  h-100">
                        <span class="cart-span"><i class="bi bi-basket mb-1 "></i> <span class="badge bg-danger rounded-pill"><?php if (isset($_SESSION['giohang'])) echo count($_SESSION['giohang']);
                                                                                                                                else echo "0" ?></span></span>
                        <div class="line-col mx-3"></div>
                        <span class="fw-bold cart-name  ">Giỏ hàng <br>
                            <span class="text-danger">( 15.000.000đ )</span>
                        </span>
                    </div>

                </a>
            </div>
        </div>

        <div class="div-banner  ">
            <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="../views/images/slide1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../views/images/slide2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../views/images/slide3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../views/images/slide4.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </header>
    <section class="">


        <div class="container-fluid">

            <div class="top-prduct">
                <div class="shortcode-title center mt-5 ">
                    <h3 class="normal-title">Top Sản Phẩm</h3>
                </div>
                <ul class="nav  center justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item  me-4" role="presentation">
                        <a class="nav-link active h5" id="home-tab" data-bs-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">MỚI NHẤT</a>
                    </li>
                    <li class="nav-item  me-4" role="presentation">
                        <a class="nav-link h5" id="profile-tab" data-bs-toggle="tab" href="#saller" role="tab" aria-controls="saller" aria-selected="false">BÁN CHẠY</a>
                    </li>
                    <li class="nav-item  me-4" role="presentation">
                        <a class="nav-link h5" id="contact-tab" data-bs-toggle="tab" href="#saleoff" role="tab" aria-controls="saleoff" aria-selected="false">XEM NHIỀU</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <div class="container text-dark">
                            <div class="row m-0 ">
                                <?php

                                foreach ($product_new as $pr_new) {
                                ?>
                                    <div class="col-sm-3">
                                        <div class=" box-product">
                                            <div class="div-img-box w-100">
                                                <span class="new-span  ">
                                                    Mới
                                                </span>
                                                <span class="sale-off-span  ">
                                                    -10%
                                                </span>
                                                <span class="heart-icon-span">
                                                    <i class="bi bi-suit-heart"></i>

                                                    <i class="bi  bi-suit-heart-fill"></i>
                                                </span>
                                                <span class="cart-icon-span">
                                                    <a class="text-light" href="?act=cart&what=add&id=<?= $pr_new['idDT'] ?>">
                                                        <?php
                                                        $i = '<i class="bi bi-cart-plus"></i>';
                                                        foreach ($_SESSION["giohang"] as $gh) {
                                                            if ($gh['idDT'] === $pr_new['idDT']) {
                                                                $i = '<i class="bi text-danger bi-cart-check-fill"></i>';
                                                                break;
                                                            } else $i = '<i class="bi bi-cart-plus"></i>';
                                                        }
                                                        echo $i;


                                                        ?>
                                                    </a>

                                                </span>
                                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="text-light" href="?act=productview&idsp=<?= $pr_new['idDT'] ?>"> 
                                                <i class="bi bi-eye"></i>
                                                <?=$pr_new['SoLanXem']?>
                                                </a>
                                                </span>
                                                <img data-u="image" src="../<?= $pr_new['UrlHinh'] ?>" />
                                            </div>
                                            <div class="product-content mt-3">

                                                <a href="?act=productview&idsp=<?= $pr_new['idDT'] ?>">
                                                    <p class="product-name h6 fw-bold"><?= $pr_new['TenDT'] ?></p>
                                                </a>
                                                <?php
                                                $str = $pr_new['MoTa']; //Tạo chuỗi
                                                $str = strip_tags($str); //Lược bỏ các tags HTML
                                                if (strlen($str) > 150) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                                    $strCut = substr($str, 0, 150); //Cắt 100 kí tự đầu
                                                    $str = substr($strCut, 0, strrpos($strCut, ' ')) . '...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                                                }

                                                ?>
                                                <p class="product-description mb-0 "><?= $str ?></p>
                                                <p class="text-secondary  m-0 fw-bold"> <i><del>Giá: <?= number_format($pr_new['Gia']) ?>đ</del></i> </p>
                                                <p class="product-price">Giá: <?= number_format($pr_new['GiaKM']) ?>đ</p>
                                                <a class="btn btn-primary buy" href="?act=cart&what=add&ac=buy&id=<?= $pr_new['idDT'] ?>" role="button">Mua(<?= $pr_new['SoLanMua'] ?>)</a>
                                            </div>


                                        </div>
                                    </div>
                                <?php
                                }

                                ?>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade " id="saller" role="tabpanel" aria-labelledby="saller-tab">
                        <div class="container text-dark">
                            <div class="row m-0 ">
                                <?php
                                foreach ($bestsale as $best_sale) {
                                ?>
                                    <div class="col-sm-3">
                                        <div class=" box-product">
                                            <div class="div-img-box w-100">
                                                <span class="new-span  ">
                                                    Mới
                                                </span>
                                                <span class="sale-off-span  ">
                                                    -10%
                                                </span>
                                                <span class="heart-icon-span">
                                                    <i class="bi bi-suit-heart"></i>

                                                    <i class="bi  bi-suit-heart-fill"></i>
                                                </span>
                                                <span class="cart-icon-span">
                                                    <a class="text-light" href="?act=cart&what=add&id=<?= $best_sale['idDT'] ?>">
                                                        <?php
                                                        $i = '<i class="bi bi-cart-plus"></i>';
                                                        foreach ($_SESSION["giohang"] as $gh) {
                                                            if ($gh['idDT'] === $best_sale['idDT']) {
                                                                $i = '<i class="bi text-danger bi-cart-check-fill"></i>';
                                                                break;
                                                            } else $i = '<i class="bi bi-cart-plus"></i>';
                                                        }
                                                        echo $i;


                                                        ?>
                                                    </a>

                                                </span>
                                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="text-light" href="?act=productview&idsp=<?= $best_sale['idDT'] ?>"> 
                                                <i class="bi bi-eye"></i>
                                                <?=$best_sale['SoLanXem']?>
                                                </a>
                                                </span>
                                                <img data-u="image" src="../<?= $best_sale['UrlHinh'] ?>" />
                                            </div>
                                            <div class="product-content mt-3">

                                                <a href="?act=productview&idsp=<?= $best_sale['idDT'] ?>">
                                                    <p class="product-name h6 fw-bold"><?= $best_sale['TenDT'] ?></p>
                                                </a>
                                                <?php
                                                $str = $best_sale['MoTa']; //Tạo chuỗi
                                                $str = strip_tags($str); //Lược bỏ các tags HTML
                                                if (strlen($str) > 150) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                                    $strCut = substr($str, 0, 150); //Cắt 100 kí tự đầu
                                                    $str = substr($strCut, 0, strrpos($strCut, ' ')) . '...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                                                }

                                                ?>
                                                <p class="product-description mb-0 "><?= $str ?></p>
                                                <p class="text-secondary  m-0 fw-bold"> <i><del>Giá: <?= number_format($best_sale['Gia']) ?>đ</del></i> </p>
                                                <p class="product-price">Giá: <?= number_format($best_sale['GiaKM']) ?>đ</p>
                                                <a class="btn btn-primary buy" href="?act=cart&what=add&ac=buy&id=<?= $best_sale['idDT'] ?>" role="button">Mua(<?= $best_sale['SoLanMua'] ?>)</a>
                                            </div>


                                        </div>
                                    </div>
                                <?php
                                }

                                ?>




                            


                        </div>
                    </div>

                </div>

                <!-- end tabs saller   -->

                <div class="tab-pane fade" id="saleoff" role="tabpanel" aria-labelledby="saleoff-tab">
                    <div class="container text-dark">
                        <div class="row m-0 ">
                            <?php
                            foreach ($best_views as $best_views) {
                            ?>
                                <div class="col-sm-3">
                                    <div class=" box-product">
                                        <div class="div-img-box w-100">
                                            <span class="new-span  ">
                                                Mới
                                            </span>
                                            <span class="sale-off-span  ">
                                                -10%
                                            </span>
                                            <span class="heart-icon-span">
                                                <i class="bi bi-suit-heart"></i>

                                                <i class="bi  bi-suit-heart-fill"></i>
                                            </span>
                                            <span class="cart-icon-span">
                                                <a class="text-light" href="?act=cart&what=add&id=<?= $best_views['idDT'] ?>">
                                                    <?php
                                                    $i = '<i class="bi bi-cart-plus"></i>';
                                                    foreach ($_SESSION["giohang"] as $gh) {
                                                        if ($gh['idDT'] === $best_views['idDT']) {
                                                            $i = '<i class="bi text-danger bi-cart-check-fill"></i>';
                                                            break;
                                                        } else $i = '<i class="bi bi-cart-plus"></i>';
                                                    }
                                                    echo $i;


                                                    ?>
                                                </a>

                                            </span>
                                            <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <a class="text-light" href="?act=productview&idsp=<?= $best_views['idDT'] ?>"> 
                                                <i class="bi bi-eye"></i>
                                                <?=$best_views['SoLanXem']?>
                                                </a>
                                            </span>
                                            <img data-u="image" src="../<?= $best_views['UrlHinh'] ?>" />
                                        </div>
                                        <div class="product-content mt-3">

                                            <a href="?act=productview&idsp=<?= $best_views['idDT'] ?>">
                                                <p class="product-name h6 fw-bold"><?= $best_views['TenDT'] ?></p>
                                            </a>
                                            <?php
                                            $str = $best_views['MoTa']; //Tạo chuỗi
                                            $str = strip_tags($str); //Lược bỏ các tags HTML
                                            if (strlen($str) > 150) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                                $strCut = substr($str, 0, 150); //Cắt 100 kí tự đầu
                                                $str = substr($strCut, 0, strrpos($strCut, ' ')) . '...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                                            }

                                            ?>
                                            <p class="product-description mb-0 "><?= $str ?></p>
                                            <p class="text-secondary  m-0 fw-bold"> <i><del>Giá: <?= number_format($best_views['Gia']) ?>đ</del></i> </p>
                                            <p class="product-price">Giá: <?= number_format($best_views['GiaKM']) ?>đ</p>
                                            <a class="btn btn-primary buy" href="?act=cart&what=add&ac=buy&id=<?= $best_views['idDT'] ?>" role="button">Mua(<?= $best_views['SoLanMua'] ?>)</a>
                                        </div>


                                    </div>
                                </div>
                            <?php
                            }

                            ?>


                        </div>

                    </div>
                </div>
                <!-- end tabs saleoff -->

            </div>
        </div>
        </div>
        <div class="banner-cent container mt-5">
            <img src="./../views/images/bannerbot.jpg " class="w-100" alt="">
        </div>
        <!-- <div class="shortcode-title center mt-5 ">
            <h3 class="normal-title">ĐIỆN THOẠI NỔI BẬT</h3>
        </div>
        <div class="container text-dark">
            <div class="row m-0 ">
                <div class="col-sm-3">
                    <div class=" box-product box-product-phone">
                        <div class="div-img-box w-100">
                            <span class="new-span  ">
                                Mới
                            </span>
                            <span class="sale-off-span  ">
                                -30%
                            </span>
                            <span class="heart-icon-span">
                                <i class="bi bi-suit-heart"></i>
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="cart-icon-span">
                                <i class="bi bi-cart-plus"></i>
                                <i class="bi bi-cart-check-fill"></i>
                            </span>
                            <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-eye"></i>
                            </span>
                            <img data-u="image" class="img-product-phone" src="../views/images/dt1.jpg" />
                        </div>
                        <div class="product-content mt-3">

                            <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                            <p class="product-description mb-0 "> + BỘ NHỚ TRONG: Ram 4GB + Ổ CỨNG: HDD 750GB...
                            </p>
                            <p class="product-price">5.000.000đ</p>
                        </div>

                    </div>




                </div>
                <div class="col-sm-3">
                    <div class=" box-product box-product-phone">
                        <div class="div-img-box w-100">
                            <span class="new-span  ">
                                Mới
                            </span>
                            <span class="sale-off-span  ">
                                -10%
                            </span>
                            <span class="heart-icon-span">
                                <i class="bi bi-suit-heart"></i>
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="cart-icon-span">
                                <i class="bi bi-cart-plus"></i>
                                <i class="bi bi-cart-check-fill"></i>
                            </span>
                            <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-eye"></i>
                            </span>
                            <img data-u="image" class="img-product-phone" src="../views/images/dt2.jpg" />
                        </div>
                        <div class="product-content mt-3">

                            <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                            <p class="product-description mb-0 "> + BỘ NHỚ TRONG: Ram 4GB + Ổ CỨNG: HDD 750GB...
                            </p>
                            <p class="product-price">5.000.000đ</p>
                        </div>

                    </div>




                </div>
                <div class="col-sm-3">
                    <div class=" box-product box-product-phone">
                        <div class="div-img-box w-100">

                            <span class="sale-off-span  ">
                                -30%
                            </span>
                            <span class="heart-icon-span">
                                <i class="bi bi-suit-heart"></i>
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="cart-icon-span">
                                <i class="bi bi-cart-plus"></i>
                                <i class="bi bi-cart-check-fill"></i>
                            </span>
                            <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-eye"></i>
                            </span>
                            <img data-u="image" class="img-product-phone" src="../views/images/dt3.jpg" />
                        </div>
                        <div class="product-content mt-3">

                            <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                            <p class="product-description mb-0 "> + BỘ NHỚ TRONG: Ram 4GB + Ổ CỨNG: HDD 750GB...
                            </p>
                            <p class="product-price">5.000.000đ</p>
                        </div>

                    </div>




                </div>
                <div class="col-sm-3">
                    <div class=" box-product-phone box-product ">
                        <div class="div-img-box w-100">

                            <span class="heart-icon-span">
                                <i class="bi bi-suit-heart"></i>
                                <i class="bi bi-suit-heart-fill"></i>
                            </span>
                            <span class="cart-icon-span">
                                <i class="bi bi-cart-plus"></i>
                                <i class="bi bi-cart-check-fill"></i>
                            </span>
                            <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-eye"></i>
                            </span>
                            <img data-u="image" class="img-product-phone" src="../views/images/dt4.jpg" />
                        </div>
                        <div class="product-content mt-3">

                            <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                            <p class="product-description mb-0 "> + BỘ NHỚ TRONG: Ram 4GB + Ổ CỨNG: HDD 750GB...
                            </p>
                            <p class="product-price">5.000.000đ</p>
                        </div>

                    </div>




                </div>


            </div>
        </div> -->



        <div class="bg-dark ">
            <nav class="navbar navbar-expand-lg mt-2 navbar-dark container">
                <div class="container-fluid">
                    <a class="navbar-brand active" href="#"><i class="bi bi-list-ul"></i> Tất cả</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0   d-flex">
                            <li class="nav-item    me-4">
                                <a class="nav-link " aria-current="page" href="#"><i class="bi bi-laptop"></i> Laptop</a>
                            </li>
                            <li class="nav-item  me-4">
                                <a class="nav-link" href="#"> <i class="bi bi-camera"></i> Máy ảnh</a>
                            </li>
                            <li class="nav-item  me-4">
                                <a class="nav-link " href="#" tabindex="-1" aria-disabled="false"> <i class="bi bi-phone"></i> Điện thoại</a>
                            </li>
                            <li class="nav-item  me-4 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-headset"></i> Phụ kiện
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Loa - Chuột</a></li>
                                    <li><a class="dropdown-item" href="#">Tv - Box</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Loa kéo</a></li>
                                </ul>
                            </li>

                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="btn btn-search  " type="submit">Tím kiếm</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="shortcode-title center mt-5 ">
            <h3 class="normal-title">CÁC SẢN PHẨM NỔI BẬT</h3>
        </div>

        <div class=" container">
            <div class="nav d-flex  nav-pills ms-4  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-grid-fill"></i></a>
                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="bi bi-grid-1x2-fill"></i></a>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <div class="container text-dark">
                        <nav class="navbar navbar-expand-lg navbar-light  ">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                            <a class="nav-link active listnsx  bg-light me-2  rounded" aria-current="page" href="?act=home ">Tất cả</a>
                                        </li>
                                    <?php
                                    foreach ($listnsx as $nsx) {
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link active listnsx  bg-light me-2  rounded" aria-current="page" href="?act=home&idnsx=<?= $nsx['idNSX'] ?>"><?= $nsx['TenNSX'] ?></a>
                                        </li>
                                    <?php
                                    }

                                    ?>


                                </ul>

                            </div>
                    </div>
                    </nav>
                    <div class="row m-0 ">
                        <?php

                        foreach ($product_all as $pr_all) {

                            $str1 = $pr_all['MoTa']; //Tạo chuỗi
                            $str1 = strip_tags($str1); //Lược bỏ các tags HTML
                            if (strlen($str1) > 65) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                $strCut1 = substr($str1, 0, 65); //Cắt 100 kí tự đầu
                                $mota = substr($strCut1, 0, strrpos($strCut1, ' ')) . '...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                            } else $mota = $pr_all['MoTa'];

                            $str2 = $pr_all['TenDT']; //Tạo chuỗi
                            $str2 = strip_tags($str2); //Lược bỏ các tags HTML
                            if (strlen($str2) > 30) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                $strCut2 = substr($str2, 0, 30); //Cắt 100 kí tự đầu
                                $ten = substr($strCut2, 0, strrpos($strCut2, ' ')) . '...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                            } else $ten = $pr_all['TenDT'];




                        ?>
                            <div class="col-sm-2  mt-4">
                                <div class=" box-product">
                                    <div class="div-img-box w-100">
                                        <span class="new-span  ">
                                            Mới
                                        </span>
                                        <span class="sale-off-span  ">
                                            -10%
                                        </span>
                                        <span class="heart-icon-span">
                                            <i class="bi bi-suit-heart"></i>
                                            <i class="bi bi-suit-heart-fill"></i>
                                        </span>
                                        <span class="cart-icon-span">
                                            <a class="text-light" href="?act=cart&what=add&id=<?= $pr_all['idDT'] ?>">
                                                <?php
                                                $i = '<i class="bi bi-cart-plus"></i>';
                                                foreach ($_SESSION["giohang"] as $gh) {
                                                    if ($gh['idDT'] === $pr_all['idDT']) {
                                                        $i = '<i class="bi text-danger bi-cart-check-fill"></i>';
                                                        break;
                                                    } else $i = '<i class="bi bi-cart-plus"></i>';
                                                }
                                                echo $i;


                                                ?>
                                            </a>
                                        </span>
                                        <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="text-light" href="?act=productview&idsp=<?= $pr_all['idDT'] ?>"> 
                                                <i class="bi bi-eye"></i>
                                                <?=$pr_all['SoLanXem']?>
                                                </a>
                                        </span>
                                        <img data-u="image" src="../<?= $pr_all['UrlHinh'] ?>" />
                                    </div>
                                    <div class="product-content mt-3">

                                        <p class="product-name  fw-bold"><?= $ten ?> </p>
                                        <p class="product-description mb-0 text-dark "> <?= $mota ?>
                                        </p>
                                        <p class="product-price"><?= number_format($pr_all['Gia']) ?>đ</p>
                                        <a class="btn btn-primary buy" href="?act=cart&what=add&ac=buy&id=<?= $pr_all['idDT'] ?>" role="button">Mua</a>
                                    </div>

                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings">
                <div class="container text-dark mt-5">
                    <div class=" box-product ">
                        <div class="row mt-4 ">
                            <div class="div-img-box box-img-r   col-sm-4">
                                <span class="new-span  ">
                                    Mới
                                </span>
                                <span class="sale-off-span  ">
                                    -10%
                                </span>
                                <span class="heart-icon-span">
                                    <i class="bi bi-suit-heart"></i>
                                    <i class="bi bi-suit-heart-fill"></i>
                                </span>
                                <span class="cart-icon-span">
                                    <i class="bi bi-cart-plus"></i>
                                    <i class="bi bi-cart-check-fill"></i>
                                </span>
                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <img data-u="image" class="img-r " src="../views/images/1025.jpg" />
                            </div>
                            <div class="product-content mt-3  col-sm-8 pe-5">

                                <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                                <p class="product-price">5.000.000đ</p>
                                <p class="product-description mb-0 "> + Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm
                                    trung giá rẻ của Samsung.
                                </p>

                            </div>

                        </div>
                        <div class="row mt-4 ">
                            <div class="div-img-box box-img-r   col-sm-4">
                                <span class="new-span  ">
                                    Mới
                                </span>
                                <span class="sale-off-span  ">
                                    -10%
                                </span>
                                <span class="heart-icon-span">
                                    <i class="bi bi-suit-heart"></i>
                                    <i class="bi bi-suit-heart-fill"></i>
                                </span>
                                <span class="cart-icon-span">
                                    <i class="bi bi-cart-plus"></i>
                                    <i class="bi bi-cart-check-fill"></i>
                                </span>
                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <img data-u="image" class="img-r " src="../views/images/1025.jpg" />
                            </div>
                            <div class="product-content mt-3  col-sm-8 pe-5">

                                <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                                <p class="product-price">5.000.000đ</p>
                                <p class="product-description mb-0 "> + Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm
                                    trung giá rẻ của Samsung.
                                </p>

                            </div>

                        </div>
                        <div class="row mt-4 ">
                            <div class="div-img-box box-img-r   col-sm-4">
                                <span class="new-span  ">
                                    Mới
                                </span>
                                <span class="sale-off-span  ">
                                    -10%
                                </span>
                                <span class="heart-icon-span">
                                    <i class="bi bi-suit-heart"></i>
                                    <i class="bi bi-suit-heart-fill"></i>
                                </span>
                                <span class="cart-icon-span">
                                    <i class="bi bi-cart-plus"></i>
                                    <i class="bi bi-cart-check-fill"></i>
                                </span>
                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <img data-u="image" class="img-r " src="../views/images/1025.jpg" />
                            </div>
                            <div class="product-content mt-3  col-sm-8 pe-5">

                                <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                                <p class="product-price">5.000.000đ</p>
                                <p class="product-description mb-0 "> + Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm
                                    trung giá rẻ của Samsung.
                                </p>

                            </div>

                        </div>
                        <div class="row mt-4 ">
                            <div class="div-img-box box-img-r   col-sm-4">
                                <span class="new-span  ">
                                    Mới
                                </span>
                                <span class="sale-off-span  ">
                                    -10%
                                </span>
                                <span class="heart-icon-span">
                                    <i class="bi bi-suit-heart"></i>
                                    <i class="bi bi-suit-heart-fill"></i>
                                </span>
                                <span class="cart-icon-span">
                                    <i class="bi bi-cart-plus"></i>
                                    <i class="bi bi-cart-check-fill"></i>
                                </span>
                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <img data-u="image" class="img-r " src="../views/images/1025.jpg" />
                            </div>
                            <div class="product-content mt-3  col-sm-8 pe-5">

                                <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                                <p class="product-price">5.000.000đ</p>
                                <p class="product-description mb-0 "> + Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm
                                    trung giá rẻ của Samsung.
                                </p>

                            </div>

                        </div>
                        <div class="row mt-4 ">
                            <div class="div-img-box box-img-r   col-sm-4">
                                <span class="new-span  ">
                                    Mới
                                </span>
                                <span class="sale-off-span  ">
                                    -10%
                                </span>
                                <span class="heart-icon-span">
                                    <i class="bi bi-suit-heart"></i>
                                    <i class="bi bi-suit-heart-fill"></i>
                                </span>
                                <span class="cart-icon-span">
                                    <i class="bi bi-cart-plus"></i>
                                    <i class="bi bi-cart-check-fill"></i>
                                </span>
                                <span class="eye-icon-span" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <img data-u="image" class="img-r " src="../views/images/1025.jpg" />
                            </div>
                            <div class="product-content mt-3  col-sm-8 pe-5">

                                <p class="product-name h6 fw-bold">ACER E1-410 CPU CELERON N2920 </p>
                                <p class="product-price">5.000.000đ</p>
                                <p class="product-description mb-0 "> + Gây ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt mà trong mọi tác vụ, cùng thời lượng pin ấn tượng, Samsung Galaxy A12 (6GB/128GB) sẽ là mẫu smartphone đáng mua nhất trong phân khúc tầm
                                    trung giá rẻ của Samsung.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>
            </div> -->
        </div>


        <div class="pagi mt-5 ">
            <nav aria-label="Page navigation example  mx-auto">
                <ul class="pagination justify-content-center">
                   
                    <?php 
                    if(isset($_GET['idnsx'])) $link='&idnsx='. $nsx['idNSX'];
                    else $link='';
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo ' <li class="page-item"><a class="page-link" href="?act=home'.$link.'&page='.($current_page-1).'">Trước</a> </li> ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '  <li class="page-item  active"><span class="page-link" href="#">'.$i.'</span></li> ';
                }
                else{
                    echo ' <li class="page-item"><a class="page-link" href="?act=home'.$link.'&page='.$i.'">'.$i.'</a> </li> ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo ' <li class="page-item"><a class="page-link" href="?act=home'.$link.'&page='.($current_page+1).'">Sau</a> </li> ';
            }
           ?>
                </ul>
            </nav>


        </div>

        <div class="container">



            <div class="jumbotron px-5 mt-4">
                <h1 class="display-4">Sắp ra mắt</h1>
                <p class="lead">Ra mắt ASUS ZenBook Flip Series, loạt laptop xoay gập tiên phong trang bị màn hình OLED mỏng nhất thế giới</p>
                <hr class="my-4">
                <p>ZenBook Flip S (UX371) và ZenBook Flip (UX363) là bộ đôi laptop xoay gập mỏng nhất thế giới có màn hình OLED, mang đến sự linh động, di động và hiệu năng trong một thiết kế đẳng cấp...</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Đọc thêm</a>
            </div>
        </div>







        </div>

    </section>


    <footer class="div-foot mt-5 ">
        <hr>
        <div class="container">
            <div class="row clearfix flex-center ">
                <div class="fs-ftcol col-sm-3 fs-ftcol1 ">
                    <ul class="fs-ftul">
                        <li><a target="_blank" rel="nofollow noopener" href="http://frt.vn/">Giới thiệu về công ty</a></li>
                        <li><a href="//fptshop.com.vn/ho-tro/cau-hoi-thuong-gap" title="Câu hỏi thường gặp mua hàng">Câu hỏi thường gặp mua hàng</a></li>
                        <li><a href="//fptshop.com.vn/ho-tro/chinh-sach-bao-mat" title="">Chính sách bảo mật</a></li>
                        <li><a href="//fptshop.com.vn/tos" title="">Quy chế hoạt động</a></li>
                        <li><a href="http://hddt.fptshop.com.vn/" title="">Kiểm tra hóa đơn điện tử</a></li>
                        <li><a href="//fptshop.com.vn/kiem-tra-bao-hanh?tab=thong-tin-bao-hanh" title="">Tra cứu thông tin bảo hành</a></li>
                    </ul>
                </div>
                <div class="fs-ftcol col-sm-3 fs-ftcol1">
                    <ul class="fs-ftul">
                        <li><a href="//vieclam.fptshop.com.vn/">Tin tuyển dụng</a></li>
                        <li><a href="//fptshop.com.vn/tin-tuc/Tin-khuyen-mai" title="">Tin khuyến mãi</a></li>
                        <li><a href="//fptshop.com.vn/ho-tro/huong-dan-mua-hang" title="">Hướng dẫn mua online</a></li>
                        <li><a href="//fptshop.com.vn/tra-gop" title="">Hướng dẫn mua trả góp</a></li>
                        <li><a href="https://fptshop.com.vn/ho-tro/chinh-sach-tra-gop" title="">Chính sách trả góp</a></li>
                    </ul>
                </div>
                <div class="fs-ftcol col-sm-3 fs-ftcol1">
                    <ul class="fs-ftul">
                        <li><a href="//fptshop.com.vn/cua-hang">Hệ thống cửa hàng</a></li>
                        <li><a href="//fptshop.com.vn/ho-tro/chinh-sach-bao-hanh" title="">Hệ thống bảo hành</a></li>
                        <li><a href="//fptshop.com.vn/kiem-tra-hang-apple-chinh-hang" title="">Kiểm tra hàng Apple chính hãng</a></li>
                        <li><a href="//fptshop.com.vn/ho-tro/gioi-thieu-may-doi-tra" title="">Giới thiệu máy đổi trả</a></li>
                        <li><a href="https://fptshop.com.vn/ho-tro/chinh-sach-doi-san-pham" title="">Chính sách đổi trả</a></li>
                    </ul>
                </div>
                <div class="fs-ftcol col-sm-3  fs-ftcol2">
                    <ul class="fs-ftr2 clearfix">
                        <li>
                            <p class="fs-ftrtit fw-bold mb-1" style="font-size: 20px;">Tư vấn mua hàng (Miễn phí)</p> <a href="tel:18006601" class="fw-bold text-danger" title="">1800 6601 </a> <span>(Nhánh 1)</span>
                            <p class="fs-ftrtit fw-bold mb-1 mt-3">Hỗ trợ kỹ thuật</p> <a href="tel:18006601" class="fw-bold text-danger" title="">1800 6601 </a><span>(Nhánh 2)</span>
                        </li>
                        <li>
                            <p class="fs-ftrtit fw-bold mb-1 mt-2" style="font-size: 15px;">Góp ý, khiếu nại dịch vụ (8h00-22h00)</p> <a class="fw-bold text-danger" href="tel:18006616" title="">1800 6616</a><br>
                            <!-- <a href="tel:18006601" title="">1800 6601 </a><span>(Nhánh 3)</span> -->
                        </li>
                    </ul>


                </div>
            </div>
        </div>
        <div class="flex-center bg-dark w-100">
            <p class="text-warning fw-bold  m-0 p-3 ">PS13143-Chu Quang Đạt</p>
        </div>
    </footer>

</body>

</html>