<?php
include "../../controller/autoload.php";
include "../../dao/FeedBackDAO.php";
$feedbacks = FeedBackDAO::getAllFeedBack($conn);
// $tenkh = FeedBackDAO::getTenKhachHang($feedbacks['makh'], $conn);
?>
<?php include "./adminheader.php" ?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">QUẢN LÝ FEEDBACK</h1>
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
                    <th scope="col" class="ma">Mã fb</th>
                    <th scope="col" class="tengui">Tên người gửi</th>
                    <th scope="col" class="sanpham">Sản phẩm</th>
                    <th scope="col" class="noidung">Nội dung</th>
                    <th scope="col" class="thoigian">Thời gian</th>
                    <th scope="col" class="action">Hành động</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($feedbacks as $feedback): ?>
                <?php $makh = $feedback['makh'];
                    $ten = FeedBackDAO::getTenKhachHang($makh, $conn); ?>
                <tr>
                    <th scope="row"><?php echo $feedback['mafb'] ?></th>
                    <td><?php echo $ten['ten'] ?></td>
                    <td><?php echo $feedback['masp'] ?></td>
                    <td><?php echo $feedback['mota'] ?></td>
                    <td><?php echo $feedback['thoigian'] ?> </td>
                    <td class="action d-flex justify-content-around align-items-center">
                        <a href="../controller/customerController.php?action=delete&makh=<?php echo $feedback['makh'] ?>" class="xoa">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
</section>
<?php include './music.php'?>
<?php include "./adminfooter.php" ?>