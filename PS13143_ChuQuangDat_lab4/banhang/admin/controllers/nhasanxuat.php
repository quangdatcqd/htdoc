<?php
    require_once 'models/model_nhasanxuat.php';

    class NhaSanXuat{


        function __construct()
        {   
            $this->model = new model_nhasanxuat();
            $act = "index";
            if(isset($_GET['act'])) $act= $_GET['act'];
            $this->$act();
            
        }// end contructor
        function index(){
            $page_title = "DANH SÁCH NHÀ SẢN XUẤT";
             
            $listnhasanxuat  = $this->model->listNhaSanXuat();
            $page_file = "./views/nhasanxuat_index.php"; 
            require_once './views/layout.php';

        } // end func index

        function addnew(){
            $page_title = "THÊM NHÀ SẢN XUẤT"; 
            $page_file = "./views/nhasanxuat_input.php"; 
            require_once './views/layout.php';
        } //end func add new
        function insert(){ 
             
            if(isset($_POST['nhap']) ){

                $ten_nsx = $_POST['ten_nsx'];
           
                $thutu = $_POST['thutu'];
                if(isset( $_POST['hide'])){
                    $an = '0';
                }else $an ='1'; 
                $this->model->insert($ten_nsx,$thutu,$an);   
                $_SESSION['tb'] = 'Thêm Nhà Sản Xuất Thành Công!';       
                header("location:".ADMIN_URL."/?ctrl=nhasanxuat&act=index")  ;
            }else{
                $_SESSION['tb'] = 'Thêm Nhà Sản Xuất Thất Bại!';   
            }
     
        }// end func inssert

        function edit(){
            $page_title = "SỬA NHÀ SẢN XUẤT"; 
            
            $NSX_edit = $this->model-> getNSXById($_GET['idNSX']);
                $id_nsx = $_GET['idNSX'];
                $ten_nsx = $NSX_edit['TenNSX'];
                $thutu_nsx = $NSX_edit['ThuTu'];
               if(  $NSX_edit['AnHien'] =='0') $an_nsx = 'checked';
               else $an_nsx = '';
                 
          
            $page_file = "./views/nhasanxuat_update.php"; 
            require_once './views/layout.php';
           
        }//end func edit
        function update(){
  
            if(isset($_POST['nhap']) ){

                $ten_nsx = $_POST['ten_nsx'];
                $id = $_POST['id_NSX'];
                $thutu = $_POST['thutu'];
                if(isset( $_POST['hide'])){
                    $an = '0';
                }else $an ='1'; 
                $this->model->update($id,$ten_nsx,$thutu,$an);   
                $_SESSION['tb'] = 'Sửa Nhà Sản Xuất Thành Công!';       
                header("location:".ADMIN_URL."/?ctrl=nhasanxuat&act=index")  ;
            }else{
                $_SESSION['tb'] = 'Sửa Nhà Sản Xuất Thất Bại!';   
            }
        }//end func update

        function delete(){
            if(isset($_GET['idNSX']))
            $this->model->delete($_GET['idNSX']);
            $_SESSION['tb'] = 'Xoá Nhà Sản Xuất Thành Công!';       
            header("location:".ADMIN_URL."/?ctrl=nhasanxuat&act=index")  ;   
        }//end func delete


 

    } //end class nha san xuat


 

?>