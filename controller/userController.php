<?php
include "./autoload.php";
include "../dao/UserDAO.php";
include "../util/validate.php";
include "../util/function.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $action = $_GET['action'];
    switch ($action) {
        case "logout":
            session_start();
            if (isset($_SESSION)) {
                session_unset();
                session_destroy();
                header("Location: ../index.php");
            }
            break;
    }
} else {
    $action = $_POST['action'];
    switch ($action) {
        case "login":
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            $error = "";
            $userDB = UserDAO::getUser($username, $password, $conn);
            if ($userDB == false) {
                session_start();
                $error = "Sai tài khoản hoặc mật khẩu";
                $_SESSION["error"] = $error;
                header("Location: ../view/login.php");
            } else {
                session_start();
                $_SESSION["error"] = "";
                $ma = $userDB['makh'];
                $ho = $userDB['ho'];
                $ten = $userDB['ten'];
                $diachi = $userDB['diachi'];
                $sdt = $userDB['sdt'];
                $email = $userDB['email'];
                $username = $userDB['username'];
                $password = $userDB['password'];
                $user = new KhachHang($ma, $email, $username, $password, $ho, $ten, $sdt, $diachi);
                $_SESSION["user"] = $user;
                header("Location: ../index.php");
            }

            break;
        case "register":
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            UserDAO::insertUser($email, $username, $password, $conn);
            header("Location: ../index.php");
            break;
        //
        case "update":
            $ten = $_POST['ten'];
            $ho = $_POST['ho'];
            $ma = $_POST['ma'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            UserDAO::updateUser($ma, $ho, $ten, $diachi, $sdt, $conn);
            session_start();
            $_SESSION['user']->set_ten($ten);
            $_SESSION['user']->set_ho($ho);
            $_SESSION['user']->set_sdt($sdt);
            $_SESSION['user']->set_diachi($diachi);
            $_SESSION['notify'] = "Cập nhật thành công !";
            header("Location: ../view/accountinformation.php");
            break;
    }
}
