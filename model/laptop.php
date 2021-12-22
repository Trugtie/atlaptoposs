<?php
include  dirname(__DIR__).'/model/sanpham.php';
class Laptop extends SanPham
{
    private $trongLuong;
    private $manHinh;
    private $oCung;
    private $vga;
    private $ram;
    private $cpu;
    private $pin;
    private $mauSac;
    private $maLoaiMay;

    public function __construct($maSp, $tenSp, $moTa, $soLuong, $hinh, $gia, $loaiSp, $tinhTrang, $maHang, $trongLuong, $manHinh, $oCung, $vga, $ram, $cpu, $pin, $mauSac, $maLoaiMay)
    {
        parent::__construct($maSp, $tenSp, $moTa, $soLuong, $hinh, $gia, $loaiSp, $tinhTrang, $maHang);
        $this->trongLuong = $trongLuong;
        $this->manHinh = $manHinh;
        $this->oCung = $oCung;
        $this->vga = $vga;
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->pin = $pin;
        $this->mauSac = $mauSac;
        $this->maLoaiMay = $maLoaiMay;
    }


    public function getTrongLuong()
    {
        return $this->trongLuong;
    }


    public function setTrongLuong($trongLuong)
    {
        $this->trongLuong = $trongLuong;
    }


    public function getManHinh()
    {
        return $this->manHinh;
    }

    public function setManHinh($manHinh)
    {
        $this->manHinh = $manHinh;
    }


    public function getOCung()
    {
        return $this->oCung;
    }


    public function setOCung($oCung)
    {
        $this->oCung = $oCung;
    }


    public function getVga()
    {
        return $this->vga;
    }

    public function setVga($vga)
    {
        $this->vga = $vga;
    }


    public function getRam()
    {
        return $this->ram;
    }


    public function setRam($ram)
    {
        $this->ram = $ram;
    }


    public function getCpu()
    {
        return $this->cpu;
    }


    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }


    public function getPin()
    {
        return $this->pin;
    }


    public function setPin($pin)
    {
        $this->pin = $pin;
    }


    public function getMauSac()
    {
        return $this->mauSac;
    }


    public function setMauSac($mauSac)
    {
        $this->mauSac = $mauSac;
    }


    public function getMaLoaiMay()
    {
        return $this->maLoaiMay;
    }


    public function setMaLoaiMay($maLoaiMay)
    {
        $this->maLoaiMay = $maLoaiMay;
    }
}
