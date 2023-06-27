<?php 
require_once('clsProduct.php');
$pid = $_REQUEST['pid'];
$product = new clsProduct();
$result = $product->Delete($pid);
if($result==true){
    echo "Product deleted successfully";
}else {
    echo "Product not deleted successfully";
}
