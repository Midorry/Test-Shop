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
