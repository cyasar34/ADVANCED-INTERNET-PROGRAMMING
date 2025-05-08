<?php
$pattern= "#Gelişim#";
$metin = "<i>Ben Gelişim Üniversitesinde Web Tasarımı ve Kodlama programı öğrencisiyim.</i>";
echo $metin."<br>"."Aranılan kelime<u> Gelişim </u>"."<br>";
if(preg_match($pattern,$metin,$sonuc)) 
{
    echo "Aranılan kelime metinde mevcut";
}
else 
{
    echo "Aranılan kelime metinde mevcut değil.";
}  
echo "<pre>";
print_r($sonuc);
echo "</pre>";
?>