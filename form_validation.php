<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/form.css" />
</head>

<body>
    <div class="main">
        <div class="heading">Đăng ký thành viên</div>
        <form class="form" name="demo" id="form-1" action="./assets/php/registration.php" method="post">
            <div class="form-group">
                <label for="name">Tên đầy đủ</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="VD: Tran Tam" onkeyup="myFun()" />
                <span class="notify"></span>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="VD: trantam@gmail.com" onkeyup="myFun()" />
                <span class="notify1"></span>
            </div>
            <div class="form-group">
                <label for="name">Mật khẩu</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" onkeyup="myFun()" />
                <span class="notify2"></span>
            </div>
            <div class="form-group">
                <label for="name">Nhập lại mật khẩu</label>
                <input type="text" class="form-control" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" onkeyup="myFun()" />
                <span class="notify3"></span>
            </div>
            <div class="form-group">
                <input type="checkbox" id="agree" name="agree" onchange="myFun()" />
                <label for="agree">Check</label>
            </div>
            <div class="form-group">
                <label for="image">Ảnh đại diện</label>
                <input type="file" id="image" name="image" onchange="myFun()" />
            </div>
            <!-- <div class="input-btn"> -->
            <input type="submit" id="submit" value="Đăng ký" class="submit-btn" onclick="myFun()" disabled />
            <!-- </div> -->
        </form>
    </div>
    <script>
        myFun = () => {
            const name = document.getElementById("username");
            const email = document.getElementById("email");
            const submit = document.getElementById("submit");
            const password = document.getElementById("password");
            const checkPassword = document.getElementById("repassword");
            const pop_up = document.querySelector(".notify");
            const pop_up1 = document.querySelector(".notify1");
            const pop_up2 = document.querySelector(".notify2");
            const pop_up3 = document.querySelector(".notify3");
            check = () => {
                let isName = false;
                let isEmail = false;
                let isPass = false;
                let isCheckPass = false;
                checkEmail = () => {
                    if (email.value == "") {
                        isEmail = false;
                        pop_up1.innerHTML = "Chua nhap email";
                        pop_up1.style.color = "red";
                    } else if (
                        /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email.value) == true
                    ) {
                        pop_up1.innerHTML = "OK";
                        pop_up1.style.color = "green";
                        isEmail = true;
                    } else {
                        pop_up1.innerHTML = "Nhap sai email";
                        pop_up1.style.color = "red";
                        isEmail = false;
                    }
                };

                checkName = () => {
                    if (/^[\w-]{3,20}?$/.test(name.value) == true) {
                        pop_up.innerHTML = "OK";
                        pop_up.style.color = "green";
                        isName = true;
                    } else if (name.value == "") {
                        pop_up.innerHTML = "Chua nhap ten";
                        pop_up.style.color = "red";
                        isName = false;
                    } else {
                        pop_up.innerHTML = "Sai ten";
                        pop_up.style.color = "red";
                        isName = false;
                    }
                };

                const checkPass = () => {
                    if (/^[\w-]{6,20}?$/.test(password.value) == true) {
                        pop_up2.innerHTML = "OK";
                        pop_up2.style.color = "green";
                        isPass = true;
                    } else if (password.value == "") {
                        pop_up2.innerHTML = "Chua nhap mat khau";
                        pop_up2.style.color = "red";
                        isPass = false;
                    } else {
                        pop_up2.innerHTML = "Password toi thieu 6 ky tu";
                        pop_up2.style.color = "red";
                        isPass = false;
                    }
                };

                const reCheckPassword = () => {
                    if (checkPassword.value == "") {
                        pop_up3.innerHTML = "Chua nhap lai mat khau";
                        pop_up3.style.color = "red";
                        isCheckPass = false;
                    } else if (checkPassword.value == password.value) {
                        pop_up3.innerHTML = "OK";
                        pop_up3.style.color = "green";
                        isCheckPass = true;
                    } else {
                        pop_up3.innerHTML = "Mat khau khong trung khop";
                        pop_up3.style.color = "red";
                        isCheckPass = false;
                    }
                };
                checkAgree = () => {
                    const form = document.forms.demo;
                    const checked = form.querySelector(
                        "input[name=agree]:checked"
                    );
                    if (
                        checked == null ||
                        !isName ||
                        !isEmail ||
                        !isPass ||
                        !isCheckPass
                    ) {
                        submit.setAttribute("disabled", "disabled");
                    } else {
                        submit.removeAttribute("disabled");
                    }
                }
                start = () => {
                    checkName();
                    checkEmail();
                    checkPass();
                    reCheckPassword();
                    checkAgree();
                };
                start();
            };
            check();
        };
    </script>
</body>

</html>