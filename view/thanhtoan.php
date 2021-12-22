<?php include "./header.php" ?>
<?php
if(!empty($_SESSION['error'])){
    $error = $_SESSION['error'];
    echo "
    <div class='modal' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Lỗi thanh toán</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
          <p>$error</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>
  </div>
    ";
    unset($_SESSION['error']);
  }
?>
<section class="buy">
    <div class="container">
        <h1 class="cateHeader text-center event__header animate-top" id="categories__work">THANH TOÁN</h1>
        <form action="../controller/pay.php" method="post">
            <div class="row gx-5">
                <div class="col-5 animate-left">
                    <h3>Người nhận: </h3>
                    <input name="nguoinhan" type="text" value="<?php echo $_SESSION['user']->get_ho() . " " . $_SESSION['user']->get_ten(); ?>">
                    <h3>SĐT: </h3>
                    <input name="sdt" type="text" value="<?php echo $_SESSION['user']->get_sdt(); ?>">
                    <h3>Địa chỉ:</h3>
                    <input name="diachi" type="text" class="input--diachi" value="<?php echo $_SESSION['user']->get_diachi(); ?>">
                    <!-- <div class="locate d-flex justify-content-between">
                    <div class="phuong">
                        <h3>Phường</h3>
                        <select class="cboSanPham" name="phuong" id="">
                            <option value="Phường 1">
                                Phường 1
                            </option>
                            <option value="Phường 1">
                                Phường 2
                            </option>
                        </select>
                    </div>
                    <div class="quan">
                        <h3>Quận: </h3>
                        <select class="cboSanPham" name="quan" id="">
                            <option value="Quận 1">
                                Quận 1
                            </option>
                            <option value="Quận 2">
                                Quận 2
                            </option>
                        </select>
                    </div>
                </div> -->
                    <h3>Phương thức thanh toán</h3>
                    <select name="phuongthuc" class="cboSanPham" id="">
                        <option value="Internet Banking">Internet Banking</option>
                        <option value="Thanh toán trực tiếp">
                            Thanh toán trực tiếp
                        </option>
                    </select>
                    <h3>Mã khuyến mãi: </h3>
                    <div class="position-relative">
                        <input name="makm" type="text" class="input--khuyenmai"
                        value="<?php
                        if(isset($_SESSION['makm'])){
                            echo $_SESSION['makm'];
                            unset($_SESSION['makm']);
                        }
                        ?>"
                        >
                        <button type="submit" name="action" value="apdungkm" class="makm">
                            Áp dụng
                        </button>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="./giohang.php" class="chontiep">Quay lại giỏ</a>
                        <button type="submit" class="thanhtoan--button" name="action" value="dathang">
                            Đặt hàng
                        </button>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-6 animate-right donhang">
                    <h2 class="text-center">ĐƠN HÀNG</h2>
                    <div class="tablewrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tong = 0 ?>
                                <?php foreach ($_SESSION['cart'] as $product) : ?>
                                    <tr>
                                        <td><?php echo $product->getTenSp(); ?></td>
                                        <td><?php echo $product->getSoluong(); ?></td>
                                        <td><?php echo number_format($product->getGia(), 0, ",", ".") . " VND"; ?></td>
                                    </tr>
                                    <?php $tong += $product->getSoluong() * $product->getGia(); ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <hr>
                    <div class="tongtien">
                        <div class="tong d-flex justify-content-around">
                            <h3>Tổng tiền</h3>
                            <p><?php echo number_format($tong, 0, ",", ".") . " VND"; ?></p>
                        </div>
                        <div class="giam d-flex justify-content-around">
                            <h3>Giảm</h3>
                            <p>
                                <?php if (isset($_SESSION['km'])) {
                                    $km = $_SESSION['km'];
                                    unset($_SESSION['km']);
                                    echo number_format($km, 0, ",", ".") . " VND";
                                } else {
                                    $km = 0;
                                    echo $km . " VND";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="thanhtien">
                        <div class="tong d-flex justify-content-around">
                            <h3>Thành tiền</h3>
                            <p>
                                <?php
                                $thanhtien = $tong - $km;
                                echo number_format($thanhtien, 0, ",", ".") . " VND";
                                ?>
                            </p>
                            <input name="thanhtien" type="text" hidden value="<?php echo $thanhtien ?>">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php include "./footer.php" ?>