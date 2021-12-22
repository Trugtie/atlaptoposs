<?php
include "../controller/autoload.php";
include '../dao/ProductDAO.php';
session_start();
//Cong tru so luong
if(isset($_GET['action']))
{
    $vitri = $_GET['vitri'];
    switch ($_GET['action']){
        case "plus":
            $_SESSION['cart'][$vitri]->setSoluong($_SESSION['cart'][$vitri]->getSoluong()+1);
            header("Location: ../view/giohang.php");
            break;
        case "minus":
            $_SESSION['cart'][$vitri]->setSoluong($_SESSION['cart'][$vitri]->getSoluong()-1);
            if($_SESSION['cart'][$vitri]->getSoluong()==0)
            unset($_SESSION['cart'][$vitri]);
            header("Location: ../view/giohang.php");
            break;
    }
}
else //Xoa gio hang
if(isset($_GET['vitri'])){
    $vitri = $_GET['vitri'];
    unset($_SESSION['cart'][$vitri]);
    header('Location: ../view/giohang.php');
}

//Them gio hang
if (isset($_SESSION['user'])) {
    $masp = $_POST['masp'];
    $product = ProductDAO::getProduct($masp, $conn);
    $productObj = new SanPham($product['masp'], $product['tensp'], "", 1, $product['hinh'], $product['gia'], "", "", "");
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
        array_push($_SESSION['cart'], $productObj);
    } else {
        $flag = 0;
        foreach ($_SESSION['cart'] as $product) {
            if ($masp == $product->getMaSp()) {
                $soluong = $product->getSoluong() + 1;
                $product->setSoluong($soluong);
                $flag=1;
                break;
            }
        }
        if ($flag == 0) {
            array_push($_SESSION['cart'], $productObj);
        }
    }
    $_SESSION['notify']="Đã thêm một sản phẩm vào giỏ hàng";
    header("Location: ../view/laptop.php");
} else {
    header("Location: ../view/login.php");
}
