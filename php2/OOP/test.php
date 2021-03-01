<?php

class nhanvien
{
    public string $ho = '';
    var $ten;
    var $ngaysinh;
    function hoten()
    {
        return $this->ho.' '.$this->ten ;
    } 
    function tuoi()
    {   
        $ns = explode('/',$this->ngaysinh);
        return Date('Y') - $ns[2] ;
    }
    function __construct()
    {   
        echo '<h1>Xin chào tôi là học sinh mới </h1>';
        
    } 

}
class nhanvienuutu extends nhanvien{
    var $thuong; 
}
