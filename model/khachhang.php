<?php

class KhachHang{
    private $makh;
    private $email;
    private $username;
    private $password;
    private $ho;
    private $ten;
    private $sdt;
    private $diachi;
    
    public function __construct($ma, $email, $user, $pw, $ho, $ten, $sdt, $dc)
    {
        $this->makh = $ma;
        $this->email = $email;
        $this->username = $user;
        $this->password = $pw;
        $this->ho = $ho;
        $this->ten = $ten;
        $this->sdt = $sdt;
        $this->diachi = $dc;
    }

    public function get_makh(){
        return $this->makh;
    }

    public function set_makh($ma){
        $this->makh = $ma;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_email($email){
        $this->email=$email;
    }

    public function get_username(){
        return $this->username;
    }

    public function set_username($username){
        $this->username=$username;
    }

    public function get_password(){
        return $this->password;
    }

    public function set_password($password){
        $this->$password=$password;
    }

    public function get_ho(){
        return $this->ho;
    }

    public function set_ho($ho){
        $this->ho=$ho;
    }

    public function get_ten(){
        return $this->ten;
    }

    public function set_ten($ten){
        $this->ten=$ten;
    }

    public function get_sdt(){
        return $this->sdt;
    }

    public function set_sdt($sdt){
        $this->sdt=$sdt;
    }

    public function get_diachi(){
       return $this->diachi;
    }

    public function set_diachi($diachi){
        $this->diachi=$diachi;
    }

}
