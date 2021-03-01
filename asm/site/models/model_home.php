<?php
require_once '../../system/model_system.php';
    class model_home extends model_system{

        function product_all_pagi($start, $limit){

            

            $sql= "SELECT * FROM dienthoai  LIMIT $start, $limit";
            return $this->query($sql)->fetchAll();
        }
        function product_all(){ 
            $sql= "SELECT * FROM dienthoai  ";
            return $this->query($sql)->fetchAll();
        }

        function listnsx(){
            $sql= "SELECT * FROM nhasanxuat  ";
            return $this->query($sql)->fetchAll();
        }


        function product_new(){
            $sql= "SELECT * FROM dienthoai ORDER BY ThoiDiemNhap DESC limit 4";
            return $this->query($sql)->fetchAll();
        }
        function product_sale_best(){
            $sql= "SELECT * FROM dienthoai ORDER BY SoLanMua DESC limit 4";
            return $this->query($sql)->fetchAll();
        }
        function product_view_best(){
            $sql= "SELECT * FROM dienthoai ORDER BY SoLanXem DESC limit 4";
            return $this->query($sql)->fetchAll();
        }

        function productByIdNSX($id,$start,$limit){
            
            $sql= "SELECT * FROM dienthoai WHERE idNSX ='$id'   LIMIT $start, $limit";
            return $this->query($sql)->fetchAll();
        }

        function productNSX($id){
            
            $sql= "SELECT * FROM dienthoai WHERE idNSX ='$id'    ";
            return $this->query($sql)->fetchAll();
        }

        function detail($id){
            $sql= "SELECT * FROM dienthoai WHERE idDT=$id";
            return $this->queryOne($sql);
        }
        function comment($id){
            $sql= "SELECT * FROM binhluan WHERE idDT=$id";
            return $this->query($sql)->fetchAll();
        }
        function userdetail($id){
            $sql= "SELECT * FROM users WHERE idUser=$id";
            return $this->queryOne($sql);
        }

        function prop_detail($id){
            $sql= "SELECT * FROM thuoctinhdt WHERE idDT=$id";
            return $this->queryOne($sql);
        }

        function luudonhangnhe($idDH, $ht, $email,$tt,$gh,$dienthoai,$diachi){            
            if ($idDH==-1){
              $sql = "INSERT INTO donhang SET TenNguoiNhan='{$ht}', PhuongThucThanhToan='{$tt}',PhuongThucGiaoHang='{$gh}',emailNguoiNhan='{$email}',ThoiDiemDatHang=Now(), DiaChiNguoiNhan = '{$diachi}',SoDienThoai='{$dienthoai}' ,AnHien=1";              
              $kq= $this->query($sql);
              if (!$kq) return FALSE;
              else {
                  
                  return $this->conn->lastInsertId();
              }
            } else {
              $sql = "UPDATE donhang SET TenNguoiNhan='{$ht}',  PhuongThucThanhToan='{$tt}',PhuongThucGiaoHang='{$gh}', emailNguoiNhan='{$email}', ThoiDiemDatHang=Now(), DiaChiNguoiNhan = '{$diachi}',SoDienThoai='{$dienthoai}' , AnHien=1 where idDH=$idDH";              
               $kq= $this->query($sql);
               if (!$kq) return FALSE;
                   else return $idDH;
               }
        }//function luudonhangnh
        function luugiohangnhe($idDH, $giohang){
               $sql = "DELETE FROM donhangchitiet WHERE idDH='$idDH'";
               $this->query($sql);
               foreach ($giohang as $idDT=>$dt){
                    $tenDT = $dt['TenDT'];
                    $gia= $dt['Gia'];
                    $Amount= $dt['Amount'];
                    $sql = "INSERT INTO donhangchitiet SET idDH='$idDH', idDT= '$idDT', TenDT='{$tenDT}', Gia='{$gia}', SoLuong='$Amount'";
                    $kq= $this->query($sql);
               }//foreach
        }
        function viewplus($id){
            $sl =  $this->detail($id)['SoLanXem']+1;
            $sql = "UPDATE dienthoai SET  SoLanXem='{$sl}' WHERE idDT=$id";              
            $kq= $this->query($sql);
        }

        function buyplus($id){
            $sl =  $this->detail($id)['SoLanMua']+1;
            $sql = "UPDATE dienthoai SET  SoLanMua='{$sl}' WHERE idDT=$id";              
            $kq= $this->query($sql);
        }

         

    }



?>