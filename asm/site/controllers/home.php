<?php
    session_start();
    require_once "../models/model_home.php";

     
class home{
   
    function __construct() 
    { 
        $this->model = new model_home();
        $act = "home";
        if(isset($_GET['act'])) $act = $_GET['act']; 
        $this->$act();
        
       
    }

    function home(){
        $bestsale =  $this->model->product_sale_best();
        $best_views=  $this->model->product_view_best();
        $listnsx = $this->model->listnsx();
        $product_new = $this->model->product_new(); 
         
        if(isset($_GET['idnsx'])){
             
            $total_records = count($this->model->productNSX($_GET['idnsx']));
            $limit = 6;
                        
            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        

            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);

            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }

            // Tìm Start
            $start = ($current_page - 1) * $limit;
                        // PHẦN HIỂN THỊ PHÂN TRANG
            
            $product_all = $this->model->productByIdNSX($_GET['idnsx'],$start ,$limit ); 
        }else {
            $total_records = count($this->model->product_all());
            $limit = 12;
                        
            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        

            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);

            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }

            // Tìm Start
            $start = ($current_page - 1) * $limit;
                        // PHẦN HIỂN THỊ PHÂN TRANG 
            $product_all = $this->model->product_all_pagi($start ,$limit);
        }
        require_once "../views/layout.php"; 
    }

    function productview(){
        if(isset($_GET['idsp'])) {
            $id = $_GET['idsp']; 
            $cmt =  $this->model->comment($id);
            $this->model->viewplus($id);
            $pr_view = $this->model->detail($id);
            $thuoctinh = $this->model->prop_detail($id);
            $pathview = "../views/chitietsp.php";
        } 
       else  $pathview='';
      
        require_once "../views/layoutp.php";  
    }
     function cartview(){
        
        $pathview = "../views/cart_view.php"; 
        require_once "../views/layoutp.php"; 
     }
     function checkout(){
        $pathview = "../views/checkout.php";
        require_once "../views/layoutp.php";  
     }

     function luudonhang(){
        $hoten = trim(strip_tags($_POST['HoTen']));
        $diachi = trim(strip_tags($_POST['address']));
        $dienthoai = trim(strip_tags($_POST['phone']));
        $email = trim(strip_tags($_POST['email']));
        $phuongthuctt = trim(strip_tags($_POST['phuongthuctt']));
        $phuongthucgh = trim(strip_tags($_POST['phuongthucgh']));
        if (isset($_SESSION['idDH'])) $idDH= $_SESSION['idDH']; else $idDH="-1";
        $idDH = $this->model->luudonhangnhe($idDH, $hoten, $email,$phuongthuctt,$phuongthucgh,$dienthoai,$diachi);
         
        if ($idDH){
           $_SESSION['idDH'] = $idDH;     
           $giohang = $_SESSION['giohang'];
           $this->model->luugiohangnhe($idDH, $giohang);
        //    header("location:" .SITE_URL."/act=camon");

        }//if ($idDH)
        foreach ($_SESSION['giohang'] as $giohang) {
            $this->model->buyplus($giohang['idDT']);
        }
      

        header("location: home.php?act=camon");
         
     }//function luudonhang
     function camon(){   
        $pathview = "../views/camon.php";
        require_once "../views/layoutp.php";  
   }
    function cart(){      
        //Tiếp nhậtn biến id (mã sản phẩm) và what (để biết thêm/xóa sp)
        $ac= $_GET['ac'];
        $id = $_GET['id'];  settype($id, "int");        
        $what ="add"; if(isset($_GET['what'])) $what = $_GET['what']; 
        if ($what=="add"){              
             if (isset($_SESSION['giohang'])==false) $_SESSION['giohang']=[]; //tạo mảng rổng nếu chưa có
             $spFromDB = $this->model->detail($id);  //if ($spFromDB==null) ...
             $spInCart = $_SESSION['giohang'][$id]; //['TenDT'=>'A','Amount'=>2]
             if ($spInCart!=null) $soluong=$spInCart['Amount']+1;
             else $soluong =1;
             if($_SESSION['giohang'][$id]['Amount'] >= $spFromDB['SoLuongTonKho']    )$soluong = $_SESSION['giohang'][$id]['Amount'];
             
             $_SESSION['giohang'][$id]=[
                'idDT'=>$spFromDB['idDT'],
                 'TenDT'=>$spFromDB['TenDT'],
                 'Gia'=>$spFromDB['Gia'],
                 'Amount' =>$soluong
            ];
            if(isset($ac) && $ac =="buy") header("location: home.php?act=cartview");
            else
            header("location: home.php");
         
        }//if what=="add"    
        if ($what=="remove"){
            unset($_SESSION['giohang'][$id]);
            header("location: home.php?act=cartview");
            
       }//$what=="remove" 
       if ($what=="removea"){
           if(        $_SESSION['giohang'][$id]['Amount'] ==1 )   unset($_SESSION['giohang'][$id]);
        else $_SESSION['giohang'][$id]['Amount'] -- ;
        header("location: home.php?act=cartview");
        
   }//$what=="remove" 
   if ($what=="adda"){
    $_SESSION['giohang'][$id]['Amount'] ++ ;
 header("location: home.php?act=cartview");
 
}//$what=="remove" 
       if ($what=="removeall"){
         
        $_SESSION['giohang'] = [];
        header("location: home.php?act=cartview");
        
   }//$what=="removeall" 
     
   }//function cart
    
    

    
    



}



new home();

?>