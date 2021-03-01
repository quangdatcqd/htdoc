<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Tin tức online</title>
    <style>
        body{
            background-image: url("upload/images/bg.jpg");
            background-size: 100%;
            
            
        }
        header.row {
            height: 250px;
            background-color: darkcyan
        }

        nav.row {
            height: 45px;
            background-color: #6a2020
        }

        .col-9,
        .col-3 {
            min-height: 500px
        }

        .col-9 {
            background-color: azure
        }

        .col-3 {
            background-color: #609325;
            
        }
        .col-3 a{
            color: white;
            text-decoration: none;
        }
        footer.row {
            height: 120px;
            
        }
        .title-p a:hover{
    color: wheat;
  }
  a{
    text-decoration: none !important; 
  }
  h3{
      color: #740000;
  }
    </style>
</head>

<body>
    <div class="container px-n5">
        <header class="row"> <img src="upload/images/banner.jpg" width="100%" height="100%" alt=""></header>
        <nav class="row pl-4"> 
            <?php
                require_once "menu.php";

            ?>
        </nav>
        <div class="row ">
            <main class="col-9">
                <?php
                   
                    require_once 'connectdb.php';
                    if (isset($_GET['page']))
                        $page = trim(strip_tags($_GET['page']));
                    else $page = "";

                    switch ($page) {
                        case "lienhe":
                            require_once 'lienhe.php';
                            break;
                        case "gioithieu":
                            require_once 'gioithieu.php';
                            break;
                        case "tin":
                            require_once 'tinchitiet.php';
                            break;
                        case "loaitin":
                            if(isset($_GET['idcat'])){
                                $kq = getTinById($_GET['idcat']);
                            }
                           
                            require_once 'tintrongloai.php';
                            break;
                        case "theloai":
                            if(isset($_GET['idTL'])){
                                $kq= getTinByIdLoai($_GET['idTL']);
                            }
                           
                            require_once 'tintrongtheloai.php';
                            break;
                        default:
                            require_once 'homet.php';
                    } //switch
                ?>
            </main>
            <aside class="col-3"> 
                <?php require_once "tinxemnhieu.php"?>
                <br> <br>
                <?php require_once "tinnoibat.php"?>
            </aside>
        </div>
        <footer class="row"><img src="upload/images/fooot.jpg" width="100%" height="100%" alt=""> </footer>
    </div>