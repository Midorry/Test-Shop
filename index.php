<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/grid.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link rel="stylesheet" href="./assets/fonts/Roboto" />
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--qr header__navbar-item--space">
                            Vào cửa hàng trong ứng dụng
                            <div class="header__qr">
                                <img src="./assets/img/QRCode.png" alt="QR code" class="header__gr-img" />
                                <div class="header__qr-app">
                                    <img src="./assets/img/google_play.png" alt="Google Play" class="header__qr-app-down" />
                                    <img src="./assets/img/app_store.png" alt="App Store" class="header__qr-app-down" />
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="no-poiter">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-brands fa-facebook"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-regular fa-bell"></i>
                                Thông báo
                            </a>

                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link header__notify-item--seen">
                                            <img src="https://afamilycdn.com/150157425591193600/2021/1/7/eq4jv3hvoaaijyb-16100077092181193166507.jpg" alt="" class="header__notify-img" />

                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm chính hãng được
                                                    quảng cáo bởi
                                                    Black-Pink</span>
                                                <span class="header__notify-descriotion">Mô tả của mỹ phẩm chính
                                                    hãng được quảng cáo bởi
                                                    Black-Pink</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="https://afamilycdn.com/150157425591193600/2021/1/7/eq4jv3hvoaaijyb-16100077092181193166507.jpg" alt="" class="header__notify-img" />

                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm chính
                                                    hãng</span>
                                                <span class="header__notify-descriotion">Mô tả của mỹ phẩm chính
                                                    hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="https://afamilycdn.com/150157425591193600/2021/1/7/eq4jv3hvoaaijyb-16100077092181193166507.jpg" alt="" class="header__notify-img" />

                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm chính
                                                    hãng</span>
                                                <span class="header__notify-descriotion">Mô tả của mỹ phẩm chính
                                                    hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link header__notify-item--seen">
                                            <img src="https://afamilycdn.com/150157425591193600/2021/1/7/eq4jv3hvoaaijyb-16100077092181193166507.jpg" alt="" class="header__notify-img" />

                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm chính hãng được
                                                    quảng cáo bởi
                                                    Black-Pink</span>
                                                <span class="header__notify-descriotion">Mô tả của mỹ phẩm chính
                                                    hãng được quảng cáo bởi
                                                    Black-Pink</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link header__notify-item--seen">
                                            <img src="https://afamilycdn.com/150157425591193600/2021/1/7/eq4jv3hvoaaijyb-16100077092181193166507.jpg" alt="" class="header__notify-img" />

                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm chính hãng được
                                                    quảng cáo bởi
                                                    Black-Pink</span>
                                                <span class="header__notify-descriotion">Mô tả của mỹ phẩm chính
                                                    hãng được quảng cáo bởi
                                                    Black-Pink</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link header__notify-item--seen">
                                            <img src="https://afamilycdn.com/150157425591193600/2021/1/7/eq4jv3hvoaaijyb-16100077092181193166507.jpg" alt="" class="header__notify-img" />

                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm chính hãng được
                                                    quảng cáo bởi
                                                    Black-Pink</span>
                                                <span class="header__notify-descriotion">Mô tả của mỹ phẩm chính
                                                    hãng được quảng cáo bởi
                                                    Black-Pink</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-regular fa-circle-question"></i>
                            </a>
                            Trợ giúp
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item--bold header__navbar-item--space">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--bold">Đăng nhập</li> -->
                        <?php
                        if (isset($_SESSION['username'])) { ?>
                            <li class="header__navbar-item header__navbar-user">
                                <img src="./assets/img/<?php echo $_SESSION['image'] ?>" alt="" class="header__navbar-user-img" />
                                <span class="header__navbar-user-name"><?php echo $_SESSION['username'] ?></span>
                                <ul class="header__navbar-user-menu">
                                    <li class="header__navbar-user-item">
                                        <a href="./">Tài khoản của tôi</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="">Địa chỉ của tôi</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="">Đơn mua</a>
                                    </li>
                                    <li class="header__navbar-user-item header__navbar-user-item--separate">
                                        <a href="./login.html">Đăng xuất</a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>

                <!-- Header with search -->
                <div class="header-with-search">
                    <!-- Bars -->
                    <input type="checkbox" hidden id="header-bars-checkbox" class="header__bars-input" />

                    <label for="header-bars-checkbox" class="overlay"></label>

                    <div class="header__sidebars">
                        <ul class="header__sidebars-list">
                            <div class="header__sidebars-user">
                                <label for="header-bars-checkbox" class="fa-solid fa-x header__sidebars-user-close"></label>
                                <div class="header__sidebars-user-info">
                                    <span class="header__sidebars-user-name">Trần Tâm</span>
                                    <img src="https://img-os-static.mihoyo.com/avatar/avatar1.png" alt="" class="header__sidebars-user-img" />
                                </div>
                            </div>
                            <li class="header__sidebars-item">
                                <a href="" class="header__sidebars-link">
                                    Đăng nhập
                                </a>
                            </li>
                            <li class="header__sidebars-item">
                                <a href="" class="header__sidebars-link">
                                    Đăng xuất
                                </a>
                            </li>
                            <li class="header__sidebars-item">
                                <a href="" class="header__sidebars-link">
                                    Cài đặt
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__bars">
                        <label for="header-bars-checkbox" class="header__bars-icon">
                            <i class="fa-solid fa-bars"></i>
                        </label>
                    </div>

                    <input type="checkbox" name="" hidden id="mobile-search-checkbox" class="mobile__search-checkbox" />

                    <label for="mobile-search-checkbox" class="header__mobile-search">
                        <i class="fa-solid fa-magnifying-glass header__mobile-search-icon"></i>
                    </label>
                    <a href="/" class="header__logo-link">
                        <div class="header__logo hide-on-tablet">
                            <img src="https://salt.tikicdn.com/ts/upload/ae/f5/15/2228f38cf84d1b8451bb49e2c4537081.png" alt="Logo" class="header__logo-img" />
                        </div>
                    </a>

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm" />

                            <!-- Search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">
                                    Lịch sử tìm kiếm
                                </h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Kem dưỡng da</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Sữa rửa mặt</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__search-select">
                            <span class="header__search-select-label">Tùy chọn</span>
                            <i class="header__search-select-icon fa-solid fa-chevron-down"></i>

                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item-active">
                                    <span>Trong shop</span>
                                    <i class="fa-solid fa-check"></i>
                                </li>
                                <li class="header__search-option-item">
                                    <span>Ngoài shop</span>
                                    <i class="fa-solid fa-check"></i>
                                </li>
                            </ul>
                        </div>

                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>

                    <div class="header__cart">
                        <div class="header__cart-show">
                            <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                            <span class="header__cart-notice">3</span>
                            <!-- No cart: header__cart-list--no-cart -->
                            <div class="header__cart-list">
                                <img class="header__cart-no-cart-img" src="./assets/img/cart-empty.png" alt="Empty" />
                                <span class="header__cart-msg">Chưa có sản phẩm</span>

                                <h3 class="header__cart-heading">
                                    Sản phẩm đã thêm
                                </h3>
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="https://cf.shopee.vn/file/3cef205c5d9e2c333b10d111ca9a80d7" alt="" class="header__cart-img" />
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">
                                                    Hũ chiết mỹ phẩm 5G hình
                                                    kim cương
                                                </h3>
                                                <div class="header__cart-item-price-group">
                                                    <span class="header__cart-item-price">2.000.000</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại hàng:
                                                    Bạc</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="https://cf.shopee.vn/file/3cef205c5d9e2c333b10d111ca9a80d7" alt="" class="header__cart-img" />
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">
                                                    Hũ chiết mỹ phẩm 5G hình
                                                    kim cương
                                                </h3>
                                                <div class="header__cart-item-price-group">
                                                    <span class="header__cart-item-price">2.000.000</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại hàng:
                                                    Bạc</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="https://cf.shopee.vn/file/3cef205c5d9e2c333b10d111ca9a80d7" alt="" class="header__cart-img" />
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h3 class="header__cart-item-name">
                                                    Hũ chiết mỹ phẩm 5G hình
                                                    kim cương
                                                </h3>
                                                <div class="header__cart-item-price-group">
                                                    <span class="header__cart-item-price">2.000.000</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại hàng:
                                                    Bạc</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- https://cf.shopee.vn/file/e00a9705b1fd8f85164160a09e142487 -->
                                </ul>
                                <a class="header__cart-view btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Liên quan</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link header__sort-link--active">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Giá</a>
                </li>
            </ul>
        </header>
        <div class="main__container">
            <div class="grid wide">
                <div class="row main__content sm-gutter">
                    <div class="col l-2 m-0 c-0">
                        <nav class="category">
                            <h3 class="category-header">Danh mục</h3>
                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link">
                                        Mỹ phẩm về mắt</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">
                                        Mỹ phẩm về môi</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">
                                        Mỹ phẩm về mặt</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col l-10 m-12 c-12">
                        <div class="home-filter hide-on-mobile-tablet">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">
                                Phổ biến
                            </button>
                            <button class="home-filter__btn btn btn--primary">
                                Mới nhất
                            </button>
                            <button class="home-filter__btn btn">
                                Bán chạy
                            </button>
                            <div class="select-input">
                                <span class="select-input__label">Giá
                                </span>
                                <i class="select-input__icon fa-solid fa-chevron-down"></i>
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="#" class="select-input__link">
                                            Giá: Từ thấp xuống cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="#" class="select-input__link">
                                            Giá: Từ cao xuống thấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-filter__page">
                                <div class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>
                                    /14
                                </div>
                                <div class="home-filter__page-control">
                                    <a href="#" class="home-filter__page-btn home-filter__page-control--disable">
                                        <i class="home-filter__page-icon fa-solid fa-chevron-left"></i>
                                    </a>
                                    <a href="#" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <nav class="mobile-category l-0">
                            <ul class="mobile-category__list">
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ & Thiết bị tiện ích</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="home-product">
                            <div class="row sm-gutter">
                                <?php
                                require_once('./assets/php/clsProduct.php');
                                $product = new clsProduct();
                                $ketqua = $product->getList();
                                if ($ketqua == FALSE)
                                    die("<p>LỖI TRUY VẤN DỮ LIỆU</p>");
                                $rows = $product->data;
                                if ($rows == NULL)
                                    die("<p> KHÔNG CÓ DỮ LIỆU </p>");
                                foreach ($rows as $row) //lặp từng dòng
                                {
                                    $hinhanh = $row["pimage"] == "" ? "no-image.png" : $row["pimage"];
                                ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="
                                                    background-image: url(./assets/img/<?= $row['pimage'] ?>);
                                                "></div>
                                            <h4 class="home-product-item__name">
                                                <?= $row['pname'] ?>
                                            </h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current"><?= $row['pprice'] ?></span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__action-like home-product-item__action-like--liked">
                                                    <i class="home-product-item__action-like-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__action-like-full fa-solid fa-heart"></i>
                                                </span>
                                                <span class="home-product-item__action-rating">
                                                    <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                <span class="home-product-item__sold">88 đã bán</span>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <div class="home-product-item__brand">
                                                    Ohui
                                                </div>
                                                <div class="home-product-item__origin-name">
                                                    Hàn Quốc
                                                </div>
                                            </div>
                                            <div class="home-product-item__favourite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu thích</span>
                                            </div>
                                            <div class="home-product-item__sale">
                                                <span class="home-product-item__sale-percent">20%
                                                </span>
                                                <span class="home-product-item__sale-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>

                                <!-- <div class="col l-2-4 m-4 c-6">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="
                                                    background-image: url(https://cf.shopee.vn/file/97a6094b261be4702822c89b1487986c_tn);
                                                "></div>
                                        <h4 class="home-product-item__name">
                                            Tẩy Tế Bào Chết Làm Sáng Da Ohui
                                            Clear Science
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000đ</span>
                                            <span class="home-product-item__price-current">900.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__action-like home-product-item__action-like--liked">
                                                <i class="home-product-item__action-like-empty fa-regular fa-heart"></i>
                                                <i class="home-product-item__action-like-full fa-solid fa-heart"></i>
                                            </span>
                                            <span class="home-product-item__action-rating">
                                                <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                <i class="home-product-item__action-rating-gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <div class="home-product-item__brand">
                                                Ohui
                                            </div>
                                            <div class="home-product-item__origin-name">
                                                Hàn Quốc
                                            </div>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fa-solid fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale">
                                            <span class="home-product-item__sale-percent">20%
                                            </span>
                                            <span class="home-product-item__sale-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                        </div>

                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">
                                    <i class="pagination-item__link-icon fa-solid fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="#" class="pagination-item__link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">5</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">14</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">
                                    <i class="pagination-item__link-icon fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid wide footer-content">
                <div class="row">
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Test-shop Mall</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Mỹ phẩm về mắt</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Mỹ phẩm về môi</a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">Mỹ phẩm về mặt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">
                                    <i class="fab fa-facebook footer-item__icon"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">
                                    <i class="fa-brands fa-instagram footer-item__icon"></i>
                                    Instgram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="#" class="footer-item__link">
                                    <i class="fa-brands fa-linkedin footer-item__icon"></i>
                                    Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-8 c-12">
                        <h3 class="footer__heading">
                            Vào cửa hàng trên ứng dụng
                        </h3>
                        <div class="footer__download">
                            <img src="./assets/img/QRCode.png" alt="Download by QR" class="footer__download-qr" />
                            <div class="footer__download-apps">
                                <a href="#" class="footer__download-apps-link">
                                    <img src="./assets/img/google_play.png" alt="Google play" class="footer__download-apps-img" />
                                </a>
                                <a href="#" class="footer__download-apps-link">
                                    <img src="./assets/img/app_store.png" alt="App store" class="footer__download-apps-img" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__policies">
                    <ul class="footer__policies-list">
                        <li class="footer__policies-item">
                            <a href="">Chính sách bảo mật</a>
                        </li>
                        <li class="footer__policies-item">
                            <a href="">Quy chế hoạt động</a>
                        </li>
                        <li class="footer__policies-item">
                            <a href="">Chính sách vận chuyển</a>
                        </li>
                        <li class="footer__policies-item">
                            <a href="">Chính sách trả hàng và hoàn tiền</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__registered">
                    <img src="./assets/img/dadangky.png" alt="Đã đăng ký" class="footer__registered-img" />
                    <span class="footer__registered-text">Công ty MYCOM</span>
                </div>
                <p class="footer__text">
                    © 2022 Bản quyền thuộc về công ty MyCom
                </p>
            </div>
        </footer>

        <!-- Modal -->
        <!-- <div class="modal">
             <div class="modal__overlay"></div> -->
        <!-- <div class="modal__body">

                <!-- Resiter Form -->
        <!-- <div class="auth-form">

                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                            <span class="auth-form__switch">Đăng nhập</span>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="Text" class="auth-form__input" placeholder="Nhập email">  
                            </div>
                            <div class="auth-form__group">
                                <input type="Text" class="auth-form__input" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="auth-form__group">
                                <input type="Text" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>

                        <div class="auth-form__add">
                            <p class="auth-form__text">Bằng việc đăng ký, bạn đã đồng ý với Test-shop về
                                <a href="" class="auth-form__link">Điều khoản dịch vụ</a>
                                & <a href="" class="auth-form__link">Chính sách bảo mật</a>
                            </p>                           
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn btn--nor auth-form__controls-back">TRỞ LẠI</button>
                            <button class="btn btn--primary">ĐĂNG KÝ</button>
                        </div>
                    </div>
                    

                    <div class="auth-form__socials">
                        <a href="" class="btn btn--style-s auth-form__socials--facebook btn--with-icon">
                            <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title">Đăng ký bằng Facebook</span>
                        </a>
                        <a href="" class="btn btn--style-s auth-form__socials--google btn--with-icon">
                            <i class="auth-form__socials-icon fa-brands fa-google"></i>
                            <span class="auth-form__socials-title">Đăng ký bằng Google</span>  
                        </a>
                    </div>
                </div> -->

        <!-- Login Form -->
        <!-- <div class="auth-form">

                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                            <span class="auth-form__switch">Đăng ký</span>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="Text" class="auth-form__input" placeholder="Nhập email">  
                            </div>
                            <div class="auth-form__group">
                                <input type="Text" class="auth-form__input" placeholder="Nhập mật khẩu">
                            </div>
                        </div>

                        <div class="auth-form__add">
                            <div class="auth-form__help">
                                <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                                <span class="auth-form__help-space"></span>
                                <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                            </div>                          
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn btn--nor auth-form__controls-back">TRỞ LẠI</button>
                            <button class="btn btn--primary">ĐĂNG NHẬP</button>
                        </div>
                    </div>
                    

                    <div class="auth-form__socials">
                        <a href="" class="btn btn--style-s auth-form__socials--facebook btn--with-icon">
                            <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title">Đăng nhập bằng Facebook</span>
                        </a>
                        <a href="" class="btn btn--style-s auth-form__socials--google btn--with-icon">
                            <i class="auth-form__socials-icon fa-brands fa-google"></i>
                            <span class="auth-form__socials-title">Đăng nhập bằng Google</span>  
                        </a>
                    </div>
                </div> -->
        <!-- </div>
        </div> -->
    </div>
</body>

</html>