<?php
include '../util/function.php';
include "../controller/autoload.php";
include '../dao/SaleDAO.php';
include '../dao/OrderDAO.php';
?>
<?php
session_start();
if(empty($_SESSION['cart'])){
    $_SESSION['error']="Giỏ hàng trống không thể thanh toán!";
    header("Location:../view/giohang.php");
}
else{
    if(isset($_POST['action'])){
        switch($_POST['action']){
            case "apdungkm":
                if(!empty($_POST['makm'])){
                    $makm = $_POST['makm'];
                    $km = SaleDAO::findSale($makm, $conn);
                    if($km==false){
                       $_SESSION['error']="Mã khuyến mãi không hợp lệ!";
                       header("Location:../view/thanhtoan.php");
                    }
                    else{
                        $thanhtien = $_POST['thanhtien'];
                        $giatrigiam = $km['giatrigiam']/100;
                        $tienkhuyenmai = $thanhtien * $giatrigiam;
                        $_SESSION['km']=$tienkhuyenmai;
                        $_SESSION['makm']=$makm;
                        header("Location:../view/thanhtoan.php");
                    }
                }
                else{
                    header("Location:../view/thanhtoan.php");
                }
                break;
            case "dathang":
                $nguoinhan = $_POST['nguoinhan'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $phuongthuc = $_POST['phuongthuc'];
                if(isset($_POST['makm']))
                $makm= $_POST['makm'];
                $tongtien = $_POST['thanhtien'];
                $makh = $_SESSION['user']->get_makh();
                if(!empty($makm))
                OrderDAO::insertOrder($nguoinhan,$sdt,$diachi,$phuongthuc,$makh,$makm,$tongtien,$conn);
                else
                OrderDAO::insertOrderWithoutSale($nguoinhan,$sdt,$diachi,$phuongthuc,$makh,$tongtien,$conn);
                $newOrder = OrderDAO::getNewOrder($conn);
                $madon=$newOrder['madon'];
                foreach($_SESSION['cart'] as $product){
                    $thanhtien = $product->getSoLuong() * $product->getGia();
                    OrderDAO::insertDetailOrder($product->getMaSp(),$madon,$product->getSoluong(),$thanhtien,$conn);
                }
                $_SESSION['notify']="Đã dặt hàng thành công!";

                $contentEmail = '';
                  // Thông tin Khách hàng
                  $contentEmail = '<p>
                  <b>Khách hàng:</b> '.$nguoinhan.'<br />
                  <b>Email:</b> '.$_SESSION['user']->get_email().'<br />
                  <b>Điện thoại:</b> '.$sdt.'<br />
                  <b>Địa chỉ:</b> '.$diachi.'
                  </p>';
                  // Danh sách Sản phẩm đã mua
                  $contentEmail .= ' <table border="1px" cellpadding="10px" cellspacing="1px"
                  width="100%">
                  <tr>
                  <td align="center" bgcolor="#3F3F3F" colspan="4"><font
                  color="white"><b>XÁC NHẬN HÓA ĐƠN THANH TOÁN</b></font></td>
                  </tr>
                  <tr id="invoice-bar">
                  <td width="45%"><b>Tên Sản phẩm</b></td>
                  <td width="20%"><b>Giá</b></td>
                  <td width="15%"><b>Số lượng</b></td>
                  <td width="20%"><b>Thành tiền</b></td>
                  </tr>';
                  foreach($_SESSION['cart'] as $product){
                  $contentEmail .= '<tr>
                  <td class="prd-name">'.$product->getTenSp().'</td>
                  <td class="prd-price"><font color="#C40000">'.$product->getGia().'
                  VNĐ</font></td>
                  <td class="prd-number">'.$product->getSoluong().'</td>
                  <td class="prd-total"><font color="#C40000">'.$product->getGia()*$product->getSoluong().'
                  VNĐ</font></td>
                  </tr>';
                  }
                  $contentEmail .= '<tr>
                  <td class="prd-name">Tổng giá trị hóa đơn là:</td>
                  <td colspan="2"></td>
                  <td class="prd-total"><b><font color="#C40000">'.$tongtien.'
                  VNĐ</font></b></td>
                  </tr>
                  </table>';
                  $contentEmail .= '<p align="justify">
                  <b>Quý khách đã đặt hàng thành công!</b><br />
                  • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần
                  Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br
                  />
                  • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước
                  khi giao hàng 24 tiếng.<br />
                  <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng
                  Tôi!</b>
                  </p>';
                sendmail("Bạn có 1 đơn hàng từ ATLAPTOP!",$contentEmail,$_SESSION['user']->get_email());
                
                unset($_SESSION['cart']);
                header("Location:../view/lichsumuahang.php");
                exit;
                break;
        }
    }
    header("Location:../view/thanhtoan.php");
}