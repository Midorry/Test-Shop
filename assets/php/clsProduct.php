<?php
//tao lop clsProduct ke thua tu lop clsDatabase
require_once("clsDatabase.php");
class clsProduct extends clsDatabase
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
        $sql = "SELECT P.*, Cat.catname From tbProduct P Inner join tbCategory Cat on P.catid=Cat.catid";
        $ketqua = $this->RunSQL($sql, NULL);
        if ($ketqua == true) {
            $this->data = $this->pdo_stm->fetchAll();
        }
        return $ketqua;
    }
    function getListById($pid)
    {
        $sql = "SELECT P.*, Cat.catname From tbProduct P Inner join tbCategory Cat on P.catid=Cat.catid where P.pid=?";
        $param = [$pid];
        $ketqua = $this->RunSQL($sql, $param);
        if ($ketqua == true) {
            $this->data = $this->pdo_stm->fetch();
        }
        return $ketqua;
    }
    function getListByName($pname)
    {
        $sql = "SELECT P.*, Cat.catname From tbProduct P Inner join tbCategory Cat on P.catid=Cat.catid where P.pname=?";
        $param = [$pname];
        $ketqua = $this->RunSQL($sql, $param);
        if ($ketqua == true) {
            $this->data = $this->pdo_stm->fetchAll();
        }
        return $ketqua;
    }
    function Add($pname, $pprice, $pimage, $pdesc, $pstatus, $catid)
    {
        $sql = "INSERT into tbProduct values(null,?,?,?,?,?,?)";
        $param = [$pname, $pprice, $pimage, $pdesc, $pstatus, $catid];
        $ketqua = $this->RunSQL($sql, $param);
        return $ketqua;
    }
    function Update($pid, $pname, $pprice, $pimage, $pdesc, $pstatus, $catid)
    {
        $sql = "UPDATE tbProduct set pname=?, pprice=?, pimage=?, pdesc=?, pstatus=?, catid=? where pid=?";
        $param = [$pname, $pprice, $pimage, $pdesc, $pstatus, $catid, $pid];
        $ketqua = $this->RunSQL($sql, $param);
        return $ketqua;
    }
    function Delete($pid)
    {
        $sql = "Delete from tbProduct where pid=?";
        $param = [$pid];
        $ketqua = $this->RunSQL($sql, $param);
        return $ketqua;
    }
}
