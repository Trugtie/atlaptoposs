<?php include "./adminheader.php" ?>
<?php include "../../dao/OrderDAO.php" ?>
<?php include "../../dao/SaleDAO.php" ?>
<?php
$history = OrderDAO::getOrder($_GET['madon'],$conn);
$details = OrderDAO::getDetailsOrder($_GET['madon'],$conn);
?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">THÔNG TIN ĐƠN HÀNG</h1>
        </div>
        <div class="container rounded bg-white mt-5 mb-5">
            <form action="" method="post">
                <table class="table .table-striped" style="border: 0;">
                <tr>
                        <th>Mã đơn:</th>
                        <input class="form-control" id="editth" type="text" hidden name="madon" value="<?php echo $history['madon'];?>">
                        <th><input class="form-control" id="editth" type="text" disabled name="ma" value="<?php echo $history['madon'];?>"></th>
                    </tr>
                    <tr>
                        <th>Người nhận:</th>
                        <th><input class="form-control" type="text" id="editth" name="nguoinhan" value="<?php echo $history['nguoinhan'];?>"></th>
                    </tr>
                    <tr>
                        <th>SĐT:</th>
                        <th><input class="form-control" type="text" id="editth" name="sdt" value="<?php echo $history['sdt'];?>"></th>
                    </tr>
                    <tr>
                        <th>Địa chỉ giao:</th>
                        <th><input class="form-control" type="text" id="editth" name="diachigiao" value="<?php echo $history['diachigiao'];?>"></th>
                    </tr>
                    <tr>
                        <th>PT thanh toán</th>
                        <th><input class="form-control" disabled type="text" id="editth" name="ptthanhtoan" value="<?php echo $history['ptthanhtoan'];?>"></th>
                    </tr>
                    <tr>
                        <th>Ngày tạo:</th>
                        <th><input class="form-control" type="text" id="editth" disabled name="ngaytao" value="<?php echo $history['ngaytao'];?>"></th>
                    </tr>
                    <tr>
                        <th>Tình trạng:</th>
                        <th><input class="form-control" type="text" id="editth" disabled name="tinhtrang" value="<?php echo $history['tinhtrang'];?>"></th>
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
        <div class="text-center mb-5">
            <h1 class="title">CHI TIẾT ĐƠN HÀNG</h1>
        </div>
        <table class="table .table-striped">
            <thead>
                <tr>
                    <th scope="col" class="ma">Mã SP</th>
                    <th scope="col" class="hinh">Hình</th>
                    <th scope="col" class="ten">Tên sản phẩm</th>
                    <th scope="col" class="gia">Giá</th>
                    <th scope="col" class="sl">Số lượng</th>
                    <th scope="col" class="thanhtien">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
            <?php $tong=0; ?>
                <?php foreach($details as $i=>$product):?>
                <tr>
                    <th scope="row"><?php echo  $product['masp'] ?></th>
                    <td><img src=".<?php echo $product['hinh']?>" alt=""></td>
                    <td><?php echo $product['tensp']?></td>
                    <td><?php echo  number_format($product['gia'],0,",",".")." VND"?> </td>
                    <td>
                        <?php echo  $product['soluong'] ?>
                    </td>
                    <td><?php echo number_format($product['thanhtien'],0,",",".")." VND"?></td>
                </tr>
                <?php $tong+=$product['thanhtien']; ?>
                <?php endforeach; ?>
                <tr class="tongtientitle">
                    <th scope="col" colspan="2">Mã khuyến mãi:</th>
                    <th scope="col" class="tongtien"><?php
                    echo $history['makm']
                     ?>
                     </th>
                     <th scope="col" colspan="2">Tiền giảm:</th>
                     <th scope="col" class="tongtien"><?php
                     if(!empty($history['makm'])){
                        $km = SaleDAO::findSale($history['makm'],$conn);
                        $tienGiam =$tong * $km['giatrigiam']/100;
                        echo number_format($tienGiam,0,",",".")." VND";
                     }
                     ?>
                     </th>
                </tr>
                <tr class="tongtientitle">
                    <th scope="col" colspan="5">Tổng tiền:</th>
                    <th scope="col" class="tongtien"><?php
                     echo number_format($history['tongtien'],0,",",".")." VND"?>
                     </th>
                </tr>
        </table>

    </div>
</section>
<?php include './music.php' ?>
<?php include "./adminfooter.php" ?>