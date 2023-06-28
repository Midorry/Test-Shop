<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (isset($_GET['delete']) && $_GET['delete'] == 1) {
    $_SESSION['cart'] = [];
}
if (isset($_GET['delid']) && $_GET['delid'] >= 0) {
    array_splice($_SESSION['cart'], $_GET['delid'], 1);
}
if (isset($_REQUEST['addcart'])) {
    $pname = $_REQUEST['pname'];
    $pprice = $_REQUEST['pprice'];
    $pimage = $_REQUEST['pimage'];
    $pdesc = $_REQUEST['pdesc'];
    $pstatus = $_REQUEST['pstatus'];
    $catid = $_REQUEST['catid'];
    $product = [$pname, $pprice, $pimage, $pdesc, $pstatus, $catid];
    $_SESSION['cart'][] = $product;

    // var_dump($_SESSION['cart']);
    echo json_encode(['num_cart' => sizeof($_SESSION['cart'])]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="1109" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="212" bgcolor="#FF9900">TÊN SẢN PHẨM</td>
            <td width="150" bgcolor="#FF9900">GIÁ</td>
            <td width="165" bgcolor="#FF9900">HÌNH ẢNH</td>
            <td width="209" bgcolor="#FF9900">TRẠNG THÁI</td>
            <td width="172" bgcolor="#FF9900">XỬ LÝ</td>
        </tr>
        <?php
        $sum = 0;
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            $sum = $sum + $_SESSION['cart'][$i][1];
        ?>

            <tr>
                <td><?php echo $_SESSION['cart'][$i][0] ?> </td>
                <td><?php echo $_SESSION['cart'][$i][1] ?></td>
                <td align="center" valign="middle">
                    <img src="../img/<?php echo $_SESSION['cart'][$i][2] ?>" width="80">
                </td>
                <td><?php echo $_SESSION['cart'][$i][3] ?> </td>

                <td><a href="addCart.php?delid=<?php echo $i ?>"><button>Delete Cart</button></a></td>
            </tr>

        <?php } ?>
        <tr>
            <td><a href="addCart.php?delete=1"><button>Delete Cart</button></a></td>
            <td><a href="../../index.php"><button>Add product</button></a></td>
            <td>Tong tien <?= $sum ?></td>
        </tr>
    </table>
</body>

</html>