<?php
include "../../controller/autoload.php";
include "../../dao/KhuyenMaiDAO.php";
?>

<?php include "./adminheader.php" ?>

<?php
if (!empty($_SESSION['error'])) {
    $error = $_SESSION['error'];
    echo "
    <div class='modal' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Lỗi thêm sản phẩm</h5>
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
    unset($_SESSION["error"]);
}
?>

<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">THÊM KHUYẾN MÃI</h1>
        </div>
        <div class="table .table-striped">
            <div class="col-md-8 border-right">
                <form action="../controller/khuyenmaiController.php" method="POST" enctype="multipart/form-data">
                    <div class="row1">
                        <div class="col-sm-12" style="margin-left: 3rem;">
                            <label style="font-size:20px;">Hình</label>
                            <div class="pic" style="width: 290px; height: 237px; border: 1px solid;"><img name="hinh" id="hinh" style="min-width: 290px; max-height: 237px;" src="" alt> </div>
                            <input style="margin-top: 10px; font-size:16px" name="hinh" type="file" id="myFile" name="filename">
                            <br>
                            <label hidden style="font-size:20px;margin-top: 15px;margin-bottom: 7px">Mã đợt khuyến mãi</label>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 200px; float:right" name="makm" value="" hidden><br>
                            <label style="font-size:20px;margin-top: 15px">Tên đợt khuyến mãi</label><br>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 100%" name="tenkm" value=""><br>
                            <label style="font-size:20px;margin-top: 15px">Mô tả</label><br>
                            <textarea style="margin-top: 10px; font-size:20px; width: 100%; height:135px" name="mota"> </textarea><br>
                            <label style="font-size:20px;margin-top: 15px">Giá trị giảm</label><br>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 100%" name="giatrigiam" value=""><br>

                            <label style="font-size:20px;margin-top: 15px">Ngày bắt đầu</label><br>
                            <input type="date" style="margin-top: 10px; font-size:20px; width: 100%" name="ngaybd" value=""><br>

                            <label style="font-size:20px;margin-top: 15px">Ngày kết thúc</label><br>
                            <input type="date" style="margin-top: 10px; font-size:20px; width:100%" name="ngaykt" value=""><br>


                        </div>

                    </div>
                    <div class="btn-add">
                        <button id="btn-add" type="submit" name="action" value="insertKhuyenmai" id="">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="music">
    <iframe class="iframe" src="https://www.youtube.com/embed/pPtY0rm3HhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?php include "./adminfooter.php" ?>