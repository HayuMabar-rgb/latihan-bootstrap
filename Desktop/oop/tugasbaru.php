<?php
class Produksi{
    public $nama_prodak;
    protected $harga;
    private $diskon;
    public function setDiskon(){
        return($this->diskon*$this->harga);
    }
    public function mayar(){
        return "membeli produk";
    }
}
    class batu extends Produksi{
        public function setHarga($harga){
        $this->harga = $harga;
    }
    public function bayar(){
        return"Nama Barang :".$this->nama_prodak."<br> Harga Barang :".$this->harga."<br> Diskon :".$this->setDiskon;
    }
    }

    $product = new batu;
    $product->nama_prodak="batu merah";
    $product->setHarga(100000);
    echo $product->mayar()."<br>";
    echo $product->bayar();

?>