<?php
include "../../controller/autoload.php";
include '../../dao/OrderDAO.php';
include '../../dao/ProductDAO.php';
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "xoa":
            $madon = $_GET['madon'];
            OrderDAO::deleteOrder($madon, $conn);
            header("Location: ../view/quanlydonhang.php");
            break;
        case "duyet":
            session_start();
            $madon = $_GET['madon'];
            $maad=$_SESSION['admin']->get_maad();
            $details = OrderDAO::getDetailsOrder($madon, $conn);
            OrderDAO::adminBrowseOrder($madon,$maad, $conn);
            OrderDAO::browseOrder($madon, $conn);
            foreach ($details as $detail) {
                $product = ProductDAO::getProduct($detail['masp'], $conn);
                $soLuongMoi = $product['soluong'] - $detail['soluong'];
                if ($soLuongMoi == 0) {
                    ProductDAO::updateSoLuongSP($detail['masp'], $soLuongMoi, "Hết hàng", $conn);
                    if ($detail['loaisp'] == "laptop")
                        ProductDAO::updateSoLuongLaptop($detail['masp'], $soLuongMoi, "Hết hàng", $conn);
                    else
                        ProductDAO::updateSoLuongPhukien($detail['masp'], $soLuongMoi, "Hết hàng", $conn);
                } else {
                    ProductDAO::updateSoLuongSP($detail['masp'], $soLuongMoi, "Còn hàng", $conn);
                    if ($detail['loaisp'] == "laptop")
                        ProductDAO::updateSoLuongLaptop($detail['masp'], $soLuongMoi, "Còn hàng", $conn);
                    else
                        ProductDAO::updateSoLuongPhukien($detail['masp'], $soLuongMoi, "Còn hàng", $conn);
                }
            }
            header("Location: ../view/quanlydonhang.php");
            break;
    }
}
