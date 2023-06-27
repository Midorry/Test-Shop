<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/form.css" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <?php
        $pid = $_REQUEST["pid"];
        require_once("./assets/php/clsProduct.php");
        $product = new clsProduct();
        $result = $product->getListById($pid);
        if ($result == FALSE)
            die("<p>LỖI TRUY VẤN DỮ LIỆU</p>");
        $rows = $product->data;
        if ($rows == NULL)
            die("<p> KHÔNG CÓ DỮ LIỆU </p>");

        ?>
        <form class="form" name="demo" id="form-1" action="./assets/php/changeProduct.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="pid" id="pid" value="<?= $row["pid"] ?>">
            <div class="form-group">
                <label for="pname">Tên sản phẩm</label>
                <input type="text" class="form-control" id="pname" name="pname" value="<?= $rows['pname'] ?>" onkeyup="myFun()" />
                <span class="notify"></span>
            </div>
            <div class="form-group">
                <label for="name">Giá</label>
                <input type="text" class="form-control" id="pprice" name="pprice" value="<?= $rows['pprice'] ?>" onkeyup=" myFun()" />
                <span class="notify1"></span>
            </div>
            <div class="form-group">
                <label for="pimage">Hình ảnh hiện tại</label>
                <img src="./assets/img/<?= $rows['pimage'] ?>">
                <input type="text" name="pcurrent" id="pcurrent" value="<?= $rows["pimage"] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="pimage">Hình ảnh mới</label>
                <input type="file" id="pimage" name="pimage" onchange=" myFun()" />
                <span class="notify4"></span>
            </div>
            <div class="form-group">
                <label for="pdesc">Mổ tả sản phẩm</label>
                <input type="text" id="pdesc" name="pdesc" value="<?= $rows['pdesc'] ?>" onkeyup=" myFun()" />
                <span class="notify5"></span>
            </div>
            <div class="form-group">
                <label for="pstatus">Trạng thái sản phẩm</label>
                <select name="pstatus" id="pstatus" onchange="myFun()">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <span class="notify2"></span>
            </div>
            <div class="form-group">
                <label for="catname">Chọn nhóm sản phẩm</label>
                <select name="catname" id="catname" onchange="myFun()">
                    <?php
                    require_once("./assets/php/clsProduct.php");
                    $product = new clsProduct();
                    $result = $product->getList();
                    if ($result == FALSE)
                        die("<p>LỖI TRUY VẤN DỮ LIỆU</p>");
                    $rows = $product->data;
                    if ($rows == NULL)
                        die("<p> KHÔNG CÓ DỮ LIỆU </p>");
                    foreach ($rows as $row) {
                    ?>
                        <option value="<?php echo $row['catid'] ?>"><?php echo $row['catname'] ?></option>
                    <?php } ?>
                </select>
                <span class="notify3"></span>
            </div>
            <div class="form-group">
                <label for="agree">Check</label>
                <input type="checkbox" id="agree" name="agree" onchange="myFun()" />
            </div>
            <!-- <div class="input-btn"> -->
            <input type="submit" id="submit" name="submit" value="Sửa sản phẩm" class="submit-btn" onclick="myFun()" disabled />
            <!-- </div> -->
        </form>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>