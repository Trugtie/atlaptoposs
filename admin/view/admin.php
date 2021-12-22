<?php include "./adminheader.php" ?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">TỔNG QUAN</h1>
        </div>
        <div class="row count flex-grow-1">
            <div class="count__product col-4">
                <h2 class="count__title">SỐ LƯỢNG SẢN PHẨM</h2>
                <div class="soluong">
                    Đã bán: XXXXX
                </div>
                <div class="soluong">
                    Còn lại: XXXXX
                </div>
            </div>
            <div class="count__member col-4">
                <h2 class="count__title">SỐ LƯỢNG THÀNH VIÊN</h2>
                <div class="soluong">XXXXX</div>
            </div>
            <div class="count__order col-4">
                <h2 class="count__title">SL ĐƠN HÀNG CHƯA GIAO</h2>
                <div class="soluong">XXXXX</div>
            </div>
        </div>
        <div class="income row text-center mt-5">
            <h2 class="count__title">TỔNG DOANH THU</h2>
            <div class="soluong soluong--doanhthu">XXXXX VND</div>
        </div>
    </div>
</section>
<?php include './music.php'?>
<?php include "./adminfooter.php" ?>