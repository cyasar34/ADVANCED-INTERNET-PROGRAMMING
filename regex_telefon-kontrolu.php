<html>
    <head>
        <meta charset="utf-8">
        <title>Telefon Kontrolü</title>
    </head>
    <body>
        <small>Lütfen Gsm numarınızı başında "0" olmadan ilgili alana yazınız. Örneğin:5xxxxxxxx</small><br><br>
        <form action="" method="post">
           Telefon Numarası:<input type="number" name="TelNo">
           <button type="submit" name="KontrolEt">Kontrol Et</button>
            
        </form>
    </body>
</html>
<?php
if(isset($_POST["KontrolEt"]))
{
    $TelefonNumarasi=$_POST["TelNo"];
    $telUzunluk=strlen($TelefonNumarasi);
    $pattern="/5[0,3,4,5,6][0-9]\d\d\d\d\d\d\d$/";
    $eslesme=preg_match($pattern,$TelefonNumarasi);
    if($eslesme==1 && $telUzunluk==10)
    {
        echo "Girilen GSM operatörü doğrudur.";
    }
    else
    {
        echo "Girilen Gsm operatörü hatalıdır.";
        
    }   
}
?>