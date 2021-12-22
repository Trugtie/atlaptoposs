<?php
include "../../controller/autoload.php";
include "../../dao/ProductDAO.php";
include "../../dao/OrderDAO.php";
include "../../dao/AccessoryDAO.php";
include "../../util/validate.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $action = $_GET['action'];
    switch ($action) {
        case "delete":
            $masp = $_GET['masp'];
            $check=OrderDAO::checkExistDonHangSanPham($masp,$conn);
            if($check == true){
                session_start();
                $_SESSION["error"] = "Sản phẩm còn tồn tại trong đơn hàng không thể xóa!";
                header("Location: ../view/quanlysanpham.php");
            }
            else{
                $oldProduct =  ProductDAO::getProduct($masp, $conn);
                unlink(dirname(__DIR__) . '/view' . $oldProduct['hinh']);
                if($oldProduct['loaisp']=="laptop")
                ProductDAO::deleteLaptop($masp, $conn);
                else
                ProductDAO::deletePhukien($masp, $conn);
                header("Location: ../view/quanlysanpham.php");
            }
            break;
        case "Laptop":
            $laptops =  ProductDAO::getAllLaptop($conn);
            echo json_encode($laptops);
            break;
        case "Phukien":
            $phukiens =  AccessoryDAO::getAllPhuKien($conn);
            echo json_encode($phukiens);
            break;
    }
} else {
    $action = $_POST['action'];
    switch ($action) {
        case "addLaptop":
            $hinh = $_FILES["hinh"];
            $masp = $_POST['masp'];
            $tensp = $_POST['tensp'];
            $mota = $_POST['mota'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $loaisp = $_POST['loaisp'];
            $tinhtrang = "Còn hàng";
            $trongluong = $_POST['trongluong'];
            $manhinh = $_POST['manhinh'];
            $ocung = $_POST['ocung'];
            $vga = $_POST['vga'];
            $ram = $_POST['ram'];
            $cpu = $_POST['cpu'];
            $pin = $_POST['pin'];
            $mausac = $_POST['mausac'];
            $mahang = $_POST['mahang'];
            $maloaimay = $_POST['maloaimay'];
            $error = validate::validateLaptop($hinh, $trongluong, $manhinh, $ocung, $cpu, $ram, $tensp, $mota, $soluong, $gia, $mausac, $vga, $pin);
            if (!empty($error)) {
                session_start();
                $_SESSION["error"] = $error;
                header("Location: ../view/addproduct.php");
            } else {
                $temp = $hinh["tmp_name"];
                $name = $hinh["name"];
                if (!is_dir(dirname(__DIR__) . '/view/images/')) {
                    mkdir(dirname(__DIR__) . '/view/images/');
                }
                move_uploaded_file($temp, dirname(__DIR__) . '/view/images/' . $name);
                $imagePath = '/images/' . $name;
                $laptop = new Laptop($masp, $tensp, $mota, $soluong, $imagePath, $gia, $loaisp, $tinhtrang, $mahang, $trongluong, $manhinh, $ocung, $vga, $ram, $cpu, $pin, $mausac, $maloaimay);
                ProductDAO::resetAI($conn);
                ProductDAO::insertLaptop($laptop, $conn);
                header("Location: ../view/quanlysanpham.php");
            }
            break;
        case "updateLaptop":
            $hinh = $_FILES["hinh"];
            $masp = $_POST['masp'];
            $tensp = $_POST['tensp'];
            $mota = $_POST['mota'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $loaisp = $_POST['loaisp'];
            $tinhtrang = "Còn hàng";
            $trongluong = $_POST['trongluong'];
            $manhinh = $_POST['manhinh'];
            $ocung = $_POST['ocung'];
            $vga = $_POST['vga'];
            $ram = $_POST['ram'];
            $cpu = $_POST['cpu'];
            $pin = $_POST['pin'];
            $mausac = $_POST['mausac'];
            $mahang = $_POST['mahang'];
            $maloaimay = $_POST['maloaimay'];

            if (!empty($hinh['name']))
                $error = validate::validateLaptop($hinh, $trongluong, $manhinh, $ocung, $cpu, $ram, $tensp, $mota, $soluong, $gia, $mausac, $vga, $pin);
            else
                $error = validate::validateLaptopWithoutImage($trongluong, $manhinh, $ocung, $cpu, $ram, $tensp, $mota, $soluong, $gia, $mausac, $vga, $pin);

            if (!empty($error)) {
                session_start();
                $_SESSION["error"] = $error;
                header("Location: ../view/editlaptop.php?masp=$masp");
            } else {
                if (!empty($hinh['name'])) {
                    $temp = $hinh["tmp_name"];
                    $name = $hinh["name"];
                    $oldLaptop =  ProductDAO::getLaptop($masp, $conn);
                    unlink(dirname(__DIR__) . '/view' . $oldLaptop['hinh']);
                    move_uploaded_file($temp, dirname(__DIR__) . '/view/images/' . $name);
                    $imagePath = '/images/' . $name;
                    $laptop = new Laptop($masp, $tensp, $mota, $soluong, $imagePath, $gia, $loaisp, $tinhtrang, $mahang, $trongluong, $manhinh, $ocung, $vga, $ram, $cpu, $pin, $mausac, $maloaimay);
                    ProductDAO::updateLaptop($laptop, $masp, $conn);
                    header("Location: ../view/quanlysanpham.php");
                } else {
                    $laptop = new Laptop($masp, $tensp, $mota, $soluong, $imagePath, $gia, $loaisp, $tinhtrang, $mahang, $trongluong, $manhinh, $ocung, $vga, $ram, $cpu, $pin, $mausac, $maloaimay);
                    ProductDAO::updateLaptopWithoutImage($laptop, $masp, $conn);
                    header("Location: ../view/quanlysanpham.php");
                }
            }
            break;
    }
}
