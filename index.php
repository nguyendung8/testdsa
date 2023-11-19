<?php
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/user.php";
include "model/pdo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<div class="wraper">
    <?php
    require 'view/layout/header.php';
    ?>

    <?php
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
            case '/':
                require 'view/main.php';
                break;
            case 'sign':
                if (isset($_POST['register'])) {
                    if (empty($_POST['user'])) {
                        $_SESSION['user'] = "Không được bỏ trống trường này";
                    } else {
                        $user = $_POST['user'];
                    }

                    if (empty($_POST['email'])) {
                        $_SESSION['email'] = "Không được bỏ trống trường này";
                    } else {
                        $email = $_POST['email'];
                    }

                    if (empty($_POST['password'])) {
                        $_SESSION['password'] = "Không được bỏ trống trường này";
                    } else {
                        $password = $_POST['password'];
                    }

                    if (empty($_POST['repassword'])) {
                        $_SESSION['repassword'] = "Không được bỏ trống trường này";
                    } else if ($_POST['repassword'] != $_POST['password']) {
                        $_SESSION['repassword'] = "Không đúng định dạng password";
                    }

                    if (!isset($_SESSION['user']) && !isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['repassword'])) {
                        insert_taikhoan($user, $email, $password);
                        $thongbao = "insert tài khoản thành công";
                    } else {
                        echo "Add không thành công";
                    }
                }
                include "view/taikhoan/sign.php";
                break;
            case 'login':
                if (isset($_POST['login']) && $_POST['login']) {
                    if (empty($_POST['email'])) {
                        $_SESSION['email'] = "Không được để trống trường này";
                    } else {
                        $email = $_POST['email'];
                    }
                    if (empty($_POST['password'])) {
                        $_SESSION['password'] = "Không được để trống trường này";
                    } else {
                        $password = $_POST['password'];
                    }
                    $checkuser = checkuser($email, $password);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        header('location: index.php');
                    } else {
                        $thongbao = "Tai khoan khong ton tai";
                    }
                }
                include 'view/taikhoan/login.php';
                break;
            case 'forgotpassword':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "mat khau cua ban la: " . $checkemail['password'];
                    } else {
                        $thongbao = "email nay khong ton tai";
                    }
                }
                include "view/taikhoan/forgotpassword.php";
                break;
            case 'product':
                if (isset($_GET['category_id ']) && ($_GET['category_id '] > 0)) {
                    $category_id  = $_GET('category_id ');
                    $dssp = loadlist_sanpham("", $category_id);
                    $tendm =  loadeone_danhmuc($id);
                } else {
                    $category_id = 0;
                }
                include 'view/main.php';
                break;
            case 'productdeltai':
                if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                    $product_id = $_GET('product_id');
                    $onesp = loadeone_sanpham($id);
                } else {
                    include "view/main.php";
                }
                include 'view/productdetails.php';
                break;


            default:

                break;
        }
    } else {
        include "view/main.php";
    }
    ?>
    <?php
    require 'view/layout/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>