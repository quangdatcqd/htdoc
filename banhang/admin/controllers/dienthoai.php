<?php
    require_once 'models/model_dienthoai.php';

    class DienThoai{


        function __construct()
        {   
            $this->model = new model_dienthoai();
            $act = "index";
            if(isset($_GET['act'])) $act= $_GET['act'];
            $this->$act();
            
        }// end contructor
        function index(){
            $page_title = "DANH SÁCH ĐIỆN THOẠI"; 
            $listdienthoai  = $this->model->listDienThoai();
            $page_file = "./views/dienthoai_index.php"; 
            require_once './views/layout.php';

        } // end func index

        function addnew(){
            $page_title = "THÊM ĐIỆN THOẠI"; 
            $nhasanxuat = $this->model->listNhaSanXuat();
            $page_file = "./views/dienthoai_input.php"; 
            require_once './views/layout.php';
        } //end func add new
        function insert(){ 
             
            if(isset($_POST['nhap']) ){

                $ten_dt = $_POST['ten_dt']; 
             
                 
                $link= '../upload/'.basename($_FILES['file']['name']);
          
                move_uploaded_file($_FILES['file']['tmp_name'], $link);
                $mota = $_POST['mota'];
                $tonkho = $_POST['tonkho'];
                $idNSX = $_POST['nsx'];
                $giakm = $_POST['giakm'];
                $gia = $_POST['gia'];
                date_default_timezone_set("Asia/Ho_Chi_Minh"); 
               
                $ngay = date("Y-m-d H:i:s");
                 
                $thutu = $_POST['thutu'];
                if(isset( $_POST['hide'])){
                    $an = '0';
                }else $an ='1'; 
                if(isset( $_POST['hot'])){
                    $hot = '1';
                }else $hot ='0'; 
                 $this->model->insert($ten_dt,$mota,$link,$hot,$tonkho,$giakm,$idNSX,$gia,$thutu,$an, $ngay);   
                $_SESSION['tb'] = 'Thêm Điện Thoại Thành Công!';       
                header("location:".ADMIN_URL."/?ctrl=dienthoai&act=index")  ;
            }else{
                $_SESSION['tb'] = 'Thêm Điện Thoại Thất Bại!';   
            }
     
        }// end func inssert

        function edit(){
            $page_title = "SỬA ĐIỆN THOẠI"; 
            $nhasanxuat = $this->model->listNhaSanXuat();
            $DT_edit = $this->model-> getDTById($_GET['idDT']);
            $nsx_id = $DT_edit['idNSX'];
                $id_dt = $_GET['idDT'];
                $ten_dt = $DT_edit['TenDT'];
                $mota =  $DT_edit['MoTa'];
                $tonkho =  $DT_edit['SoLuongTonKho'];
                $idNSX = $DT_edit ['idNSX'];
                $giakm = $DT_edit ['GiaKM'];
                $gia = $DT_edit ['Gia'];
                $thutu= $DT_edit['ThuTu'];
               if(  $DT_edit['AnHien'] =='0') $an_dt = 'checked';
               else $an_dt = '';
               if( $DT_edit['Hot'] ==1){
                $hot = 'checked';
            }else $hot =''; 
                 
          
            $page_file = "./views/dienthoai_update.php"; 
            require_once './views/layout.php';
           
        }//end func edit
        function update(){
  
            if(isset($_POST['nhap']) ){

                $ten_dt = $_POST['ten_dt']; 
                 
                $link= '../upload/'.basename($_FILES['file']['name']); 
                move_uploaded_file($_FILES['file']['tmp_name'], $link);
                $mota = $_POST['mota'];
                $tonkho = $_POST['tonkho'];
                $idNSX = $_POST['nsx'];
                $giakm = $_POST['giakm'];
                $idDT = $_POST['idDT'];
                $gia = $_POST['gia'];
                date_default_timezone_set("Asia/Ho_Chi_Minh"); 
               
                $ngay = date("Y-m-d H:i:s");
                 
                $thutu = $_POST['thutu'];
                if(isset( $_POST['hide'])){
                    $an = '0';
                }else $an ='1'; 
                if(isset( $_POST['hot'])){
                    $hot = '1';
                }else $hot ='0'; 
                 $this->model->update($idDT,$ten_dt,$mota,$link,$hot,$tonkho,$giakm,$idNSX,$gia,$thutu,$an, $ngay);   
                $_SESSION['tb'] = 'Sửa Điện Thoại Thành Công!';       
                header("location:".ADMIN_URL."/?ctrl=dienthoai&act=index")  ;
            }else{
                $_SESSION['tb'] = 'Sửa Điện Thoại Thất Bại!';   
            }
        }//end func update

        function delete(){
            if(isset($_GET['idDT']))
            $this->model->delete($_GET['idDT']);
            $_SESSION['tb'] = 'Xoá Điện Thoại Thành Công!';       
            header("location:".ADMIN_URL."/?ctrl=dienthoai&act=index")  ;   
        }//end func delete


 

    } //end class nha san xuat
