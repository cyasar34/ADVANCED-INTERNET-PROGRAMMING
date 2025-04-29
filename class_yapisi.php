<?php
class sehir
{
    public $ad;
    public $plaka;
    public function yazdir()
    {
        echo $this->plaka." plaka nolu şehir ".$this->ad;
    }
}
$sehir1=new sehir();
$sehir2=new sehir();
$sehir1->plaka="10";
$sehir1->ad="Balıkesir";
$sehir1->yazdir();
echo "<br>";
$sehir2->plaka="34";
$sehir2->ad="İstanbul";
$sehir2->yazdir();
echo "<br>";
?>