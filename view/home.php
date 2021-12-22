<?php include "./header.php" ?>
<!-- Hero -->
<section class="hero" id="hero">
    <div class="container d-flex align-items-center justify-content-center hero__container">
        <div class="slogan animate-left">
            <h1 class="hero_header">Chào mừng bạn đến với website của ATLAPTOP</h1>
            <h4 class="hero_sub">Chúng tôi là cửa hàng chuyên cung cấp các loại laptop chính hãng, đáp ứng mọi cấu hình và nhu cầu sử dụng của bạn.</h4>
            <a href="#categories" class="btnHero">
                Xem Ngay
            </a>
        </div>
        <div class="image animate-right">
            <img src="./images/laptop-mong-nhe-gia-re-1-removebg-preview.png" alt="">
        </div>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" width="1920" height="183.039" viewBox="0 0 1919.931 183.039">
    <path id="Path_19" data-name="Path 19" d="M0,904.095s382.632,42.327,936.263,0,983.669,0,983.669,0v164.227H0Z" transform="translate(0 -885.283)" fill="#a3e0ff" />
</svg>
<!-- Cagories -->
<section class="categories">
    <div class="container">
        <h1 class="cateHeader text-center animate-left" id="categories">DANH MỤC SẢN PHẨM</h1>
        <div class="row">
            <div class="col-xl-4 col-sm-12 col-12 animate-top">
                <div class="cateImage">
                    <div class="cateImage_overlay">
                        <h2 class="cateImage_title">HỌC TẬP <br> VĂN PHÒNG</h2>
                        <a href="#categories__work" class="cateImage_subtitle">
                            <i class="fa-solid fa-laptop-code"></i>
                            <h3 class="cateImage_subtitle_content">Xem ngay</h3>
                        </a>
                    </div>
                </div>
                <div class="cateContent">
                    <h2 class="cateContent_header">Phù hợp cho:</h2>
                    <p class="cateContent_header_description">
                        Học sinh, sinh viên
                        Nhân viên văn phòng
                    </p>
                    <h2 class="cateContent_header">Ưu điểm:</h2>
                    <p class="cateContent_header_description">
                        Đáp ứng nhu cầu làm việc và học tập, giải trí đơn giản
                        Video, audio, word, excel, power point, game nhẹ,....
                        Giá nhẹ
                    </p>
                    <button class="btnUp">
                        <i class="fa-solid fa-chevron-up"></i>
                    </button>
                </div>
            </div>
            <div class="col-xl-4 col-sm-12 col-12 col-sm-12 animate-bottom">
                <div class="cateImage cateImage--2">
                    <div class="cateImage_overlay">
                        <h2 class="cateImage_title cateImage_title--2">ĐỒ HỌA <br> GAMING</h2>
                        <a href="#categories_gaming" class="cateImage_subtitle">
                            <i class="fa-solid fa-gamepad"></i>
                            <h3 class="cateImage_subtitle_content">Xem ngay</h3>
                        </a>
                    </div>
                </div>
                <div class="cateContent cateContent--2">
                    <h2 class="cateContent_header">Phù hợp cho:</h2>
                    <p class="cateContent_header_description">
                        Game thủ
                        Anh chị em thiết kế đồ họa

                    </p>
                    <h2 class="cateContent_header">Ưu điểm:</h2>
                    <p class="cateContent_header_description">
                        Đáp ứng nhu cầu làm việc và học tập, giải trí cao
                        Ps, Ai, Pr, Xd, Id, Blender, 3DMax, game cấu hình cao,....
                        Hỗ trợ card đồ họa
                    </p>
                    <button class="btnUp btnUp2">
                        <i class="fa-solid fa-chevron-up"></i>
                    </button>
                </div>
            </div>
            <div class="col-xl-4 col-sm-12 col-12 animate-top">
                <div class="cateImage cateImage--3">
                    <div class="cateImage_overlay">
                        <h2 class="cateImage_title cateImage_title--3">MỎNG NHẸ <br> CAO CẤP</h2>
                        <a href="#categories__high" class="cateImage_subtitle">
                            <i class="fa-brands fa-apple"></i>
                            <h3 class="cateImage_subtitle_content">Xem ngay</h3>
                        </a>
                    </div>
                </div>
                <div class="cateContent cateContent--3">
                    <h2 class="cateContent_header">Phù hợp cho:</h2>
                    <p class="cateContent_header_description">
                        Doanh nhân
                        Người đam mê công nghệ
                    </p>
                    <h2 class="cateContent_header">Ưu điểm:</h2>
                    <p class="cateContent_header_description">
                        Đáp ứng nhu cầu làm việc và học tập, giải trí, nghiên cứu
                        Đẳng cấp, sang trọng
                        Cấu hình khủng đáp ứng nhiều nhu cầu nghiên cứu công nghệ




                    </p>
                    <button class="btnUp btnUp3">
                        <i class="fa-solid fa-chevron-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Label -->
<section class="label">
    <div class="container">
        <div class="customer-logos">
            <div class="slide"><img src="./images/AsusLogo.png"></div>
            <div class="slide"><img src="./images/hplogo.png"></div>
            <div class="slide"><img src="./images/macbooklogo.png"></div>
            <div class="slide"><img src="./images/delllogo.png"></div>
            <div class="slide"><img src="./images/acerlogo.png"></div>
        </div>

    </div>
</section>
<!-- Sale -->
<section class="sale">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                include "../dao/KhuyenMaiDAO.php";
                $sales = KhuyenMaiDAO::getAllKhuyenMai($conn);
                ?>
                <?php foreach ($sales as $i=>$sale):?>
                <?php if($i==0){ ?>
                <div class="carousel-item active">
                    <img src=".<?php echo $sale['hinh'] ?>" class="d-block w-100" alt=".newsale">
                </div>
                <?php }
                else{
                ?>
                <div class="carousel-item ">
                    <img src=".<?php echo $sale['hinh'] ?>" class="d-block w-100" alt="schooclsale">
                </div>
                <?php } ?>
                <?php endforeach; ?>
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
</section>
<!-- Subsection 1 -->
<section class="sub1">
    <div class="container container__subsection d-flex justify-content-center align-items-center text-center ">
        <h1 class="subsection__title animate-left"> HỌC TẬP <br> VĂN PHÒNG</h1>
    </div>
</section>
<!-- Showcase work-->
<section class="showcase">
    <div class="container">
        <h1 class="cateHeader text-center animate-top" id="categories__work">LAPTOP HỌC TẬP VĂN PHÒNG</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper animate-left">
            <div class="swiper-wrapper">
                <?php $slides = ceil(count($lapTopWorks) / 6);
                $flag = 0;
                $temp = 0;
                $count = 0;
                for ($i = 0; $i < $slides; $i++) :
                ?>
                    <div class="swiper-slide">
                        <?php if ($flag == 0) { ?>
                            <?php for ($j = 0; $j < count($lapTopWorks); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $flag = 1;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopWorks[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopWorks[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopWorks[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopWorks[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopWorks[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopWorks[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopWorks[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopWorks[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopWorks[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopWorks[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } else if ($flag == 1) { ?>
                            <?php for ($j = $temp; $j < count($lapTopWorks); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopWorks[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopWorks[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopWorks[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopWorks[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopWorks[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopWorks[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopWorks[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopWorks[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopWorks[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopWorks[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } ?>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <a href="./laptop.php" class="btnAll">Xem tất cả</a>
        </div>
    </div>
</section>
<!-- Subsection 2 -->
<section class="sub1 sub2">
    <div class="container container__subsection d-flex justify-content-center align-items-center text-center ">
        <h1 class="subsection__title subsection__title2 animate-left"> ĐỒ HỌA <br> GAMING</h1>
    </div>
</section>
<!-- Showcase gaming -->
<section class="showcase">
    <div class="container">
        <h1 class="cateHeader text-center animate-top" id="categories_gaming">LAPTOP ĐỒ HỌA - GAMING</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper animate-right">
        <div class="swiper-wrapper">
                <?php $slides = ceil(count($lapTopGamings) / 6);
                $flag = 0;
                $temp = 0;
                $count = 0;
                for ($i = 0; $i < $slides; $i++) :
                ?>
                    <div class="swiper-slide">
                        <?php if ($flag == 0) { ?>
                            <?php for ($j = 0; $j < count($lapTopGamings); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $flag = 1;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopGamings[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopGamings[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopGamings[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopGamings[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopGamings[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopGamings[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopGamings[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopGamings[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopGamings[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopGamings[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } else if ($flag == 1) { ?>
                            <?php for ($j = $temp; $j < count($lapTopGamings); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopGamings[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopGamings[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopGamings[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopGamings[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopGamings[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopGamings[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopGamings[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopGamings[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopGamings[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopGamings[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } ?>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <a href="./laptop.php" class="btnAll">Xem tất cả</a>
        </div>
    </div>
</section>
<!-- Subsection 3 -->
<section class="sub1 sub3">
    <div class="container container__subsection d-flex justify-content-center align-items-center text-center ">
        <h1 class="subsection__title subsection__title3 animate-left"> CAO CẤP <br> SANG CHẢNH</h1>
    </div>
</section>
<!-- Showcase high price -->
<section class="showcase">
    <div class="container">
        <h1 class="cateHeader text-center animate-top" id="categories__high">LAPTOP CAO CẤP</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper animate-left">
        <div class="swiper-wrapper">
                <?php $slides = ceil(count($lapTopCaoCaps) / 6);
                $flag = 0;
                $temp = 0;
                $count = 0;
                for ($i = 0; $i < $slides; $i++) :
                ?>
                    <div class="swiper-slide">
                        <?php if ($flag == 0) { ?>
                            <?php for ($j = 0; $j < count($lapTopCaoCaps); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $flag = 1;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopCaoCaps[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopCaoCaps[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopCaoCaps[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopCaoCaps[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopCaoCaps[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } else if ($flag == 1) { ?>
                            <?php for ($j = $temp; $j < count($lapTopCaoCaps); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopCaoCaps[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopCaoCaps[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopCaoCaps[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopCaoCaps[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopCaoCaps[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopCaoCaps[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } ?>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <a href="./laptop.php" class="btnAll">Xem tất cả</a>
        </div>
    </div>
</section>
<!-- Contact -->
<section class="contact">
    <div class="container container__contact">
        <h1 class="contact__content__header animate-top">Contact us</h1>
        <div class="contact__content animate-left">
            <div class="content__info">
                <h2 class="content__header">
                    Chúng tôi rất hân hạnh được lắng nghe các bạn
                </h2>
                <p class="contact__description
                    contact__description--request">
                    Nếu bạn có nhu cầu hợp tác hay quảng cáo trên website của chúng tôi hay điền thông tin và gửi qua form này. Xin cám ơn
                </p>
                <p class="contact__description contact__description--location">
                    <i class="fa-solid fa-location-dot">
                    </i>300 Đường 3/2, Phường 12, Quận 10, Thành phố Hồ Chí Minh
                </p>
                <p class="contact__description">
                    <i class="fa-solid fa-phone"></i>0903356879
                </p>
                <p class="contact__description">
                    <i class="fa-solid fa-envelope">
                    </i>atlaptop@gmail.com
                </p>
            </div>
            <div class="content__form animate-right">
                <input type="text" placeholder="Type your email...">
                <input type="text" placeholder="Type title...">
                <textarea name="" id="" cols="30" rows="10" placeholder="Type description...."></textarea>
                <button class="contact__button">Submit</button>
            </div>
        </div>
    </div>
</section>
<!-- Map -->
<section class="map">
    <div class="container">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="map__ifr animate-bottom" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=300%20%C4%90%C6%B0%E1%BB%9Dng%203/2,%20Ph%C6%B0%E1%BB%9Dng%2012,%20Qu%E1%BA%ADn%2010,%20Th%C3%A0nh%20ph%E1%BB%91%20H%E1%BB%93%20Ch%C3%AD%20Minh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 1255px;
                    }
                </style><a href="https://www.embedgooglemap.net"></a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 1255px;
                    }
                </style>
            </div>
        </div>
    </div>
</section>
<?php include "./footer.php" ?>