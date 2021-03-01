<?php

    function connectdb(){
        try{
            $host = "localhost";
            $dbnmae = "php2_news";
            $username = "root";
            $password = "";
            $conn = new PDO("mysql:host=$host;dbname=$dbnmae; charset=utf8",$username,$password);
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
            
            
        }catch (PDOException $e){
            die("Lỗi : ".$e->getMessage());
        }
    }
    function getTinById($id){
        $conn = connectdb();
        $sql = "SELECT * FROM tin WHERE idLT=$id AND AnHien=1 AND lang='vi' "
            . "ORDER BY SoLanXem DESC";
        return $conn->query($sql)->fetchAll();
    }
    function getTinByIdLoai($id){
        $conn = connectdb();
        $sql = "SELECT * FROM tin WHERE idTL=$id AND AnHien=1 AND lang='vi' "
            . "ORDER BY SoLanXem DESC";
        return $conn->query($sql)->fetchAll();
    }
  

?>