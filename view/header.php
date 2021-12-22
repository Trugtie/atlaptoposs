<?php
include "../controller/autoload.php";
include "../dao/ProductDAO.php";
include "../dao/AccessoryDAO.php";
session_start();
$user = "";
$userDropdown = "";
if (empty($_SESSION["user"])) {
    $user .= "
   <a href='#'>
    <i class='fa-solid fa-user fa-xl'>
    <i class='fa-solid fa-caret-down'>
    </i>
    </i>
   </a>
   ";
    $userDropdown .= "
   <li><a href='./login.php'>Đăng nhập</a></li>
   <li><a href='./register.php'>Đăng ký</a></li>
   ";
} else {
    $userget=$_SESSION["user"];
    $username = $userget->get_username();
    $user .= "<a href='#' class='user'> $username</a>";
    $userDropdown .= "
    <li><a href='./accountinformation.php'>Thông tin tài khoản</a></li>
    <li><a href='./lichsumuahang.php'>Lịch sử mua hàng</a></li>
    <li><a href='../controller/userController.php?action=logout'>Thoát</a></li>
    ";
}

$lapTopAll=ProductDAO::getAllLaptopShowcase($conn);
$lapTopWorks=ProductDAO::getAllLaptopWithTypeShowcase($conn,1);
$lapTopGamings=ProductDAO::getAllLaptopWithTypeShowcase($conn,2);
$lapTopCaoCaps=ProductDAO::getAllLaptopWithTypeShowcase($conn,3);
$phuKienALL=AccessoryDAO::getAllPhuKienShowcase($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website to sell laptop">
    <meta name="keywords" content="laptop, atlaptop">
    <meta name="author" content="Trugtie, NguyetTrann">
    <title>ATLAPTOP</title>
    <link rel="icon" href="./images/icon.PNG">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/aboutus.css">
    <link rel="stylesheet" href="./css/showcase.css">
    <link rel="stylesheet" href="./css/sukien.css">
    <link rel="stylesheet" href="./css/giohang.css">
    <link rel="stylesheet" href="./css/lsmh.css">
    <link rel="stylesheet" href="./css/thanhtoan.css">
    <link rel="stylesheet" href="./css/detailproduct-style.css">
    <link rel="stylesheet" href="./css/accountinfo.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- SlickCarousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<!-- Header -->
<header>
    <svg class="header-svg" xmlns="http://www.w3.org/2000/svg" width="1920" height="160" viewBox="0 0 1920 160">
        <path id="Path_18" data-name="Path 18" d="M0,962.463V841.023s488.623,70.127,982.994-8.552S1920,854.707,1920,854.707V962.463Z" transform="translate(1920 962.463) rotate(180)" fill="#a3e0ff" />
    </svg>
    <div class="container">
        <i class="fa-solid fa-bars" id="navBtn"></i>
        <nav class='nav' id="nav">
            <div class="logo">
                <a href="./home.php">
                    <img src="./images/logo.png" alt="logo">
                </a>
            </div>
            <ul class="snip1476">
                <li class="current"><a href="./home.php" class="active">Home</a></li>
                <li><a href="./laptop.php">Laptop</a>
                </li>
                <li><a href="./phukien.php">Phụ kiện</a></li>
                <li><a href="./sukien.php">Sự kiện</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./aboutus.php">About us</a></li>
            </ul>
            <div class="icon">
                <div>
                    <a href="./giohang.php" class="giohangcount"><i class="fa-solid fa-cart-shopping fa-xl">
                    </i>
                    <div class="count">
                        <?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']);
                        else echo "0";
                        ?>
                    </div>
                    </a>
                </div>
                <div> <a href=""><i class="fa-solid fa-bell fa-xl"></i></a></div>
                <div class="user_dropdown">
                    <?php echo $user ?>
                    <ul class="user_dropdown_content">
                        <?php
                        echo $userDropdown;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<body>