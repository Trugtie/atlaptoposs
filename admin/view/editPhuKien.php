<?php
include "../../controller/autoload.php";
include "../../dao/AccessoryDAO.php";
$hangs = AccessoryDAO::getAllHang($conn);
$phukien = AccessoryDAO::getPhuKien($_GET["masp"], $conn);
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
            <h1 class="title">UPDATE PHỤ KIỆN</h1>
        </div>
        <div class="table .table-striped">
            <div class="col-md-8 border-right">
                <form action="../controller/AccessoryController.php" method="POST" enctype="multipart/form-data">
                    <div class="row1">
                        <div class="col-sm-9 left-row">
                            <label style="font-size:20px;">Hình</label>
                            <div class="pic" style="width: 290px; height: 237px; border: 1px solid;"><img name="hinh" id="hinh" style="min-width: 290px; max-height: 237px;" src="<?php echo "./".$phukien['hinh'] ?>" alt> </div>
                            <input style="margin-top: 10px; font-size:16px" name="hinh" type="file" id="myFile" name="filename">
                            <br>
                            <label style="font-size:20px;margin-top: 7px">Hãng</label><br>
                            <select name="mahang" style="font-size:16px; width: 220px" class="form-select" aria-label="Default select example">
                            <?php foreach ($hangs as $hang) : ?>
                                    <option value="<?php echo $hang['mahang'] ?>"
                                    <?php if($phukien['mahang'] == $hang['mahang'])
                                            echo "selected";
                                    ?>
                                    ><?php echo $hang['tenhang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label style="font-size:20px;margin-top: 7px">Loại phụ kiện</label><br>
                            <select name="maloaipk" id="" class="inputSp">
                                <option value="1" <?php if ($phukien['maloaipk'] == "1") echo "selected"; ?>>Chuột</option>
                                <option value="2" <?php if ($phukien['maloaipk'] == "2") echo "selected"; ?>>Tai nghe</option>
                                <option value="3" <?php if ($phukien['maloaipk'] == "3") echo "selected"; ?>>Miếng lót chuột</option>
                                <option value="4" <?php if ($phukien['maloaipk'] == "4") echo "selected"; ?>>Dây sạc</option>
                                <option value="5" <?php if ($phukien['maloaipk'] == "5") echo "selected"; ?>>Balo</option>
                            </select>
                        </div>
                        <div class="col-sm-9 right-row" style="float:left">
                            <label hidden style="font-size:20px;margin-top: 15px;margin-bottom: 7px">Mã sản phẩm</label>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 200px; float:right" name="masp" value="<?php echo $phukien['masp'] ?>" hidden><br>
                            <label style="font-size:20px;margin-top: 15px">Loại sản phẩm</label>
                            <select name="loaisp" id="" style="margin-top: 10px; font-size:20px; width: 200px; float:right">
                                <option value="phukien">Phụ kiện</option>
                            </select>
                            <label style="font-size:20px;margin-top: 15px">Tên sản phẩm</label><br>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 345px" name="tensp" value="<?php echo $phukien['tensp'] ?>"><br>
                            <label style="font-size:20px;margin-top: 15px">Mô tả</label><br>
                            <textarea style="margin-top: 10px; font-size:20px; width: 345px; height:135px" name="mota"> <?php echo $phukien['mota'] ?></textarea><br>
                            <div class="subsub0" style="margin-bottom:-10px">
                                <div class="subsub1">
                                    <label style="font-size:20px;margin-top: 7px">Số lượng</label><br>
                                    <input type="text" style="margin-top: 10px; font-size:20px; width: 125px" name="soluong" value="<?php echo $phukien['soluong'] ?>">
                                </div>
                                <div class="subsub2">
                                    <label style="font-size:20px;margin-top: 7px">Giá</label><br>
                                    <input type="text" style="margin-top: 10px; font-size:20px; width: 200px" name="gia" value="<?php echo $phukien['gia'] ?>">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="btn-add">
                        <button id="btn-add" type="submit" name="action" value="updatePhukien" id="">UPDATE</button>
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