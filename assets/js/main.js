myFun = () => {
    const pname = document.getElementById("pname");
    const pprice = document.getElementById("pprice");
    const pimage = document.getElementById("pimage");
    const pdesc = document.getElementById("pdesc");
    const pstatus = document.getElementById("pstatus");
    const catname = document.getElementById("catname");
    const pop_up = document.querySelector(".notify");
    const pop_up1 = document.querySelector(".notify1");
    const pop_up2 = document.querySelector(".notify2");
    const pop_up3 = document.querySelector(".notify3");
    const pop_up4 = document.querySelector(".notify4");
    const pop_up5 = document.querySelector(".notify5");
    check = () => {
        let isName = false;
        let isPrice = false;
        let isStatus = false;
        let isCatName = false;
        let isDesc = false;
        let isImage = false;
        checkPrice = () => {
            if (pprice.value == "") {
                isPrice = false;
                pop_up1.innerHTML = "Chua nhap giá sản phẩm";
                pop_up1.style.color = "red";
            } else if (
                /^\s*[+-]?(\d+|\d*\.\d+|\d+\.\d*)([Ee][+-]?\d+)?\s*$/.test(
                    pprice.value
                ) == true
            ) {
                pop_up1.innerHTML = "OK";
                pop_up1.style.color = "green";
                isPrice = true;
            } else {
                pop_up1.innerHTML = "Phải là số";
                pop_up1.style.color = "red";
                isPrice = false;
            }
        };

        checkName = () => {
            if (/^\w+( +\w+)*$/.test(pname.value) == true) {
                pop_up.innerHTML = "OK";
                pop_up.style.color = "green";
                isName = true;
            } else if (pname.value == "") {
                pop_up.innerHTML = "Chua nhap ten";
                pop_up.style.color = "red";
                isName = false;
            } else {
                pop_up.innerHTML = "Sai ten";
                pop_up.style.color = "red";
                isName = false;
            }
        };
        checkDesc = () => {
            if (/^\w+( +\w+)*$/.test(pdesc.value) == true) {
                pop_up5.innerHTML = "OK";
                pop_up5.style.color = "green";
                isDesc = true;
            } else if (pdesc.value == "") {
                pop_up5.innerHTML = "Chưa nhập mô tả sản phẩm";
                pop_up5.style.color = "red";
                isDesc = false;
            } else {
                pop_up5.innerHTML = "Sai Mô tả";
                pop_up5.style.color = "red";
                isDesc = false;
            }
        };

        const checkStatus = () => {
            if (/^[\w-]{6,20}?$/.test(pstatus.value) == true) {
                pop_up2.innerHTML = "OK";
                pop_up2.style.color = "green";
                isStatus = true;
            } else if (pstatus.value == "") {
                pop_up2.innerHTML = "Chua nhap Trang thai";
                pop_up2.style.color = "red";
                isStatus = false;
            } else {
                pop_up2.innerHTML = "Trang thai toi thieu 6 ky tu";
                pop_up2.style.color = "red";
                isStatus = false;
            }
        };

        const checkCatName = () => {
            if (catname.value == "") {
                pop_up3.innerHTML = "Chua nhap Nhom san pham";
                pop_up3.style.color = "red";
                isCatName = false;
            } else {
                pop_up3.innerHTML = "OK";
                pop_up3.style.color = "green";
                isCatName = false;
            }
        };

        const checkImage = (e) => {
            // image.textContent = ""
            // console.log(e.target.files.length);
            if (pimage.files.length == 0) {
                pop_up4.innerHTML = "Chưa nhập ảnh sản phẩm";
                pop_up4.style.color = "red";
                isImage = false;
            } else {
                pop_up4.innerHTML = "OK";
                pop_up4.style.color = "green";
                isImage = true;
            }
        };
        checkAgree = () => {
            const form = document.forms.demo;
            const checked = form.querySelector("input[name=agree]:checked");
            if (checked == null || !isImage || !isName || !isPrice || !isDesc) {
                submit.setAttribute("disabled", "disabled");
            } else {
                submit.removeAttribute("disabled");
            }
        };
        start = () => {
            checkName();
            checkPrice();
            // checkStatus();
            // checkCatName();
            checkDesc();
            checkImage();
            checkAgree();
        };
        start();
    };
    check();
};
