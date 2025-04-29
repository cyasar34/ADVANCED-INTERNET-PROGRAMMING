<?php
class kisi
{
    public $ad="Çisem";
    private $soyad="Yaşar";
    protected $meslek="Öğretim Görevlisi";
    public function bilgileriYazdir()
    {
        echo $this->ad."<br>".
            $this->soyad."<br>".
            $this->meslek."<br>";
    }
}
$kisi1=new kisi();
$kisi1->bilgileriYazdir();
?>