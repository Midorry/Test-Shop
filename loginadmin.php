<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/form.css" />
</head>

<body>
    <div class="main">
        <div class="heading">Đăng nhập Admin</div>
        <form class="form" id="form-2" action="./assets/php/loginadmin.php" method="post">
            <div class="form-group">
                <label for="name">Tên đầy đủ</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="VD: Tran Tam" />
                <span class="notify"></span>
            </div>
            <div class="form-group">
                <label for="name">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" />
                <span class="notify"></span>
            </div>
            <input type="submit" value="Đăng nhập" class="submit-btn" />
        </form>
    </div>
</body>

</html>