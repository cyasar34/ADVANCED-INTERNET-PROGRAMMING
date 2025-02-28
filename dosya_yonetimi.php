<?php
//Dosyanın bulunduğu dizinde dosya oluşturur.
//$dosya=touch("webtasarimi.txt");
//Belirlenen dizi içerisinde dosya oluşturur.
//$dizin=touch("dosyalar/webtasarimi.docx");
//Dosya oluşturmanın kontrolü
/*if($dizin)
{
    echo "Dosya oluşturuldu.";
}
else
{
    echo "Dosya oluşturulamadı";
}*/

//Dosya içerisine metin ekleme
/*touch("ogrenci.txt");
$belge=fopen("ogrenci.txt","w+");
fwrite($belge, "Adım Soyadım: ÇİSEM YAŞAR,\tOkul: GELİŞİM ÜNİVERSİTESİ,\nProgramlama Dilleri: PHP");
echo "Belge üzerine içerik eklendi. Kontrol 
edebilirsiniz.";
fclose($belge);*/

//Dosyadan satır satır okuma
/*$dosya = fopen('ogrenci.txt','r');
while(!feof($dosya))
{
echo fgets($dosya)."<br>";
}*/

//Dosya ismi değiştirme
/*if(rename("ogrenci.txt","dosyalar/webkodlama.txt"))
{
    echo "Başarılı bir şekilde tamamlandı";
}
else
{
    echo "İşlem başarısız oldu.";
}*/

//Dosya varlığı sorgulama

$dosya = 'deneme.txt';
 if(file_exists($dosya)) 
 {
 echo 'Oluşturmak istediğiniz dosya sunucu üzerinde mevcuttur.';
 } 
 else 
 {
 touch($dosya);
 echo 'Sunucada '.$dosya.' isimli dosya oluşturuldu.';
 }
















?>