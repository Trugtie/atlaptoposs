<?php
session_start();
if(!isset($_SESSION["admin"])){
    header('Location: ./view/loginadmin.php');
}
else{
    header('Location: ./view/admin.php');
}
?>