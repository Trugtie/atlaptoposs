<?php
include "../../controller/autoload.php";
include "../../dao/UserDao.php";

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     $action = $_GET['action'];
//     switch ($action) {
//         case "delete":
//             $ma = $_GET['makh'];
//             $check = UserDao::checkKhachHangDonHang($ma,$conn);
//             if($check==true){
//                 session_start();
//                 $_SESSION["error"] = "Khách hàng đang có đơn hàng không thể xóa!";
//                 header("Location: ../view/quanlykhachhang.php");
//             }
//             else{
//                 UserDao::deleteUser($ma,$conn);
//                 header("Location: ../view/quanlykhachhang.php");
//             }
//             break;
//     }
// } else {
//     $action = $_POST['action'];
//     switch ($action) {
        
//         case "update":
//             $ten = $_POST['ten'];
//             $ho = $_POST['ho'];
//             $ma = $_POST['ma'];
//             $sdt = $_POST['sdt'];
//             $diachi = $_POST['diachi'];
//             UserDAO::updateUser($ma, $ho, $ten, $diachi, $sdt, $conn);
//             header("Location: ../view/quanlykhachhang.php");
//             break;
//     }
// }