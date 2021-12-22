<?php
include "../../controller/autoload.php";
include "../../dao/ProductDAO.php";
$hangs = ProductDAO::getAllHang($conn);
$laptop = ProductDAO::getLaptop($_GET["masp"],$conn);
?>

<?php include "./adminheader.php" ?>
<?php
if(!empty($_SESSION['error'])){
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
            <h1 class="title">UPDATE LAPTOP</h1>
        </div>
        <div class="table .table-striped">
            <div class="col-md-8 border-right">
                <form action="../controller/productController.php" method="POST" enctype="multipart/form-data">
                    <div class="row1">
                        <div class="col-sm-9 left-row">
                            <label style="font-size:20px;">Hình</label>
                            <div class="pic" style="width: 290px; height: 237px; border: 1px solid;"><img name="hinh" id="hinh" style="min-width: 290px; max-height: 237px;" src="<?php echo "./".$laptop['hinh'] ?>" alt> </div>
                            <input style="margin-top: 10px; font-size:16px" name="hinh" type="file" id="myFile" name="filename">
                            <br>
                            <label style="font-size:20px;margin-top: 7px">Hãng</label><br>
                            <select name="mahang" style="font-size:16px; width: 220px" class="form-select" aria-label="Default select example">
                                <?php foreach ($hangs as $hang) : ?>
                                    <option value="<?php echo $hang['mahang'] ?>"
                                    <?php if($laptop['mahang'] == $hang['mahang'])
                                            echo "selected";
                                    ?>
                                    ><?php echo $hang['tenhang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label style="margin-top: 7px; font-size: 20px">Trọng lượng</label><br>
                            <input type="text" name="trongluong" class="inputSp" name="trongluong" value ="<?php echo $laptop['trongluong'] ?>"><br>
                            <label style="font-size:20px;margin-top: 7px">Màn hình</label><br>
                            <input type="text" class="inputSp" name="manhinh" value ="<?php echo $laptop['manhinh'] ?>"><br>
                            <label style="font-size:20px;margin-top: 7px">Ổ cứng</label><br>
                            <input type="text" class="inputSp" name="ocung" value ="<?php echo $laptop['ocung'] ?>"><br>
                            <label style="font-size:20px;margin-top: 7px">CPU</label><br>
                            <input type="text" class="inputSp" name="cpu" value ="<?php echo $laptop['cpu'] ?>"><br>
                            <label style="font-size:20px;margin-top: 15px">RAM</label><br>
                            <input type="text" class="inputSp" name="ram" value ="<?php echo $laptop['ram'] ?>"><br>
                        </div>
                        <div class="col-sm-9 right-row" style="float:left">
                            <label style="font-size:20px;margin-top: 15px;margin-bottom: 7px">Mã sản phẩm</label>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 200px; float:right" name="masp" value ="<?php echo $laptop['masp'] ?>" readonly><br>
                            <label style="font-size:20px;margin-top: 15px">Loại sản phẩm</label>
                            <select name="loaisp" id="" style="margin-top: 10px; font-size:20px; width: 200px; float:right">
                                <option value="laptop">Laptop</option>
                            </select>

                            <br>
                            <label style="font-size:20px;margin-top: 15px">Tên sản phẩm</label><br>
                            <input type="text" style="margin-top: 10px; font-size:20px; width: 345px" name="tensp" value ="<?php echo $laptop['tensp'] ?>"><br>
                            <label style="font-size:20px;margin-top: 15px">Mô tả</label><br>
                            <textarea style="margin-top: 10px; font-size:20px; width: 345px; height:130px" name="mota"><?php echo $laptop['mota']?>"</textarea><br>
                            <div class="subsub0" style="margin-bottom:-10px">
                                <div class="subsub1">
                                    <label style="font-size:20px;margin-top: 7px">Số lượng</label><br>
                                    <input type="text" style="margin-top: 10px; font-size:20px; width: 125px" name="soluong" value ="<?php echo $laptop['soluong'] ?>">
                                </div>
                                <div class="subsub2">
                                    <label style="font-size:20px;margin-top: 7px">Giá</label><br>
                                    <input type="text" style="margin-top: 10px; font-size:20px; width: 200px" name="gia" value ="<?php echo $laptop['gia'] ?>">
                                </div>
                            </div>
                            <label style="margin-top: -25px; font-size: 20px">Màu</label><br>
                            <input type="text" class="inputSp" name="mausac" value ="<?php echo $laptop['mausac'] ?>"><br>
                            <label style="font-size:20px;margin-top: 7px">Loại máy</label><br>
                            <select name="maloaimay" id="" class="inputSp">
                                <option value="1"
                                <?php if($laptop['maloaimay']=="1") echo "selected"; ?>
                                >Học tập - Văn phòng</option>
                                <option value="2"
                                <?php if($laptop['maloaimay']=="2") echo "selected"; ?>
                                >Đồ họa - Gaming</option>
                                <option value="3"
                                <?php if($laptop['maloaimay']=="3") echo "selected"; ?>
                                >Mỏng nhẹ cao cấp</option>
                            </select>

                            <br>
                            <label style="font-size:20px;margin-top: 10px">VGA</label><br>
                            <input type="text" class="inputSp" name="vga" value ="<?php echo $laptop['vga'] ?>"><br>
                            <label style="font-size:20px;margin-top: 15px">PIN</label><br>
                            <input type="text" class="inputSp" name="pin" value ="<?php echo $laptop['pin'] ?>"><br>

                        </div>

                    </div>
                    <div class="btn-add">
                        <button id="btn-add" type="submit" name="action" value="updateLaptop">UPDATE</button>
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