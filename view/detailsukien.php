<?php include "./header.php" ?>
<?php include "../dao/KhuyenMaiDAO.php" ?>
<?php
$event = KhuyenMaiDAO::getKhuyenMai($_GET['makm'],$conn);
?>
<session class="dp_breadcrumb">
        <div data-spm="breadcrumb" id="J_breadcrumb_list" class="breadcrumb_list breadcrumb_custom_cls">
            <ul class="breadcrumb" id="J_breadcrumb" style="height: 50px; background-color:aqua">
                <li class="breadcrumb_item">
                    <span class="breadcrumb_item_text"style="margin-left: 80px;">
                        <a style="font-size: 20px; height: 20px; text-decoration: none;" title="Sản phẩm" href="../home.php" class="breadcrumb_item_anchor" data-spm-anchor-id="a2o4n.pdp_revamp.breadcrumb.1">
                            <span>Sự kiện &emsp;> </span>
                            <div class="breadcrumb_right_arrow"></div>
                        </a>
                    </span>
                </li>
                <li class="breadcrumb_item" style="width:400px;">
                    <span class="breadcrumb_item_text" style="width:400px; font-size: 20px;margin-top: -12px;">
                        <span class="breadcrumb_item_anchor breadcrumb_item_anchor_last">
                        &emsp;<?php echo strtoupper($event['tenkm']) ?>
                        </span>
                    </span>
                </li>
            </ul>

        </div>
    </session>
    <div class="container">
        <h1 class="cateHeader text-center event__header animate-top" id="categories__work" style="font-size: 42px;">CHI TIẾT SỰ KIỆN</h1>
        <div class="flex" style="margin-bottom:10px; background-color: black">
       
    <section class="sale">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img src=".<?php echo $event['hinh'] ?>" class="d-block w-100" alt="schooclsale">
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
        </div>
        <div class="event d-flex">
            <div class="event__content flex-grow-1  flex-column justify-content-between" style="background-color: black; color:white; ">
                <p style="font-size:24px">Chào mừng mọi người đã đến với ATLAPTOP!!!</p>
                <p style="font-size:24px"><?php echo $event['mota'] ?></p>
                <p class="content__sale">-  Giảm giá lên tới <?php echo $event['giatrigiam'] ?>%  <i class="fa-solid fa-piggy-bank"></i> </p>
                <p style="font-size:24px">Thời gian diễn ra sự kiện: <?php echo $event['ngaybd'] ?> - <?php echo $event['ngaykt'] ?>.</p>

                <div class="content__extention d-flex justify-content-between">
                
                </div>
            </div>
        </div>
       
    </div>
</section>
<section class="showcase">
        <div class="container">
            <h1 class="cateHeader text-center animate-top" id="categories__high">LAPTOP HỌC SINH</h1>
            <!-- Swiper -->
            <div class="swiper mySwiper animate-left">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__image">
                                <img src="./images/lap1.jpg" alt="">
                                <a href="#" class="image__more">Xem thêm</a>
                            </div>
                            <h3 class="item__name">Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN</h3>
                            <div class="item__detail">
                                <table>
                                    <tr>
                                        <th>CPU:</td>
                                        <td>Intel Core i5-10300H</td>
                                    </tr>
                                    <tr>
                                        <th>RAM:</td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <th>VGA</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB GDDR6</td>
                                    </tr>
                                    <tr>
                                        <th>Ổ cứng:</td>
                                        <td>512GB SSD</td>
                                    </tr>
                                    <tr>
                                        <th>Màn hình:</td>
                                        <td>15.6 inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item__button">
                                <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                <div class="price">20.000.000 VND</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <a href="#" class="btnAll">Xem tất cả</a>
            </div>
        </div>
    </section>
<?php include "./footer.php" ?>