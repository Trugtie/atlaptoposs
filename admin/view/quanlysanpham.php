<?php
include "../../controller/autoload.php";
include "../../dao/ProductDAO.php";
include "../../dao/AccessoryDAO.php";
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
          <h5 class='modal-title'>Lỗi xóa</h5>
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
    unset($_SESSION['error']);
  }
?>
<?php include("./adminnav.php") ?>
<section>
    <div class="container d-flex flex-column justify-content-around">
        <div class="btnNav" id="btnNav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="text-center mb-5">
            <h1 class="title">QUẢN LÝ SẢN PHẨM</h1>
        </div>
        <div class="controller d-flex">
            <a class="btnThem" href="./addproduct.php">Thêm</a>
            <!-- <form id = "filterForm" action="../controller/productController.php" method="get"> -->
            <input type="text" id = "productHidden" hidden>
            <select name="action" id="filterCBO" class="cboSanPham" >
                <option value="Laptop">LAPTOP</option>
                <option value="Phukien">PHỤ KIỆN</option>
            </select>
            <!-- </form> -->
            <div class="search">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <table class="table .table-striped" id="showCase">
            <thead>
                <tr>
                    <th scope="col" class="ma">Mã SP</th>
                    <th scope="col" class="hinh">Hình</th>
                    <th scope="col" class="ten">Tên sản phẩm</th>
                    <th scope="col" class="gia">Giá</th>
                    <th scope="col" class="sl">Số lượng</th>
                    <th scope="col" class="tinhtrang">Tình trạng</th>
                    <th scope="col" class="hanhdong">Hành động</th>
                </tr>
            </thead>
            <tbody id="products">
                <!-- <?php foreach($laptops as $laptop) :?>
                <tr>
                    <th scope="row"><?php echo $laptop['masp']?></th>
                    <td><img src="<?php echo "./".$laptop["hinh"] ?>" alt=""></td>
                    <td><?php echo $laptop['tensp']?></td>
                    <td><?php echo  number_format($laptop['gia'],0,",",".")." VND"?></td>
                    <td><?php echo $laptop['soluong']?></td>
                    <td><?php echo $laptop['tinhtrang']?></td>
                    <td class="action d-flex justify-content-around align-items-center">
                        <a href="./editlaptop.php?masp=<?php echo $laptop['masp']?>" class="sua">Sửa</a>
                        <a href="../controller/productController.php?action=delete&masp=<?php echo $laptop['masp']?>" class="xoa">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php foreach($phukiens as $phukien) :?>
                    <tr>
                    <th scope="row"><?php echo $phukien['masp']?></th>
                    <td><img src="<?php echo "./".$phukien["hinh"] ?>" alt=""></td>
                    <td><?php echo $phukien['tensp']?></td>
                    <td><?php echo  number_format($phukien['gia'],0,",",".")." VND"?></td>
                    <td><?php echo $phukien['soluong']?></td>
                    <td><?php echo $phukien['tinhtrang']?></td>
                    <td class="action d-flex justify-content-around align-items-center">
                        <a href="./editPhuKien.php?masp=<?php echo $phukien['masp']?>" class="sua">Sửa</a>
                        <a href="../controller/AccessoryController.php?action=delete&masp=<?php echo $phukien['masp']?>" class="xoa">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?> -->
            </tbody>
        </table>
    </div>
</section>
<?php include './music.php'?>
<?php include "./adminfooter.php" ?>