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
<section class="giohang">
    <div class="container">
        <h1 class="cateHeader text-center event__header animate-top" id="categories__work">GIỎ HÀNG CỦA BẠN</h1>
        <table class="table .table-striped">
            <thead>
                <tr>
                    <th scope="col" class="ma">Mã SP</th>
                    <th scope="col" class="hinh">Hình</th>
                    <th scope="col" class="ten">Tên sản phẩm</th>
                    <th scope="col" class="gia">Giá</th>
                    <th scope="col" class="sl">Số lượng</th>
                    <th scope="col" class="thanhtien">Thành tiền</th>
                    <th scope="col" class="hanhdong">Hành động</th>
                </tr>
            </thead>
            <tbody>
               <?php if(isset($_SESSION['cart'])){ ?>
                <?php $tong = 0;?>
                <?php foreach($_SESSION['cart'] as $i=>$product):?>
                <tr>
                    <th scope="row"><?php echo  $product->getMaSp() ?></th>
                    <td><img src="../admin/view<?php echo $product->getHinh()?>" alt=""></td>
                    <td><?php echo $product->getTenSp()?></td>
                    <td><?php echo  number_format($product->getGia(),0,",",".")." VND"?> </td>
                    <td>
                        <div><a href="../controller/cart.php?vitri=<?php echo $i?>&action=plus" class="plus"><i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                        <input type="text" value="<?php echo  $product->getSoLuong() ?>" class="input__soluong">
                        <div class="">
                            <a href="../controller/cart.php?vitri=<?php echo $i?>&action=minus" class="minus"><i class="fa-solid fa-circle-minus"></i></a>
                        </div>
                    </td>
                    <td><?php echo number_format($product->getSoLuong() * $product->getGia(),0,",",".")." VND"?></td>
                    <td>
                        <a href="../controller/cart.php?vitri=<?php echo $i?>" class="xoa">Xóa</a>
                    </td>
                </tr>
                <?php $tong+=$product->getSoLuong() * $product->getGia() ?>
                <?php endforeach; ?>
                <?php } ?>
                <tr class="tongtientitle">
                    <th scope="col" colspan="6">Tổng tiền:</th>
                    <th scope="col" class="tongtien"><?php
                    if(empty($tong)) echo 0;
                    else
                     echo number_format($tong,0,",",".")." VND"?></th>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
        <a href="./laptop.php" class="chontiep">Chọn tiếp</a>
        <a href="../controller/pay.php" class="thanhtoan">Thanh toán</a>
        </div>
    </div>
</section>
<?php include "./footer.php" ?>