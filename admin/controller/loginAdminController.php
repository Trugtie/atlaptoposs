<?php
include "../../controller/autoload.php";
include "../../dao/AdminDAO.php";

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     $action = $_GET['action'];
//     switch ($action) {
//         case "logout":
//             session_start();
//             if (isset($_SESSION)) {
//                 session_unset();
//                 session_destroy();
//                 header("Location: ../index.php");
//             }
//             break;
//     }
// } else {
//     $action = $_POST['action'];
//     switch ($action) {
//         case "login":
            $username = $_POST['username'];
            $password = $_POST['password'];
            // var_dump($_POST);
            // exit();
            $error = "";
            $adminDB = AdminDAO::getAdmin($username, sha1($password), $conn);
            if ($adminDB == false) {
                session_start();
                $error = "Sai tài khoản hoặc mật khẩu";
                $_SESSION["error"] = $error;
               
                header("Location: ../view/loginadmin.php");
            } else {
                session_start();
                $_SESSION["error"] = "";
                $ma = $adminDB['maad'];
                $ho = $adminDB['ho'];
                $ten = $adminDB['ten'];
                $diachi = $adminDB['diachi'];
                $sdt = $adminDB['sdt'];
                $email = $adminDB['email'];
                $username = $adminDB['username'];
                $password = $adminDB['password'];
                $user = new Admin($ma, $email, $username, $password, $ho, $ten, $sdt, $diachi);
                $_SESSION["admin"] = $user;
                header("Location: ../view/admin.php");
            }
    // }
// }
