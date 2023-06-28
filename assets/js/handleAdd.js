const pid = document.getElementsByClassName("add");
for (const i = 0; i < pid.length; i++) {
    pid[i].addEventListener("click", function (e) {
        const id = e.target.getAttribute("data-id");
        const xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const data = JSON.parse(this.responseText);
                document.getElementsByClassName(
                    "header__cart-notice"
                ).innerHTML = data.num_cart + 1;
            }
            xml.open("GET", "../php/addCart.php", true);
            xml.send();
        };
    });
}
