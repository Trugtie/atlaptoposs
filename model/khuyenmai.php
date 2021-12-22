<?php
class KhuyenMai{
    private $makm;
    private $tenkm;
    private $mota;
    private $giatrigiam;
    private $ngaybd;
    private $ngaykt;
    private $hinh;

    public function __construct($ma, $ten, $mota, $gtg, $bd, $kt, $hinh)
    {
        $this->makm = $ma;
        $this->tenkm = $ten;
        $this->mota = $mota;
        $this->giatrigiam = $gtg;
        $this->ngaybd = $bd;
        $this->ngaykt = $kt;
        $this->hinh = $hinh;
    }

    public function getMaKm(){
        return $this->makm;
    }

    public function setMaKm($ma){
        $this->makm = $ma;
    }

    public function getGiatrigiam(){
        return $this->giatrigiam;
    }

    public function setGiatrigiam($ma){
        $this->giatrigiam = $ma;
    }

    public function getTenKm(){
        return $this->tenkm;
    }

    public function setTenKm($ma){
        $this->tenkm = $ma;
    }

    public function getMota(){
        return $this->mota;
    }

    public function setMota($ma){
        $this->mota = $ma;
    }

    public function getNgaybd(){
        return $this->ngaybd;
    }

    public function setNgaybd($ma){
        $this->ngaybd = $ma;
    }

    public function getNgaykt(){
        return $this->ngaykt;
    }

    public function setNgaykt($ma){
        $this->ngaykt = $ma;
    }

    public function getHinh(){
        return $this->hinh;
    }

    public function setHinh($ma){
        $this->hinh = $ma;
    }
    
}
?>