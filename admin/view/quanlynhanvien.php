<?php
include "../../controller/autoload.php";
include "../../dao/AdminDAO.php";
$admins = AdminDAO::getAllAdmin($conn);
?>

<?php include "./adminheader.php" ?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">QUẢN LÝ NHÂN VIÊN</h1>
        </div>
        <div class="controller d-flex">
            <a class="btnThem" href="./addAdmin.php">Thêm</a>
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
                    <th scope="col" class="ma">Mã NV</th>
                    <th scope="col" class="ho">Họ</th>
                    <th scope="col" class="ten">Tên</th>
                    <th scope="col" class="diachi">Địa chỉ</th>
                    <th scope="col" class="diachi">Sdt</th>
                    <th scope="col" class="email">Email</th>
                    <!-- <th scope="col" class="username">Username</th>
                    <th scope="col" class="password">Password</th> -->
                    <th scope="col" class="action">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin) : ?>
                    <?php if($admin["username"] != "master"){ ?>
                    <tr>
                        <th scope="row"><?php echo $admin['maad'] ?></th>
                        <td><?php echo $admin['ho'] ?></td>
                        <td><?php echo $admin['ten'] ?></td>
                        <td><?php echo $admin['diachi'] ?> </td>
                        <td><?php echo $admin['sdt'] ?></td>
                        <td><?php echo $admin['email'] ?></td>
                        <!-- <td><?php echo $admin['username'] ?></td>
                        <td><?php echo $admin['password'] ?></td> -->
                        <td class="action d-flex justify-content-around align-items-center">
                            <a href="./editthongtinadmin.php?maad=<?php echo $admin['maad'] ?>" class="sua">Sửa</a>
                            <a href="../controller/adminController.php?action=delete&maad=<?php echo $admin['maad'] ?>" class="xoa">Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
</section>
<?php include './music.php' ?>
<?php include "./adminfooter.php" ?>