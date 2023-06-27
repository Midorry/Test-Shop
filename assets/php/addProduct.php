<?php
require_once("clsProduct.php");
if (isset($_REQUEST["submit"])) {
    $pname = $_REQUEST["pname"];
    $pprice = $_REQUEST["pprice"];
    $pimage = $_FILES['pimage']['name'];
    $pdesc = $_REQUEST["pdesc"];
    $pstatus = $_REQUEST["pstatus"];
    $catid = $_REQUEST["catname"];
    if (isset($_FILES['pimage'])) {
        move_uploaded_file($_FILES['pimage']['tmp_name'], '../img/' . $_FILES['pimage']['name']);
    }
    $product = new clsProduct();
    $result = $product->Add($pname, $pprice, $pimage, $pdesc, $pstatus, $catid);
    if ($result == true) {
        header("Location: ../../productList.php");
        exit;
    } else {
        echo "<h3>Lỗi thêm dữ liệu</h3>";
    }
}
