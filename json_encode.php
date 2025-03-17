<?php
//Anahtar değerleri olmayan bir diziyi json_encode metoduyla json dizisi haline çeviriyoruz. 
$diller = array("PHP","C#","Java");
$json_dizisi = json_encode($diller);   
echo $json_dizisi."<br>";     


//anahtar değerleri olan bir diziyi json_encode metoduyla json nesnesi haline çeviriyoruz. 
$ArabaMarkasi = array(
    "araba1" => "Toyota",
    "araba2" => "Volkswagen",
    "araba3" => "BMW",
    "araba4" => "Mercedes"
);
$json_nesnesi = json_encode($ArabaMarkasi);
echo $json_nesnesi."<br>"; 
?>
