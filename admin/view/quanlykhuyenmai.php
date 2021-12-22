<?php
include "../../controller/autoload.php";
include "../../dao/KhuyenMaiDAO.php";
$khuyenmais = KhuyenMaiDAO::getAllKhuyenMai($conn);
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
            <h1 class="title">QUẢN LÝ KHUYẾN MÃI</h1>
        </div>
        <div class="controller d-flex">
            <a class="btnThem" href="./addKhuyenmai.php">Thêm</a>
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
                    <th scope="col" class="ma">Mã đợt</th>
                    <th scope="col" class="hinh">Hình</th>
                    <th scope="col" class="ten">Tên đợt</th>
                    <th scope="col" class="mota">Mô tả</th>
                    <th scope="col" class="giatrigiam">Giá trị giảm</th>
                    <th scope="col" class="ngaybd">Ngày bắt đầu</th>
                    <th scope="col" class="ngaykt">Ngày kết thúc</th>
                    <th scope="col" class="action">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($khuyenmais as $khuyenmai) : ?>
                    <tr>
                        <th scope="row"><?php echo $khuyenmai['makm'] ?></th>
                        <td><img src="<?php echo "./" . $khuyenmai["hinh"] ?>" alt=""></td>
                        <td><?php echo $khuyenmai['tenkm'] ?></td>
                        <td><?php echo $khuyenmai['mota'] ?></td>
                        <td><?php echo $khuyenmai['giatrigiam']."%" ?></td>
                        <td><?php echo $khuyenmai['ngaybd'] ?></td>
                        <td><?php echo $khuyenmai['ngaykt'] ?></td>
                        <td class="action d-flex justify-content-around align-items-center">
                            <a href="./editkhuyenmai.php?makm=<?php echo $khuyenmai['makm'] ?>" class="sua">Sửa</a>
                            <a href="../controller/khuyenmaiController.php?action=delete&makm=<?php echo $khuyenmai['makm'] ?>" class="xoa">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php include './music.php' ?>
<?php include "./adminfooter.php" ?>