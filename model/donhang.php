<?php 
class DonHang{
    private $madh;
    private $ngaytao;
    private $nguoinhan;
    private $sdt;
    private $diachi;
    private $sanpham;
    private $soluong;
    private $tonggia;
    private $tinhtrang;

    public function __construct($ma, $ngay, $nguoi, $sdt, $diachi, $sp, $sl, $tonggia, $tt)
    {
        $this->madh = $ma;
        $this->ngaytao = $ngay;
        $this->nguoinhan = $nguoi;
        $this->sdt = $sdt;
        $this->diachi = $diachi;
        $this->sanpham = $sp;
        $this->soluong = $sl;
        $this->tonggia = $tonggia;
        $this->tinhtrang = $tt;
    }

    public function getMaDh(){
        return $this->madh;
    }

    public function setMaDh($ma){
        $this->madh = $ma;
    }
    public function getNgaytao(){
        return $this->ngaytao;
    }

    public function setNgaytao($ma){
        $this->ngaytao = $ma;
    }
    public function getNguoinhan(){
        return $this->nguoinhan;
    }

    public function setNguoinhan($ma){
        $this->nguoinhan = $ma;
    }
    public function getSdt(){
        return $this->sdt;
    }

    public function setSdt($ma){
        $this->sdt = $ma;
    }
    public function getDiachi(){
        return $this->diachi;
    }

    public function setDiachi($ma){
        $this->diachi = $ma;
    }
    public function getSanpham(){
        return $this->sanpham;
    }

    public function setSanpham($ma){
        $this->sanpham = $ma;
    }
    public function getSoluong(){
        return $this->soluong;
    }

    public function setSoluong($ma){
        $this->soluong = $ma;
    }
    public function getTonggia(){
        return $this->tonggia;
    }

    public function setTonggia($ma){
        $this->tonggia = $ma;
    }
    public function getTinhtrang(){
        return $this->tinhtrang;
    }

    public function setTinhtrang($ma){
        $this->tinhtrang = $ma;
    }
}
?>