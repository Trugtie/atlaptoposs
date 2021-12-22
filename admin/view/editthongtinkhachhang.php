<?php
include "../../controller/autoload.php";
include "../../dao/UserDao.php";
$makh = $_GET['makh'];
$user = UserDAO::getUserWithID($makh, $conn);
?>
<?php include "./adminheader.php" ?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">SỬA THÔNG TIN KHÁCH HÀNG</h1>
        </div>
        <div class="container rounded bg-white mt-5 mb-5">
            <form action="../controller/customerController.php" method="post">
                <table class="table .table-striped" style="border: 0;">
                    <tr>
                        <th>Mã</th>
                        <input class="form-control" id="editth" type="text" hidden name="ma" value="<?php echo $user["makh"]; ?>">
                        <th><input class="form-control" id="editth" type="text" disabled name="ma" value="<?php echo $user["makh"]; ?>"></th>
                    </tr>
                    <tr>
                        <th>Họ</th>
                        <th><input class="form-control" type="text" id="editth" name="ho" value="<?php echo $user["ho"]; ?>"></th>
                    </tr>
                    <tr>
                        <th>Tên</th>
                        <th><input class="form-control" type="text" id="editth" name="ten" value="<?php echo $user["ten"]; ?>"></th>
                    </tr>
                    <tr>
                        <th>Sđt</th>
                        <th><input class="form-control" type="text" id="editth" name="sdt" value="<?php echo $user["sdt"]; ?>"></th>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <th><input class="form-control" type="text" id="editth" name="diachi" value="<?php echo $user["diachi"]; ?>"></th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><input class="form-control" type="text" id="editth" disabled name="email" value="<?php echo $user["email"]; ?>"></th>
                    </tr>

                    <tr>
                        <th>Username</th>
                        <th><input class="form-control" type="text" id="editth" disabled name="username" value="<?php echo $user["username"]; ?>"></th>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <th><input class="form-control" type="text" id="editth" disabled name="password" value="<?php echo $user["password"]; ?>"></th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="mt-5 text-center" style="text-align: center;">
                                <button name="action" value="update" class="btn btn-primary" id="btn-luu" type="submit">Lưu</button>
                            </div>

                        </th>
                    </tr>

                </table>
            </form>


        </div>


    </div>
</section>
<?php include './music.php' ?>
<?php include "./adminfooter.php" ?>