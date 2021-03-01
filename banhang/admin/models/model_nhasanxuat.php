<?php

require_once '../system/model_system.php';
class model_nhasanxuat extends model_system{
    
    function listNhaSanXuat(){
        $sql = "SELECT * FROM nhasanxuat ORDER BY idNSX DESC";
        return $this->query($sql);
    }
    function insert($ten , $thutu,$an){
        $sql = "INSERT INTO nhasanxuat( TenNSX,ThuTu,AnHien) VALUES('$ten', '$thutu','$an') "; 
        $this ->execute($sql);
    }

    function update($id, $ten , $thutu,$an){
        $sql = "UPDATE `nhasanxuat` SET `TenNSX` = '$ten', `ThuTu` = '$thutu', `AnHien` = '$an' WHERE `nhasanxuat`.`idNSX` = $id"; 
       $this ->execute($sql);
    }
    
    function getNSXById($id){
        $sql = "SELECT * FROM nhasanxuat  WHERE idNSX = $id ";
        return $this->queryOne($sql);
    }
    function delete($id){
        $sql = "DELETE  FROM  `nhasanxuat`  WHERE `nhasanxuat`.`idNSX` = $id"; 
       $this ->execute($sql);
    }



}











?>