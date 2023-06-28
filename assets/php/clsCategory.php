<?php
//tao lop clsProduct ke thua tu lop clsDatabase
require_once("clsDatabase.php");
class clsCategory extends clsDatabase
{
    public $data; //de chua mang du lieu tra ve khi Select
    ///ham tao
    function __construct()
    {
        parent::__construct(); //goi ham tao lop cha clsDatabase de ket noi CSDL
    }
    //xay dung cac ham lam viec voi bang tbProduct
    function getList()
    {
        $sql = "SELECT * FROM tbcategory";
        $ketqua = $this->RunSQL($sql, NULL); //goi ham thuc thi SQL ke thua tu clsDatabase
        if ($ketqua == true) {
            $this->data = $this->pdo_stm->fetchAll(); //lay du lieu gan cho thuoc tinh data
        }
        return $ketqua;
    }
}
