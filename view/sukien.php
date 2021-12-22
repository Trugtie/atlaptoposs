<?php include "./header.php" ?>
<?php include "../dao/KhuyenMaiDAO.php" ?>
<?php
$events = KhuyenMaiDAO::getAllKhuyenMai($conn);
?>
<section>
    <div class="container">
        <h1 class="cateHeader text-center event__header animate-top" id="categories__work">SỰ KIỆN</h1>
        <?php foreach ($events as $event):?>
        <div class="event d-flex">
            <div class="event__img">
                <img src=".<?php echo $event['hinh'] ?>" alt="">
            </div>
            <div class="event__content flex-grow-1 d-flex flex-column justify-content-between">
                <h2 class="content__header2"><?php echo strtoupper($event['tenkm']) ?></h2>
                <p class="content__description"><?php echo $event['mota'] ?></p>
                <p class="content__sale">Giảm giá lên tới <?php echo $event['giatrigiam'] ?>%  <i class="fa-solid fa-piggy-bank"></i> </p>
                <div class="content__extention d-flex justify-content-between">
                    <div class="extention__time"><?php echo $event['ngaybd'] ?> - <?php echo $event['ngaykt'] ?> </div>
                    <div class="extention__link"><a href="./detailsukien.php?makm=<?php echo $event['makm'] ?>">Xem chi tiết</a></div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>
<?php include "./footer.php" ?>