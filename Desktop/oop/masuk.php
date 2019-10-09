<?php
class Login{
    public $username;
    public $password;
    public function __construct($user,$pass);
    {
        $this->username="$user";
        $this->password="$pass";
        if($user == "admin" && $pass =="123"){
            echo"login berhasil"; 
        }else{
            echo"login gagal silahkan login kembali <a href="loggin.php">Klik disini</a>";
        }
        $akses = new Login();
        