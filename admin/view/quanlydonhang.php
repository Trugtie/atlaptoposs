<?php include "../../dao/OrderDAO.php" ?>
<?php
$orders = OrderDAO::getOrders($conn);
?>
<?php include "./adminheader.php" ?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">QUẢN LÝ ĐƠN HÀNG</h1>
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
                    <th scope="col" class="ma">Mã đơn</th>
                    <th scope="col" class="ngaytao">Ngày tạo</th>
                    <th scope="col" class="nguoinhan">Người nhận</th>
                    <th scope="col" class="sdt">SĐT</th>
                    <th scope="col" class="diachi">Địa chỉ</th>
                    <th scope="col" class="tonggia">Tổng tiền</th>
                    <th scope="col" class="tinhtrang">Tình trạng</th>
                    <th scope="col" class="action">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order):?>
                <tr>
                    <th scope="row"><?php echo $order['madon']?></th>
                    <td><?php echo $order['ngaytao']?></td>
                    <td><?php echo $order['nguoinhan']?></td>
                    <td><?php echo $order['sdt']?></td>
                    <td><?php echo $order['diachigiao']?></td>
                    <td><?php echo number_format( $order['tongtien'],0,",",".")." VND"?></td>
                    <td><?php echo $order['tinhtrang']?></td>
                    <td class="action d-flex justify-content-evenly align-items-center">
                        <a href="./chitietdonhang.php?madon=<?php echo $order['madon']?>" class="sua">Xem</a>
                        <a href="../controller/orderController.php?madon=<?php echo $order['madon']?>&action=xoa" class="xoa">Xóa</a>
                        <?php if($order['tinhtrang']=="Chưa giao"): ?>
                        <a href="../controller/orderController.php?madon=<?php echo $order['madon']?>&action=duyet" class="duyet">Duyệt</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php include './music.php' ?>
<?php include "./adminfooter.php" ?>