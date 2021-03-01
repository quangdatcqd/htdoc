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
               <a href="home.php"> <em> <span>
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
                            
                        </div>
                    </div>
                </nav>
            </div>

        </div>


    </header>

    <section>
        <div class="container">
            <?php
                if(is_file($pathview)) require_once $pathview; 
                else echo "NO";
            ?>
            

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