<?php include "./header.php" ?>
<!-- Sale -->
<section class="sale--nonebackground">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                include "../dao/KhuyenMaiDAO.php";
                $sales = KhuyenMaiDAO::getAllKhuyenMai($conn);
                ?>
                <?php foreach ($sales as $i => $sale) : ?>
                    <?php if ($i == 0) { ?>
                        <div class="carousel-item active">
                            <img src=".<?php echo $sale['hinh'] ?>" class="d-block w-100" alt=".newsale">
                        </div>
                    <?php } else {
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
<!-- Showcase -->
<section class="showcase">
    <div class="container">
        <h1 class="cateHeader text-center animate-top" id="categories__work">PHỤ KIỆN</h1>
        <div class="tool">
            <div class="search">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="text">
                Bộ lọc:
            </div>
            <div class="filter">
                <div class="comboboxs">
                    <select name="cboLoai" id="" class="cboSanPham">
                        <option value="loai">Loại</option>
                        <option value="tainghe">Tai Nghe</option>
                        <option value="sac">Sạc</option>
                    </select>
                    <select name="cboHang" id="" class="cboSanPham">
                        <option value="hang">Hãng</option>
                        <option value="acer">Acer</option>
                        <option value="dell">Dell</option>
                    </select>
                </div>
            </div>
            <div class="text">
                Sắp xếp theo:
            </div>
            <div class="order">
                <div class="comboboxs">
                    <select name="cboSanPham" id="" class="cboSanPham">
                        <option value="giatang">Giá tăng</option>
                        <option value="giagiam">Giá giảm</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper swiper--long animate-left">
            <div class="swiper-wrapper">
                <?php $slides = ceil(count($phuKienALL) / 9);
                $flag = 0;
                $temp = 0;
                $count = 0;
                for ($i = 0; $i < $slides; $i++) :
                ?>
                    <div class="swiper-slide">
                        <?php if ($flag == 0) { ?>
                            <?php for ($j = 0; $j < count($phuKienALL); $j++) : ?>
                                <?php if ($count == 9) {
                                    $temp = $j;
                                    $flag = 1;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $phuKienALL[$j]['hinh'] ?>" alt="">
                                        <a href="./detailPhukien.php?masp=<?php echo $phuKienALL[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $phuKienALL[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>Hãng</td>
                                                <td><?php echo $phuKienALL[$j]['tenhang'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mô tả:</td>
                                                <td><?php echo $phuKienALL[$j]['mota'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $phuKienALL[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($phuKienALL[$j]['gia'], 0, ",", ".") . " VND" ?></div>
                                    </div>
                                </div>
                                <?php $count += 1; ?>
                            <?php endfor; ?>
                        <?php } else if ($flag == 1) { ?>
                            <?php for ($j = $temp; $j < count($phuKienALL); $j++) : ?>
                                <?php if ($count == 9) {
                                    $temp = $j;
                                    $count = 0;
                                    break;
                                } ?>
                                <div class="item">
                                    <div class="item__image">
                                        <img src="<?php echo "../admin/view/" . $phuKienALL[$j]['hinh'] ?>" alt="">
                                        <a href="./detailPhukien.php?masp=<?php echo $phuKienALL[$j]['masp'] ?>" class="image__more">Xem thêm</a>
                                    </div>
                                    <h3 class="item__name"><?php echo $phuKienALL[$j]['tensp'] ?></h3>
                                    <div class="item__detail">
                                        <table>
                                            <tr>
                                                <th>Hãng</td>
                                                <td><?php echo $phuKienALL[$j]['tenhang'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mô tả:</td>
                                                <td><?php echo $phuKienALL[$j]['mota'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="item__button">
                                        <form action="../controller/cart.php" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $phuKienALL[$j]['masp'] ?>">
                                            <button class="cart"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                        </form>
                                        <div class="price"><?php echo  number_format($phuKienALL[$j]['gia'], 0, ",", ".") . " VND" ?></div>
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

        </div>
    </div>
</section>
<?php include "./footer.php" ?>