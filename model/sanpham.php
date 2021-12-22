<?php
class SanPham{
    protected $maSp;
    protected $tenSp;
    protected $moTa;
    protected $soLuong;
    protected $hinh;
    protected $gia;
    protected $loaiSp;
    protected $tinhTrang;
    protected $maHang;

    public function __construct($maSp, $tenSp, $moTa, $soLuong, $hinh, $gia, $loaiSp, $tinhTrang, $maHang)
{
        $this->maSp =$maSp;
        $this->tenSp = $tenSp;
        $this->moTa = $moTa;
        $this->soLuong = $soLuong;
        $this->hinh = $hinh;
        $this->gia = $gia;
        $this->loaiSp = $loaiSp;
        $this->tinhTrang = $tinhTrang;
        $this->maHang = $maHang;
    }

    public function getMaSp(){
        return $this->maSp;
    }

    public function setMaSp($maSp){
        $this->masp =$maSp;
    }

    public function getTenSp(){
        return $this->tenSp;
    }

    public function setTenSp($tenSp){
        $this->tenSp = $tenSp;
    }

    public function getMota(){
        return $this->moTa;
    }

    public function setMota($moTa){
        $this->moTa = $moTa;
    }

    public function getSoluong(){
        return $this->soLuong;
    }

    public function setSoluong($soLuong){
        $this->soLuong = $soLuong;
    }

    public function getHinh(){
        return $this->hinh;
    }

    public function setHinh($hinh){
        $this->hinh = $hinh;
    }

    public function getGia(){
        return $this->gia;
    }

    public function setGia($gia){
        $this->gia = $gia;
    }

    public function getLoaisp(){
        return $this->loaiSp;
    }

    public function setLoaisp($loaiSp){
        $this->loaiSp = $loaiSp;
    }

    public function getTinhtrang(){
        return $this->tinhTrang;
    }

    public function setTinhtrang($tinhTrang){
        $this->tinhTrang = $tinhTrang;
    }

    public function getMahang(){
        return $this->maHang;
    }

    public function setMahang($maHang){
        $this->maHang = $maHang;
    }
}
