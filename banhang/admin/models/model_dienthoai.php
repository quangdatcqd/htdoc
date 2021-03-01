<?php

require_once '../system/model_system.php';
class model_dienthoai extends model_system{
    
    function listDienThoai(){
        $sql = "SELECT * FROM dienthoai ORDER BY ThuTu asc";
        return $this->query($sql);
    }
    function insert($ten_dt,$mota,$hinh,$hot,$tonkho,$giakm,$idNSX,$gia,$thutu,$an, $ngay){
        $sql = "INSERT INTO dienthoai( TenDT,MoTa,UrlHinh,hot,SoLuongTonKho,GiaKM,idNSX,Gia,ThuTu,AnHien,ThoiDiemNhap) VALUES('$ten_dt','$mota','$hinh','$hot','$tonkho','$giakm','$idNSX','$gia', '$thutu','$an',' $ngay') "; 
        $this ->execute($sql);
    }

    function update($id, $ten_dt,$mota,$hinh,$hot,$tonkho,$giakm,$idNSX,$gia,$thutu,$an, $ngay){
         if($hinh != '')   $sql = "UPDATE `dienthoai` SET `TenDT` = '$ten_dt', `Gia` = '$gia', `GiaKM` = '$giakm', `UrlHinh` = '$hinh', `ThoiDiemNhap` = '$ngay', `MoTa` = '$mota', `Hot` = '$hot', `idNSX` = '$idNSX', `AnHien` = '$an', `SoLuongTonKho` = '$tonkho', `ThuTu` = '$thutu' WHERE `dienthoai`.`idDT` = $id"; 
       
         else  $sql = "UPDATE `dienthoai` SET `TenDT` = '$ten_dt', `Gia` = '$gia', `GiaKM` = '$giakm',  `ThoiDiemNhap` = '$ngay', `MoTa` = '$mota', `Hot` = '$hot', `idNSX` = '$idNSX', `AnHien` = '$an', `SoLuongTonKho` = '$tonkho', `ThuTu` = '$thutu' WHERE `dienthoai`.`idDT` = $id";
       
        $this ->execute($sql);
    }
    
    function getDTById($id){
        $sql = "SELECT * FROM dienthoai  WHERE idDT = $id ";
        return $this->queryOne($sql);
    }
    function delete($id){
        $sql = "DELETE  FROM  `dienthoai`  WHERE `dienthoai`.`idDT` = $id"; 
       $this ->execute($sql);
    }
    function listNhaSanXuat(){
        $sql = "SELECT * FROM nhasanxuat ORDER BY idNSX DESC";
        return $this->query($sql);
    }



}











?>