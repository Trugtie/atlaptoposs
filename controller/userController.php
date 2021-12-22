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
        case "sendmail":
            $error = "";
            $email = $_POST["email"];
            $error = validate::validateEmail($email);
            if (!empty($error)) {
                session_start();
                $_SESSION["error"] = $error;
                header("Location: ../view/resetpass.php");
            } else {
                $user = UserDAO::getUserWithEmail($email, $conn);
                if ($user == false) {
                    session_start();
                    $_SESSION["error"] = "Email này chưa được đăng ký";
                    header("Location: ../view/resetpass.php");
                } else {
                    $to      = $email;
                    $subject = 'ATLAPTOP: Reset password!';
                    $code = randomString(6);
                    $message = $code;
                    sendmail($subject, $message, $email);
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["code"] = $code;
                    header("Location: ../view/resetpass.php");
                }
            }
            break;
        case "resetpass":
            session_start();
            $err = "";
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPass = $_POST["passwordConfirm"];
            $code = $_POST["code"];
            if ($password != $confirmPass) {
                $err = "Mật khẩu không giống nhau lấy mã mới và nhập lại!";
                $_SESSION["error"] = $err;
                header("Location: ../view/resetpass.php");
            } else if ($code != $_SESSION["code"]) {
                $err = "Code không đúng lấy mã mới và nhập lại!";
                $_SESSION["error"] = $err;
                header("Location: ../view/resetpass.php");
            } else {
                unset($_SESSION["error"]);
                unset($_SESSION["email"]);
                $_SESSION["notify"] = "Reset pass thành công !";
                UserDAO::resetpass($email, sha1($password), $conn);
                header("Location: ../view/login.php");
            }
            break;
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
