<?php
include "../../controller/autoload.php";
include "../../dao/AdminDAO.php";
?>
<?php include "./adminheader.php" ?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">THÊM NHÂN VIÊN</h1>
        </div>
        <div class="container rounded bg-white mt-5 mb-5">
            <form action="../controller/adminController.php" method="post">
                <table class="table .table-striped" style="border: 0;">
                    <tr>
                        <th>Mã</th>
                        <input class="form-control" id="editth" type="text" hidden name="ma" value="">
                        <th><input class="form-control" id="editth" type="text" disabled  name="ma" value=""></th>
                    </tr>
                    <tr>
                        <th>Họ</th>
                        <th><input class="form-control" type="text" id="editth" name="ho" value=""></th>
                    </tr>
                    <tr>
                        <th>Tên</th>
                        <th><input class="form-control" type="text" id="editth" name="ten" value=""></th>
                    </tr>
                    <tr>
                        <th>Sđt</th>
                        <th><input class="form-control" type="text" id="editth" name="sdt" value=""></th>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <th><input class="form-control" type="text" id="editth" name="diachi" value=""></th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><input class="form-control" type="text" id="editth"   name="email" value=""></th>
                    </tr>

                    <tr>
                        <th>Username</th>
                        <th><input class="form-control" type="text" id="editth"   name="username" value=""></th>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <th><input class="form-control" type="text" id="editth"   name="password" value=""></th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="mt-5 text-center" style="text-align: center;">
                                <button name="action" value="insertAdmin" class="btn btn-primary" id="btn-luu" type="submit">Lưu</button>
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