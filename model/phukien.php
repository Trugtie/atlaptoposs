<?php
include  dirname(__DIR__).'/model/sanpham.php';
class PhuKien extends SanPham
{
    private $maLoaiPk;
    public function __construct($maSp, $tenSp, $moTa, $soLuong, $hinh, $gia, $loaiSp, $tinhTrang, $maHang, $maLoaiPk)
    {
        parent::__construct($maSp, $tenSp, $moTa, $soLuong, $hinh, $gia, $loaiSp, $tinhTrang, $maHang);
        $this->maLoaiPk = $maLoaiPk;
    }


    public function getMaLoaiPk()
    {
        return $this->maLoaiPk;
    }


    public function setMaLoaiPk($maLoaiPk)
    {
        $this->maLoaiPk = $maLoaiPk;
    }
}
