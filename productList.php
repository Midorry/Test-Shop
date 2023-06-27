<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách nhân viên</title>
</head>

<body>
  <h1 style="text-align: center; color: #090;">DANH SÁCH SẢN PHẨM</h1>
  <p><a href="addProduct.php">THÊM SẢN PHẨM</a></p>
  <?php
  require_once("./assets/php/clsProduct.php");
  ?>
  <table width="1109" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="87" bgcolor="#FF9900">ID</td>
      <td width="212" bgcolor="#FF9900">TÊN SẢN PHẨM</td>
      <td width="150" bgcolor="#FF9900">GIÁ</td>
      <td width="165" bgcolor="#FF9900">HÌNH ẢNH</td>
      <td width="209" bgcolor="#FF9900">TRẠNG THÁI</td>
      <td width="100" bgcolor="#FF9900">NHÓM SẢN PHẨM</td>
      <td width="172" bgcolor="#FF9900">XỬ LÝ</td>
    </tr>
    <?php
    $product = new clsProduct();
    $ketqua = $product->getList();
    if ($ketqua == FALSE)
      die("<p>LỖI TRUY VẤN DỮ LIỆU</p>");
    $rows = $product->data;
    if ($rows == NULL)
      die("<p> KHÔNG CÓ DỮ LIỆU </p>");
    foreach ($rows as $row) {
      $hinhanh = $row["pimage"] == "" ? "no-image.png" : $row["pimage"];
    ?>
      <tr>
        <td><?= $row["pid"] ?></td>
        <td><?= $row["pname"] ?></td>
        <td><?= $row["pprice"] ?></td>
        <td align="center" valign="middle">
          <img src="./assets/img/<?= $hinhanh ?>" width="80">
        </td>
        <td><?= $row["pstatus"] == 1 ? "Có" : "Không" ?></td>
        <td><?= $row["catname"] ?></td>
        <td>
          <a href="changeProduct.php?pid=<?= $row["pid"] ?>">Sửa</a>
          -
          <a href="./assets/php/deleteProduct.php?pid=<?= $row["pid"] ?>" onclick="return confirm('Chắc chắn xóa?')">Xóa</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>