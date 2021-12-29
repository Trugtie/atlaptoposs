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
                <?php $slides = ceil(count($lapTopAll) / 6);
                $flag = 0;
                $temp = 0;
                $count = 0;
                for ($i = 0; $i < $slides; $i++) :
                ?>
                    <div class="swiper-slide">
                        <?php if ($flag == 0) { ?>
                            <?php for ($j = 0; $j < count($lapTopAll); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $flag = 1;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopAll[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopAll[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopAll[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopAll[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopAll[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopAll[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopAll[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopAll[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopAll[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopAll[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } else if ($flag == 1) { ?>
                            <?php for ($j = $temp; $j < count($lapTopAll); $j++) : ?>
                                <?php if ($count == 6) {
                                    $temp = $j;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $lapTopAll[$j]['hinh'] ?>" alt="">
                                        <a href="./detailproduct.php?masp=<?php echo $lapTopAll[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $lapTopAll[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>CPU:</td>
                                                <td><?php echo $lapTopAll[$j]['cpu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RAM:</td>
                                                <td><?php echo $lapTopAll[$j]['ram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>VGA</td>
                                                <td><?php echo $lapTopAll[$j]['vga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ổ cứng:</td>
                                                <td><?php echo $lapTopAll[$j]['ocung'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Màn hình:</td>
                                                <td><?php echo $lapTopAll[$j]['manhinh'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $lapTopAll[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($lapTopAll[$j]['gia'], 0, ",", ".") . " VND" ?></div>
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
                <a href="#" class="btnAll">Xem tất cả</a>
            </div>
        </div>
    </section>
<?php include "./footer.php" ?>