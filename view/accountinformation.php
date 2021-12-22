<?php
include "../controller/autoload.php";
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
    $userget = $_SESSION["user"];
    $username = $userget->get_username();
    $ma = $userget->get_makh();
    $ho = $userget->get_ho();
    $ten = $userget->get_ten();
    $sdt = $userget->get_sdt();
    $diachi = $userget->get_diachi();
    $user .= "<a href='#' class='user'> $username</a>";
    $userDropdown .= "
    <li><a href='./accountinformation.php'>Thông tin tài khoản</a></li>
    <li><a href='./lichsumuahang.php'>Lịch sử mua hàng</a></li>
    <li><a href='../controller/userController.php?action=logout'>Thoát</a></li>
    ";
}
if (isset($_SESSION['notify'])) {
    $notify = $_SESSION['notify'];
    echo "
    <div class='modal' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Cập nhật thông tin</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
          <p>$notify</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>
  </div>
    ";
    unset($_SESSION["notify"]);
  }
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Website to sell laptop">
<meta name="keywords" content="laptop, atlaptop">
<meta name="author" content="Trugtie, NguyetTrann">
<title>ATLAPTOP</title>
<link rel="icon" href="./images/icon.PNG">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/accountinfo.css">
<link rel="stylesheet" href="./css/register-style.css">
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
                <li class="current"><a href="../index.php" class="active">Home</a></li>
                <li><a href="./laptop.php">Laptop</a>
                </li>
                <li><a href="./phukien.php">Phu kiện</a></li>
                <li><a href="./sukien.php">Sự kiện</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./aboutus.php">About us</a></li>
            </ul>
            <div class="icon">
                <div>
                    <a href="./giohang.php" class="giohangcount"><i class="fa-solid fa-cart-shopping fa-xl">
                        </i>
                        <div class="count">0</div>
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
    <div>
        <session>
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <?php
                    echo '<div class="col-md-3 border-right">';
                    echo  '<div class="d-flex flex-column align-items-center text-center p-5 py-5"><img class="rounded-circle mt-5" src="./images//3bf97c640b8732a64ab73b653f622582.jpg"><span class="font-weight-bold" style=" font-size: 20px;">' . $username . '</span><span class="text-black-50"></span><span> </span></div>';
                    echo  '</div>'
                    ?>
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right" style="font-size: 25px;">Thông Tin Tài Khoản</h4>
                            </div>
                            <form action="../controller/userController.php" method="POST">
                                <input type="text" name="ma" hidden value="<?php echo $ma; ?>">
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels" style="font-size: 20px;">Tên</label><input name="ten" type="text" class="form-control" style="height: 40px; font-size: 16px;" placeholder="Nhập tên" value="<?php echo $ten; ?>"></div>
                                    <div class="col-md-6"><label class="labels" style="font-size: 20px;">Họ</label><input name="ho" type="text" class="form-control" style="height: 40px; font-size: 16px;" placeholder="Nhập họ" value="<?php echo $ho; ?>"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels" style="font-size: 20px;"> Số điện thoại</label><input name="sdt" type="text" class="form-control" style="height: 40px; font-size: 16px;" placeholder="Nhập số điện thoại" value="<?php echo $sdt; ?>"></div>
                                    <div class="col-md-12"><label class="labels" style="font-size: 20px;">Địa chỉ</label><input name="diachi" type="text" class="form-control" style="height: 40px; font-size: 16px;" placeholder="Nhập địa chỉ" value="<?php echo $diachi; ?>"></div>
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" style="font-size: 20px; margin-bottom:30px" type="submit" name="action" value="update">Cập nhật</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </div>
    </session>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="back-to-top">
                <a href="#nav">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
            <div class="footer-content">
                <div class="footer-content-about animate-top">
                    <h4>ABOUT ATLAPTOP
                    </h4>
                    <div class="asterisk">
                        <i class="fa-solid fa-laptop fa-2xl"></i>
                    </div>
                    <p>
                        Cửa hàng laptop uy tín - thân thiện - nhiệt tình tại Hồ Chí Minh
                        Đến với chúng tôi bạn sẽ tìm được những sản phẩm chất lượng và dịch vụ tốt nhất
                    </p>
                </div>
                <div class="footer-content-divider animate-bottom">
                    <div class="social-media">
                        <h4>Follow along</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-tripadvisor"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email address...">
                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src=".js/home.js"></script>
<script src="./js/nav.js"></script>
<script src="./js/scrollreveal.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script src="./js/modal.js"></script>
</html>