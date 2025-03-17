<?php
$url = 'deneme.json';
$data = file_get_contents($url); 
$veriler = json_decode($data);
foreach ($veriler as $deger) 
{
  echo "Kitabın Adı: ". $deger->adi. "<br>".
       "Kitabın Yazarı: ".$deger->yazari."<br>"."<hr>";
}
?>