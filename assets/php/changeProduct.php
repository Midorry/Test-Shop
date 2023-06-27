<?php
require_once("clsProduct.php");
if (isset($_REQUEST["submit"])) {
    $pid = $_REQUEST["pid"];
    $pname = $_REQUEST["pname"];
    $pprice = $_REQUEST["pprice"];
    $pimage = $_FILES['pimage']['name'];
    if ($pimage == "") {
        $pimage = $_REQUEST["pcurrent"];
    }
    $pdesc = $_REQUEST["pdesc"];
    $pstatus = $_REQUEST["pstatus"];
    $catid = $_REQUEST["catname"];
    if (isset($_FILES['pimage'])) {
        move_uploaded_file($_FILES['pimage']['tmp_name'], '../img/' . $_FILES['pimage']['name']);
    }
    $product = new clsProduct();
    $result = $product->Update($pid, $pname, $pprice, $pimage, $pdesc, $pstatus, $catid);
    if ($result == true) {
        echo "<h3>Thành công</h3>";
    } else {
        echo "<h3>Lỗi sửa dữ liệu</h3>";
    }
}
