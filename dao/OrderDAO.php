<?php
include dirname(__DIR__) . "/util/connectDB.php";
class OrderDAO
{
    public static function insertOrder($nguoinhan, $sdt, $diachigiao, $ptthanhtoan, $makh, $makm, $tongtien, $conn)
    {
        $statement = $conn->prepare("insert into donhang(nguoinhan,sdt,diachigiao,ptthanhtoan,tongtien,makh,makm)
        values(:nguoinhan,:sdt,:diachigiao,:ptthanhtoan,:tongtien,:makh,:makm)");
        $statement->bindValue(':nguoinhan', $nguoinhan);
        $statement->bindValue(':sdt', $sdt);
        $statement->bindValue(':diachigiao', $diachigiao);
        $statement->bindValue(':ptthanhtoan', $ptthanhtoan);
        $statement->bindValue(':tongtien', $tongtien);
        $statement->bindValue(':makh', $makh);
        $statement->bindValue(':makm', $makm);
        $statement->execute();
    }

    public static function insertOrderWithoutSale($nguoinhan, $sdt, $diachigiao, $ptthanhtoan, $makh, $tongtien, $conn)
    {
        $statement = $conn->prepare("insert into donhang(nguoinhan,sdt,diachigiao,ptthanhtoan,tongtien,makh)
        values(:nguoinhan,:sdt,:diachigiao,:ptthanhtoan,:tongtien,:makh)");
        $statement->bindValue(':nguoinhan', $nguoinhan);
        $statement->bindValue(':sdt', $sdt);
        $statement->bindValue(':diachigiao', $diachigiao);
        $statement->bindValue(':ptthanhtoan', $ptthanhtoan);
        $statement->bindValue(':tongtien', $tongtien);
        $statement->bindValue(':makh', $makh);
        $statement->execute();
    }

    public static function insertDetailOrder($masp, $madon, $soluong, $thanhtien, $conn)
    {
        $statement = $conn->prepare("insert into donhang_sanpham(masp, madon, soluong, thanhtien)
        values(:masp, :madon, :soluong, :thanhtien)");
        $statement->bindValue(':masp', $masp);
        $statement->bindValue(':madon', $madon);
        $statement->bindValue(':soluong', $soluong);
        $statement->bindValue(':thanhtien', $thanhtien);
        $statement->execute();
    }

    public static function getNewOrder($conn)
    {
        $statement = $conn->prepare("select madon from donhang order by madon desc limit 1");
        $statement->execute();
        $madon = $statement->fetch(PDO::FETCH_ASSOC);
        return $madon;
    }

    public static function getOrder($madon,$conn){
        $statement = $conn->prepare("select madon,DATE_FORMAT(ngaytao, '%d/%m/%Y') as ngaytao,nguoinhan,tinhtrang,sdt,diachigiao,ptthanhtoan,tongtien,makh,makm from donhang where madon=$madon");
        $statement->execute();
        $order = $statement->fetch(PDO::FETCH_ASSOC);
        return $order;
    }

    public static function checkExistDonHangSanPham($masp,$conn){
        $statement = $conn->prepare("select masp from donhang_sanpham where masp=$masp");
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($row)) return true;
        return false;
    }

    public static function getDetailsOrder($madon,$conn){
        $statement = $conn->prepare("select d.masp, sp.hinh, sp.tensp, sp.gia, d.soluong, d.thanhtien,sp.loaisp from donhang_sanpham as d join sanpham as sp on d.masp=sp.masp where d.madon=$madon");
        $statement->execute();
        $detail = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $detail;
    }

    public static function getOrders($conn){
        $statement = $conn->prepare("select madon,DATE_FORMAT(ngaytao, '%d/%m/%Y') as ngaytao,nguoinhan,tinhtrang,sdt,diachigiao,ptthanhtoan,tongtien,makh,makm from donhang");
        $statement->execute();
        $orders = $statement->fetchALL(PDO::FETCH_ASSOC);
        return $orders;
    }

    public static function deleteOrder($madon,$conn){
        $statement = $conn->prepare("delete from donhang where madon=$madon");
        $statement->execute();
    }

    public static function browseOrder($madon,$conn){
        $statement = $conn->prepare("update donhang set tinhtrang='Đã giao' where madon=$madon");
        $statement->execute();
    }

    public static function adminBrowseOrder($madon,$maad,$conn){
        $statement = $conn->prepare("insert into ad_donhang(maad,madon) values(:maad,:madon)");
        $statement->bindValue(":maad",$maad);
        $statement->bindValue(":madon",$madon);
        $statement->execute();
    }
}
