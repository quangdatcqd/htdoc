<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tiêu đề website </title>
    <link rel="stylesheet" href="./views/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/css/style.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.tiny.cloud/1/tl30iztkwccumvmibquy2uuczexewcuvovyzb1oqmiw81foa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    $(document).ready(function(){
        tinymce.init({
      selector: '.mytextarea'
    });
    })
  </script>
</head>

<body>
    <div class="container">
        <header class="row bg-info mt-1">Quản trị website Bán Điện Thoại</header>
        <div class="row noidung">
            <aside class="col-3 bg-light p-0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quản lý nhà sản xuất
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><a href="<?=ADMIN_URL?>/?ctrl=nhasanxuat">Danh sách nhà sản xuất</a></p>
                                <p><a href="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=addnew">Thêm nhà sản xuất</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quản lý điện thoại
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p><a href="<?=ADMIN_URL?>/?ctrl=dienthoai">Danh sách điện thoại</a></p>
                                <p><a href="<?=ADMIN_URL?>/?ctrl=dienthoai&act=addnew">Thêm điện thoại</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Quản lý thành viên
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><a href="#">Danh sách thành viên</a></p>
                                <p><a href="#">Thêm thêm thành viên</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <main class="col-9 bg-white mx-n2">
                <h1 class="h5 py-2 border-bottom text-danger"> <?=(isset($page_title) == true )? $page_title : "TRANG QUẢN TRỊ"?></h1>
                <?php if(isset($page_file) && file_exists($page_file) == true    ) require_once $page_file ; 
                    else {
                        
                    }
                ?>
            </main>
        </div>
        <footer class="row bg-dark mt-1 mb-2 text-warning text-center">Chân trang</footer>
    </div>




    <script src="./views/js/bootstrap.min.js"></script>
    <script src="./views/js/jquery.min.js"></script>
</body>

</html>