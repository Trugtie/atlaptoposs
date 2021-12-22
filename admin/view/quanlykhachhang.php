<?php
include "../../controller/autoload.php";
include "../../dao/UserDAO.php";
$users = UserDAO::getAllUser($conn);
?>

<?php include "./adminheader.php" ?>
<?php
if(!empty($_SESSION['error'])){
    $error = $_SESSION['error'];
    echo "
    <div class='modal' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Lỗi xóa</h5>
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
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">QUẢN LÝ KHÁCH HÀNG</h1>
        </div>
        <div class="controller d-flex">
            <select name="cboSanPham" id="" class="cboSanPham">
                <option value="tangdan">Tăng dần</option>
                <option value="giamdan">Giảm dần</option>
            </select>
            <div class="search">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <table class="table .table-striped">
            <thead>
                <tr>
                    <th scope="col" class="ma">Mã KH</th>
                    <th scope="col" class="ho">Họ Tên</th>
                    <th scope="col" class="sdt">Sđt</th>
                    <th scope="col" class="diachi">Địa chỉ</th>
                    <th scope="col" class="email">Email</th>
                    <th scope="col" class="username">Username</th>
                    <th scope="col" class="action">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <th scope="row"><?php echo $user['makh'] ?></th>
                    <td><?php echo $user['ho']." ".$user['ten'] ?></td>
                    <td><?php echo $user['sdt'] ?></td>
                    <td><?php echo $user['diachi'] ?> </td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td class="action d-flex justify-content-around align-items-center">
                        <a href="./editthongtinkhachhang.php?makh=<?php echo $user['makh']?>" class="sua">Sửa</a>
                        <a href="../controller/customerController.php?action=delete&makh=<?php echo $user['makh'] ?>" class="xoa">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php include './music.php'?>
<?php include "./adminfooter.php" ?>