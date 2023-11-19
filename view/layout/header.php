<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<div style="max-width: 1897px;" class="container">
    <!-- phân contact, đăng nhập đăng kí  -->
    <div class="sum_contact">
        <div class="contact">
            <div class="phone_gamil">
                <a href="">
                    <span><i class="fa-solid fa-phone-volume"></i>0354510331</span>
                </a>
            </div>
            <div>
                <a href="phone_gamil">
                    <span><i class="fa-solid fa-envelope"></i>lananh@gmail.com</span>
                </a>
            </div>
        </div>
        <div class="login_sign_infoweb">
            <div class="dn">
                <span><a href="index.php?act=login">Login</a></span>
            </div>
            <div class="dn">
                <span><a href="index.php?act=sign">Sign</a></span>
            </div>
            <div class="dn">
                <span><a href="">Hệ thống cửa hàng</a></span>
            </div>
        </div>
    </div>
</div>

<!-- phần header logo, danh mục sản phâm, menu, seach, giỏ hàng -->
<div class="container_header">
    <header>
        <div class="logo">
            <img src="../img/LOGO.jpg" alt="">
        </div>
        <div class="category">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Danh mục nổi bật
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Macbook</a></li>
                    <li><a class="dropdown-item" href="#">ASUS</a></li>
                    <li><a class="dropdown-item" href="#">DELL</a></li>
                    <li><a class="dropdown-item" href="#">HP</a></li>
                    <li><a class="dropdown-item" href="#">SMI</a></li>
                   
                </ul>
            </div>
        </div>
        <div class="list_menu">
            <ul>
                <li><a href="index.php?act=/">Trang chủ</a></li>
                <li><a href="gioithieu.php">Giới thiệu</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="tintuc.php">Tin tức</a></li>
                <li><a href="lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
        <div class="search_cart">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
       
            </div>
            <div class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
    </header>
</div>