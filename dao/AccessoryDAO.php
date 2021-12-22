<?php
include dirname(__DIR__)."/util/connectDB.php";

class AccessoryDAO{
    public static function getAllHang($conn){
        $statement = $conn->prepare("select * from hang");
        $statement->execute();
        $hang = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $hang;
    }

    public static function getAllLoaiPhuKien($conn){
        $statement = $conn->prepare("select * from loaiphukien");
        $statement->execute();
        $loaipk = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $loaipk;
    }

    public static function insertPhuKien($phukien,$conn){
        $statement = $conn->prepare("insert into phukien(tensp,mota,soluong,hinh,gia,loaisp,tinhtrang,mahang,maloaipk)
        values(:tensp,:mota,:soluong,:hinh,:gia,:loaisp,:tinhtrang,:mahang,:maloaipk)");
        $statement->bindValue(':tensp',$phukien->getTenSp());
        $statement->bindValue(':mota',$phukien->getMota());
        $statement->bindValue(':soluong',$phukien->getSoluong());
        $statement->bindValue(':hinh',$phukien->getHinh());
        $statement->bindValue(':gia',$phukien->getGia());
        $statement->bindValue(':loaisp',$phukien->getLoaisp());
        $statement->bindValue(':tinhtrang',$phukien->getTinhtrang());
        $statement->bindValue(':mahang',$phukien->getMahang());
        $statement->bindValue(':maloaipk',$phukien->getMaLoaiPk());
        $statement->execute();
    }

    public static function updatePhuKien($phukien,$masp,$conn){
        $statement = $conn->prepare("update phukien
        set tensp=:tensp,mota=:mota,soluong=:soluong,hinh=:hinh,gia=:gia,loaisp=:loaisp,tinhtrang=:tinhtrang,mahang=:mahang,maloaipk=:maloaipk where masp=:masp");
        $statement->bindValue(':tensp',$phukien->getTenSp());
        $statement->bindValue(':mota',$phukien->getMota());
        $statement->bindValue(':soluong',$phukien->getSoluong());
        $statement->bindValue(':hinh',$phukien->getHinh());
        $statement->bindValue(':gia',$phukien->getGia());
        $statement->bindValue(':loaisp',$phukien->getLoaisp());
        $statement->bindValue(':tinhtrang',$phukien->getTinhtrang());
        $statement->bindValue(':mahang',$phukien->getMahang());
        $statement->bindValue(':maloaipk',$phukien->getMaLoaiPk());
        $statement->bindValue(':masp',$masp);
        $statement->execute();
    }

    public static function updatePhuKienWithoutImage($phukien,$masp,$conn){
        $statement = $conn->prepare("update phukien
        set tensp=:tensp,mota=:mota,soluong=:soluong,gia=:gia,loaisp=:loaisp,tinhtrang=:tinhtrang,mahang=:mahang,maloaipk=:maloaipk where masp=:masp");
        $statement->bindValue(':tensp',$phukien->getTenSp());
        $statement->bindValue(':mota',$phukien->getMota());
        $statement->bindValue(':soluong',$phukien->getSoluong());
        $statement->bindValue(':gia',$phukien->getGia());
        $statement->bindValue(':loaisp',$phukien->getLoaisp());
        $statement->bindValue(':tinhtrang',$phukien->getTinhtrang());
        $statement->bindValue(':mahang',$phukien->getMahang());
        $statement->bindValue(':maloaipk',$phukien->getMaLoaiPk());
        $statement->bindValue(':masp',$masp);
        $statement->execute();
    }

    public static function getAllPhuKien($conn){
        $statement = $conn->prepare("select * from phukien");
        $statement->execute();
        $phukiens=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $phukiens;
    }

    public static function getAllPhuKienShowcase($conn){
        $statement = $conn->prepare("select pk.gia, pk.hinh, pk.loaisp, pk.masp, h.tenhang, pk.maloaipk, pk.masp, pk.mota, pk.soluong, pk.tensp, pk.tinhtrang from phukien as pk join hang as h on pk.mahang=h.mahang where tinhtrang='Còn hàng';");
        $statement->execute();
        $phukiens=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $phukiens;
    }

    public static function getPhuKien($masp,$conn){
        $statement=$conn->prepare("select * from phukien where masp=$masp");
        $statement->execute();
        $phukien=$statement->fetch(PDO::FETCH_ASSOC);
        return $phukien;
    }

    public static function getPhuKienDetail($masp,$conn){
        $statement=$conn->prepare("select pk.gia, pk.hinh, pk.loaisp, pk.masp, h.tenhang, pk.maloaipk, pk.masp, pk.mota, pk.soluong, pk.tensp, pk.tinhtrang from phukien as pk join hang as h on pk.mahang=h.mahang where masp=$masp");
        $statement->execute();
        $phukien=$statement->fetch(PDO::FETCH_ASSOC);
        return $phukien;
    }

    public static function deletePhuKien($masp,$conn){
        $statement=$conn->prepare("delete from phukien where masp=$masp");
        $statement->execute();
    }

    public static function resetAI($conn){
        $statement=$conn->prepare("select max(masp) as max from sanpham");
        $statement->execute();
        $maxID = $statement->fetch(PDO::FETCH_ASSOC);
        $max = $maxID['max']+1;
        $statement2=$conn->prepare("alter table phukien AUTO_INCREMENT=$max");
        $statement2->execute();
    }
}