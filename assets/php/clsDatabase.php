<?php
class clsDatabase
{
    public $conn; //de luu doi tuong PDO
    public $pdo_stm;//de duu doi tuong pdostatement
    //ham tao
    function __construct()
    {
        $this->conn=NULL;
        try{
            $this->conn = new PDO("mysql:host=localhost:3306;dbname=TestShop","root","");
        }catch(PDOException $ex){
            echo "<p>" . $ex->getMessage() . "</p>";
            die('<h3>Loi ket noi </h3>');
        }
    }
    //ham thuc thi SQL dung cho viec thuc hien Insert, Update, Delete, Select
    function RunSQL($sql, $param=NULL){ // tao tham so $param mac dinh = NULL
        $this->pdo_stm = $this->conn->prepare($sql);//tao doi tuong pdostatement
        if($param==NULL){ //truong hop sql khong co tham so ?
            $ketqua = $this->pdo_stm->execute();//thuc thi cau sql voi mang du lieu
        }else{
            $ketqua = $this->pdo_stm->execute($param);//thuc thi cau sql voi mang du lieu
        }
        return $ketqua;//True or False
    }
}
?>