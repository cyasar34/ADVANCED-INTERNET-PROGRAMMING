<?php
// json verisini json_decode fonksiyonu ile nesneye çeviriyoruz. Daha sonra ise bu yeni oluşan nesnenin elemanlarına erişiyoruz.

$json_ben=
'
   {
    "isim":"Cisem",
    "soyisim":"Yasar",
    "memleket":"Balıkesir"
   }    
';
/*$veri = json_decode($json_ben);
echo $veri->isim."<br>".
     $veri->soyisim."<br>".
     $veri->memleket;
*/

//json verisini json_decode fonksiyonu ve true parametresiyle diziye çeviriyoruz. Daha sonra ise bu yeni oluşan dizinin elemanlarına erişiyoruz.
$veri = json_decode($json_ben,true);
echo $veri["isim"]."<br>".
     $veri['soyisim']."<br>".
     $veri['memleket']."<br>";
?>