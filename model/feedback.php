<?php
class FeedBack{
    private $mafb;
    private $tennguoigui;
    private $sanpham;
    private $noidung;
    private $thoigian;

    public function __construct($ma, $ten, $sp, $nd, $tg)
    {
        $this->mafb = $ma;
        $this->tennguoigui = $ten;
        $this->sanpham = $sp;
        $this->noidung = $nd;
        $this->thoigian = $tg;
    }

    public function getMaFb(){
        return $this->mafb;
    }

    public function setMaFb($ma){
        $this->mafb = $ma;
    }

    public function getTenNguoiGui(){
        return $this->tennguoigui;
    }

    public function setTenNguoiGui($ten){
        $this->tennguoigui = $ten;
    }

    public function getSanPham(){
        return $this->sanpham;
    }

    public function setSanPham($sp){
        $this->sanpham = $sp;
    }

    public function getNoiDung(){
        return $this->noidung;
    }

    public function setNoiDung($nd){
        $this->noidung = $nd;
    }

    public function getThoiGian(){
        return $this->thoigian;
    }

    public function setThoiGian($tg){
        $this->thoigian = $tg;
    }
}
?>