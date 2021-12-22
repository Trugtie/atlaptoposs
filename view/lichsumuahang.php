<?php include "./header.php" ?>
<?php include "../dao/UserDAO.php"?>
<?php
$histories = UserDAO::getHistoryOrder($_SESSION['user']->get_makh(),$conn);
?>
<?php
if(isset($_SESSION['notify'])){
    $notify = $_SESSION['notify'];
      echo "
    <div class='modal' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Thanh toán</h5>
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
<section class="giohang">
    <div class="container">
        <h1 class="cateHeader text-center event__header animate-top" id="categories__work">LỊCH SỬ MUA HÀNG</h1>
        <table class="table .table-striped">
            <thead>
                <tr>
                    <th scope="col" class="madh">Mã đơn hàng</th>
                    <th scope="col" class="ngaytao">Ngày tạo</th>
                    <th scope="col" class="nguoinhan">Người nhận</th>
                    <th scope="col" class="sdt">Sđt</th>
                    <th scope="col" class="tinhtrang">Tình trạng</th>
                    <th scope="col" class="diachi">Địa chỉ giao</th>
                    <th scope="col" class="makhuyenmai">Mã KM</th>
                    <th scope="col" class="xemdonhang"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($histories as $history):?>
                <tr>
                    <th scope="row"><?php echo $history['madon']?></th>
                    <td><?php echo $history['ngaytao']?></td>
                    <td><?php echo $history['nguoinhan']?></td>
                    <td><?php echo $history['sdt']?></td>
                    <td>
                    <?php echo $history['tinhtrang']?>
                    </td>
                    <td><?php echo $history['diachigiao']?></td>
                    <td>
                    <?php echo $history['makm']?>
                    </td>
                    <td>
                        <a href="./chitietdonhang.php?madon=<?php echo $history['madon']?>" class="xem">Xem</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
</section>
<?php include "./footer.php" ?>