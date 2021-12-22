<?php include "./header.php" ?>
<?php
if (isset($_GET['masp'])) {
    $laptop = ProductDAO::getLaptop($_GET['masp'], $conn);
}
?>
<session class="dp_breadcrumb">
    <div data-spm="breadcrumb" id="J_breadcrumb_list" class="breadcrumb_list breadcrumb_custom_cls">
        <ul class="breadcrumb" id="J_breadcrumb">
            <li class="breadcrumb_item">
                <span class="breadcrumb_item_text" style="margin-left: 140px; ">
                    <a title="Sản phẩm" style="text-decoration: none" href="./home.php" class="breadcrumb_item_anchor" data-spm-anchor-id="a2o4n.pdp_revamp.breadcrumb.1">
                        <span>Sản phẩm &emsp;> </span>
                        <div class="breadcrumb_right_arrow"></div>
                    </a>
                </span>
            </li>
            <li class="breadcrumb_item" style="width:400px">
                <span class="breadcrumb_item_text" style="width:400px">
                    <span class="breadcrumb_item_anchor breadcrumb_item_anchor_last">
                        &emsp;<?php echo $laptop['tensp']; ?>
                    </span>
                </span>
            </li>
        </ul>

    </div>
</session>


<div class="container bootdey">
    <section class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-5" id="ctnn" style="text-align:center; vertical-align:center">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img id="img" src="<?php echo "../admin/view/" . $laptop['hinh'] ?>" alt="">
                            </div>
                            <!-- <div class="carousel-item">
                                <a href="#">
                                    <img id="img2" src="./images/lap4.jpg" alt="">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#">
                                    <img id="img3" src="./images/lap2.jpg" alt="">
                                </a>
                            </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6  text_dp">
                    <h2 class="pro-d-title " id="title-color">
                        <?php echo $laptop['tensp']; ?>
                    </h2>
                    <div style="font-size: 16px;">
                        <b>Mô tả :</b>
                        <?php echo $laptop['mota']; ?>

                    </div>
                    <div class="product_meta ">
                        <span class="posted_in"> <strong>Hãng :</strong> <a rel="tag" href="#">Lenovo</a>
                            <span class="tagged_as"><strong>CPU :</strong> <?php echo $laptop['cpu']; ?>
                                <span class="tagged_as"><strong>RAM :</strong> <?php echo $laptop['ram']; ?>
                                    <span class="tagged_as"><strong>VGA :</strong> <?php echo $laptop['vga']; ?>
                                        <span class="tagged_as"><strong>Ổ cứng :</strong> <?php echo $laptop['ocung']; ?>
                                            <span class="tagged_as"><strong>Màn hình :</strong> <?php echo $laptop['manhinh']; ?>
                                                <span class="tagged_as"><strong>Trọng lượng :</strong> <?php echo $laptop['trongluong']; ?>
                                                    <span class="tagged_as"><strong>PIN :</strong> <?php echo $laptop['pin']; ?>
                                                        <span class="tagged_as"><strong>Màu sắc :</strong> <?php echo $laptop['mausac']; ?>

                    </div>
                    <div class="m-bot15"> <strong>Giá : </strong><span class="pro-price"><?php echo  number_format($laptop['gia'], 0, ",", ".") . " VND" ?></span></div>
                    <div class="btnBuy">
                        <form action="../controller/cart.php" method="post">
                            <input type="hidden" name="masp" value="<?php echo  $laptop['masp'] ?>">
                            <button class="btn btn-danger text_dp" id="btn-buy" type="submit"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="back-to-top">
            <a href="#hero">
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
<script src="./js/home.js"></script>
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


</html>