<?php


class RPL2{
    // making property
    public $nama;
    public $jenkel;
    public $hobby;
    public $alamat;
    public $nik;
    // this making method
    public function Printed()
    {
        return "<h2>RPL 2 BIODATE</h2> Nama : ".$this->nama."<br> jenis kelamin : ".$this->jenkel."<br> Hobby :".$this->hobby.
        "<br> Alamat : ".$this->alamat."<br> NIK :".$this->nik;
    }
}
// objek minimal 5
$siswa1 = new RPL2();
$siswa1 ->nama="Rama";
$siswa1 ->jenkel="laki laki";
$siswa1 ->hobby="main hati";
$siswa1 ->alamat="graha rancamanyar";
$siswa1 ->nik="55872138721";
echo $siswa1->Printed();
echo"<br>";
echo"<br>";
$siswa1 = new RPL2();
$siswa1 ->nama="afrizal";
$siswa1 ->jenkel="laki laki";
$siswa1 ->hobby="editing";
$siswa1 ->alamat="kopo permai";
$siswa1 ->nik="55872138721";
echo $siswa1->Printed();
echo"<br>";
echo"<br>";
$siswa1 = new RPL2();
$siswa1 ->nama="adriansyah";
$siswa1 ->jenkel="laki laki";
$siswa1 ->hobby ="sunday morning ride";
$siswa1 ->alamat="jalan moch toha";
$siswa1 ->nik="55872138721";
echo $siswa1->Printed();
echo"<br>";
echo"<br>";
$siswa1 = new RPL2();
$siswa1 ->nama ="Dado";
$siswa1 ->jenkel="laki laki";
$siswa1 ->hobby="ugal ugalan";
$siswa1 ->alamat="margahayu raya";
$siswa1 ->nik="55872138721";
echo $siswa1->Printed();
echo"<br>";
echo"<br>";
$siswa1 = new RPL2();
$siswa1 ->nama="Lardiansyah";
$siswa1 ->jenkel="jenis kelamin";
$siswa1 ->hobby ="sinday";
$siswa1 ->alamat="Jalan raya";
$siswa1 ->nik="55872138721";
echo $siswa1->Printed();

