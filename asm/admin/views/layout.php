<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TeLe-Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./views/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./views/assets/css/themify-icons.css">
    <link rel="stylesheet" href="./views/assets/css/metisMenu.css">
    <link rel="stylesheet" href="./views/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./views/assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->

    <link rel="stylesheet" href="./views/assets/css/typography.css">
    <link rel="stylesheet" href="./views/assets/css/default-css.css">
    <link rel="stylesheet" href="./views/assets/css/styles.css">
    <link rel="stylesheet" href="./views/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/tl30iztkwccumvmibquy2uuczexewcuvovyzb1oqmiw81foa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="./views/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script>
    $(document).ready(function(){
        tinymce.init({
      selector: '.mytextarea'
    });
    })
  </script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#" class="h4 font-weight-bold text-white">TeLe-Shop</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Quản lý nhà sản xuất</span></a>
                                <ul class="collapse">
                                    <li class="active">
                                        <a href="<?=ADMIN_URL?>/?ctrl=nhasanxuat">Danh sách nhà sản xuất</a>
                                    </li>
                                    <li><a href="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=addnew">Thêm nhà sản xuất</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                <span>Quản lý điện thoại</span></a>
                                <ul class="collapse">
                                    <li><a href="<?=ADMIN_URL?>/?ctrl=dienthoai">Danh sách điện thoại</a></li>
                                    <li><a href="<?=ADMIN_URL?>/?ctrl=dienthoai&act=addnew">Thêm điện thoại</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Quản lý người dùng</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Danh sách người dùng</a></li>
                                    <li><a href="#">Thêm người dùng</a></li> 
                                </ul>
                            </li>
                             
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <!-- <form action="#">
                                <input type="text" name="search" placeholder="Tìm kiếm..." required>
                                <i class="ti-search"></i>
                            </form> -->
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                             
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?=(isset($page_title) == true )? $page_title : "TRANG QUẢN TRỊ"?></h4>
                            <!-- <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="./views/assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['name']?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">Tin nhắn</a>
                                <a class="dropdown-item" href="#">Cài đặt</a> -->
                                <a class="dropdown-item" href="<?=ADMIN_URL?>/logout.php">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner ">
            <?php if(isset($page_file) && file_exists($page_file) == true    ) require_once $page_file ; 
                    else {
                        
                    }
                ?>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>PS13143 - Chu Quang Đạt</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    </div>
 

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="./views/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./views/assets/js/popper.min.js"></script>
    <script src="./views/assets/js/bootstrap.min.js"></script>
    <script src="./views/assets/js/owl.carousel.min.js"></script>
    <script src="./views/assets/js/metisMenu.min.js"></script>
    <script src="./views/assets/js/jquery.slimscroll.min.js"></script>
    <script src="./views/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="./views/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="./views/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="./views/assets/js/plugins.js"></script>
    <script src="./views/assets/js/scripts.js"></script>
</body>

</html>