<?php
//1.class adalah sebuah blueprint/ template dimana 
// untuk membuat instance dari object 
//2.class mendefinisikan object
//3.menyimpan data(property) dan prilaku (method)
// membuat class dengan nama kucing
class Kucing{
// membuat property
public $warna;
public $jml_kaki;
public $mkn_fav;
// membuat method dengan nama bersuara
public function bersuara()
{
    return "Miaww";
}
}

var_dump($warna);
// membuat objek baru 
$kucing1=new Kucing();
var_dump($kucing1);