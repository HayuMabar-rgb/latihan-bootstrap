<?php
class Laptop{
    // make protected property
    protected $pemilik="anto";
public function Akses_pemilik(){
    return $this->pemilik;
}
protected function Hidupkan_laptop(){
    return "Hidupkan Laptop";
}
public function Paksa_hidup(){
    return $this->Hidupkan_laptop();
}
}
// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
// jalankan menthod akses_Pemilik();
echo $laptop_anto-> Akses_pemilik();//antoo
// Jalankan method paksa_Hidup()
echo $laptop_anto->Paksa_hidup();
?>