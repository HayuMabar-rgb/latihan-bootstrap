<?php
class Hape{
    var $merk;
    var $ukuran_layar;
    var $pemilik;
    var $warna;
    var $nama_pencipta;
    var $type;
    function Hidupkan_Handphone(){
        return"Hidupkan";
    }
    function Matikan_Handphone(){
        return"Matikan";
    }

}
$Hapeku = new Hape();

echo"Nama Produk : ".$Hapeku->merk="vivo";
echo"Nama pemilik:".$Hapeku->pemilik="kemal";
echo"Ukuran Layar:".$Hapeku->ukuran_layar="5.5 inch";
echo"Warna Hp    :".$Hapeku->warna="Galaxy Purple";
echo"Nama Pembuat:".$Hapeku->nama_pencipta="null";
echo"Tipe hape   :".$Hapeku->type="vivo Y971";