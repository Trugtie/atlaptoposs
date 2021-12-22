<?php
include "../../controller/autoload.php";
include "../../dao/AdminDAO.php";
include "../../util/validate.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $action = $_GET['action'];
    switch ($action) {
        case "delete":
            $ma = $_GET['maad'];
            AdminDAO::deleteAdmin($ma,$conn);
            header("Location: ../view/quanlynhanvien.php");
            break;
    }
} else {
    $action = $_POST['action'];
    switch ($action) {
        case "insertAdmin":
            $ten = $_POST['ten'];
            $ho = $_POST['ho'];
            $ma = $_POST['ma'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $error = validate::validateAdmin($email, $username, $password);
            if (!empty($error)) {
                session_start();
                $_SESSION["error"] = $error;
                header("Location: ../view/quanlynhanvien.php");
            } else {                
                $admin = new Admin($ma, $email, $username, $password, $ho, $ten, $sdt, $diachi);
                AdminDAO::insertAdmin($admin, $conn);
                header("Location: ../view/quanlynhanvien.php");
            }
            break;
        case "update":
            $ten = $_POST['ten'];
            $ho = $_POST['ho'];
            $ma = $_POST['ma'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];  
            $admin = new Admin($ma, $email, $username, $password, $ho, $ten, $sdt, $diachi);
            AdminDAO::updateAdmin($admin, $ma, $conn);
            header("Location: ../view/quanlynhanvien.php");
            break;
    }
}