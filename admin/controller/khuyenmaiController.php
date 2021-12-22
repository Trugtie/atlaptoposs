<?php
include "../../controller/autoload.php";
include "../../dao/KhuyenmaiDAO.php";
include "../../util/validate.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $action = $_GET['action'];
    switch ($action) {
        case "delete":
            $ma = $_GET['makm'];
            $check = KhuyenmaiDAO::checkKhuyenMaiDonHang($ma,$conn);
            if($check == true){
                session_start();
                $_SESSION["error"] = "Khuyến mãi này đang được sử dụng ở một số đơn hàng không thể xóa!";
                header("Location: ../view/quanlykhuyenmai.php");
            }
            else{
                KhuyenmaiDAO::deleteKhuyenmai($ma, $conn);
                $oldKhuyenmai =  KhuyenmaiDAO::getKhuyenMai($ma, $conn);
                unlink(dirname(__DIR__) . '/view' . $oldKhuyenmai['hinh']);
                header("Location: ../view/quanlyKhuyenmai.php");
            }
            break;
    }
} else {
    $action = $_POST['action'];
    switch ($action) {
        case "insertKhuyenmai":
            $hinh = $_FILES["hinh"];
            $tenkm = $_POST['tenkm'];
            $makm = $_POST['makm'];
            $mota = $_POST['mota'];
            $ngaybd = $_POST['ngaybd'];
            $giatrigiam = $_POST['giatrigiam'];
            $ngaykt = $_POST['ngaykt'];

            $error = validate::validateKhuyenmai($hinh, $tenkm, $mota, $giatrigiam, $ngaybd, $ngaykt);
            if (!empty($error)) {
                session_start();
                $_SESSION["error"] = $error;
                header("Location: ../view/editkhuyenmai.php?makm=$makm");
            } else {
                $temp = $hinh["tmp_name"];
                $name = $hinh["name"];
                if (!is_dir(dirname(__DIR__) . '/view/images/')) {
                    mkdir(dirname(__DIR__) . '/view/images/');
                }
                move_uploaded_file($temp, dirname(__DIR__) . '/view/images/' . $name);
                $imagePath = '/images/' . $name;
                $khuyenmai = new KhuyenMai($makm, $tenkm, $mota, $giatrigiam, $ngaybd, $ngaykt, $imagePath);
                session_start();
                $maad=$_SESSION['admin']->get_maad();
                KhuyenMaiDAO::insertKhuyenmai($khuyenmai, $conn);
                $makm =  KhuyenMaiDAO::getNewEvent($conn);
                KhuyenMaiDAO::adminCreateEvent($makm['makm'],$maad,$conn);
                header("Location: ../view/quanlykhuyenmai.php");
            }

            break;
        case "updateKhuyenmai":
            $hinh = $_FILES["hinh"];
            $tenkm = $_POST['tenkm'];
            $makm = $_POST['makm'];
            $mota = $_POST['mota'];
            $ngaybd = $_POST['ngaybd'];
            $giatrigiam = $_POST['giatrigiam'];
            $ngaykt = $_POST['ngaykt'];

            if (!empty($hinh['name']))
                $error = validate::validateKhuyenmai($hinh, $tenkm, $mota, $giatrigiam, $ngaybd, $ngaykt);
            else
                $error = validate::validateKhuyenmaiWithoutImage($tenkm, $mota, $giatrigiam, $ngaybd, $ngaykt);

            if (!empty($error)) {
                session_start();
                $_SESSION["error"] = $error;
                header("Location: ../view/editkhuyenmai.php?makm=$makm");
            } else {
                if (!empty($hinh['name'])) {
                    $temp = $hinh["tmp_name"];
                    $name = $hinh["name"];
                    $oldKhuyenmai =  KhuyenMaiDAO::getKhuyenMai($makm, $conn);
                    unlink(dirname(__DIR__) . '/view' . $oldKhuyenmai['hinh']);
                    move_uploaded_file($temp, dirname(__DIR__) . '/view/images/' . $name);
                    $imagePath = '/images/' . $name;
                    $khuyenmai = new KhuyenMai($makm, $tenkm, $mota, $giatrigiam, $ngaybd, $ngaykt, $imagePath);
                    KhuyenMaiDAO::updateKhuyenmai($khuyenmai, $makm, $conn);
                    header("Location: ../view/quanlykhuyenmai.php");
                } else {
                    $khuyenmai = new KhuyenMai($makm, $tenkm, $mota, $giatrigiam, $ngaybd, $ngaykt, $imagePath);
                    KhuyenMaiDAO::updatKhuyenmaiWithoutImage($khuyenmai, $makm, $conn);
                    header("Location: ../view/quanlykhuyenmai.php");
                }
            }
            break;
    }
}
