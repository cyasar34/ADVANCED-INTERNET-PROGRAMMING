<?php

$db=new PDO('mysql:host=localhost;dbname=dinamikrss;charset=utf8',"root","");

//Veri Tabanından Alınan Bilgiler İle RSS oluşturma
//Veri Tabanında baslik ve icerik isimli sütunların olduğunu varsayıyorum.
//Temel Kısımlar
header('Content-Type: text/xml;');
echo '<?xml version="1.0" encoding="utf-8"?>'.
 '<rss version="2.0">'.
 '<channel>'.
 '<title>RSS</title>'.
 '<description>Dinamik RSS oluşturma</description>';

//Bilgileri Veri Tabanından Alma İşlemi
$Veriler=$db->query("SELECT * FROM icerik LIMIT 3");
$VeriAl = $Veriler->fetchAll(PDO::FETCH_ASSOC);
//Kayıt varsa listelenecek
if($Veriler->rowCount()>0)
{
    foreach ($VeriAl as $deger) {
        echo'<item>'.
'<title>'.$deger['icerik_baslik'].'</title>'.
'<description>'.$deger['icerik_aciklama'].'</description>'.'</item>';
}
}
echo '</channel>'.'</rss> ';
?>