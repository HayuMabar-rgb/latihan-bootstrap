<?php
class Karyawan{
    public $nama;
    public $pekerjaan;
    public $tahun_kerja;
    protected $gaji;
    private $gmanajer=500000;
    private $gjob=5000000;
    public function setData($nama="mahmud", $pekerjaan="Manager" ,$tahun_kerja="10"){
    $this->nama =$nama;
    $this->pekerjaan=$pekerjaan;
    $this->tahun_kerja=$tahun_kerja;

    }
    public function getData(){
        if ($this->pekerjaan= "manager" && $this->tahun_bekerja="10") {
            $$this->gaji = $this -> tahun_kerja * $this->gmanajer;
        }elseif ($this-> pekerjaan == "ob" && $this -> tahuhn_bekerja="10" ) {
            $this -> gaji = $this -> tahun_kerja * $this->gjob;
        }elseif ($this -> pekerjaan == "manager" && $this -> tahun_bekerja= "5" ) {
            $this -> gaji = $this -> tahun_kerja * ($this->gmanager-1000000);
        }elseif ($this -> pekerjaan == "ob" && $this -> tahun_bekerja="10") {
            $this -> gaji = $this -> tahun_kerja * ($this ->gjob - 100000); 
        }
        return $this -> gaji;
    }
}
$karyawan = new karyawan();
$karyawan->setdata("anton","manager",10);
echo"nama          : $karyawan->nama<br>";
echo"Pekerjaan     : $karyawan->pekerjaan<br>";
echo"tahun bekerja : $karyawan->tahun_kerja<br>";
echo "gaji = " . number_format($karyawan->getdata(), 0, ",", ".") . " <br>";
