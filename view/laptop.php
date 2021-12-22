<?php include "./header.php" ?>
<?php
if(isset($_SESSION['notify'])){
    $notify = $_SESSION['notify'];
      echo "
    <div class='modal' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Giỏ hàng</h5>
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
    unset($_SESSION['notify']);
  }
?>
<!-- Sale -->
<section class="sale--nonebackground">
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
<!-- Showcase -->
<section class="showcase">
    <div class="container">
        <h1 class="cateHeader text-center animate-top" id="categories__work">LAPTOP</h1>
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
                    <select name="cboLoaiMay" id="" class="cboSanPham">
                        <option value="Tất cả">Tất cả</option>
                        <option value="Văn phòng">Văn phòng</option>
                        <option value="Đồ họa">Đồ họa</option>
                        <option value="Cao cấp">Cao cấp</option>
                    </select>
                    <select name="cboCPU" id="" class="cboSanPham">
                        <option value="cpu">CPU</option>
                        <option value="intel">Intel</option>
                        <option value="amd">Amd</option>
                    </select>
                    <select name="cboRAM" id="" class="cboSanPham">
                        <option value="ram">RAM</option>
                        <option value="4gb">4GB</option>
                        <option value="8gb">8GB</option>
                    </select>
                    <select name="cboVGA" id="" class="cboSanPham">
                        <option value="VGA">VGA</option>
                        <option value="Onboard">Onboard</option>
                        <option value="Nvidia MX330 2GB">Nvidia MX330 2GB</option>
                    </select>
                    <select name="cboHang" id="" class="cboSanPham">
                        <option value="Hang">Hãng</option>
                        <option value="acer">ACER</option>
                        <option value="dell">DELL</option>
                    </select>
                    <select name="cboDisk" id="" class="cboSanPham">
                        <option value="Disk">Ổ cứng</option>
                        <option value="hdd">HDD</option>
                        <option value="ssd">SSD</option>
                    </select>
                </div>
            </div>
            <div class="text">
                Sắp xếp theo:
            </div>
            <div class="order">
                <div class="comboboxs">
                    <select name="cboGia" id="" class="cboSanPham">
                        <option value="giatang">Giá tăng</option>
                        <option value="giagiam">Giá giảm</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper swiper--long mySwiper animate-left">
            <div class="swiper-wrapper">
                <?php $slides = ceil(count($lapTopAll) / 9);
                $flag = 0;
                $temp = 0;
                $count = 0;
                for ($i = 0; $i < $slides; $i++) :
                ?>
                    <div class="swiper-slide">
                        <?php if ($flag == 0) { ?>
                            <?php for ($j = 0; $j < count($lapTopAll); $j++) : ?>
                                <?php if ($count == 9) {
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
                                <?php if ($count == 9) {
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

        </div>
    </div>
</section>
<?php include "./footer.php" ?>