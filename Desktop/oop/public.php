<?php
class Laptop{

    public $pemilik;
    public function Hidupkan_laptop(){
        return"Hidupkan Laptop";
    }
}
// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
// set property
$laptop_anto->pemilik="Anto";
// show property
echo $laptop_anto->pemilik; //anto

// tampilkan method
echo $laptop_anto->Hidupkan_laptop(); //hidupkan laptop
?>