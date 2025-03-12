<?php
$veri=simplexml_load_file("personel.xml");
echo "<pre>";
print_r($veri);
echo "</pre>";
foreach($veri->personel as $item)
{
    echo "Personelin Adı: ".$item->adsoyad."<br>".
        "Personelin Departmanı: ".$item->departman."<br>"."<hr>";
}
?>