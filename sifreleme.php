<?php
/*Base64 ile Şifreleme*/
echo "<h4><u>Base64 Şifreleme</u></h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi = base64_encode($sifre);
$sifre_cozuldu = base64_decode($sifrelendi);
echo "Girilen Şifre : ". $sifre."<br>".
    "Şifrelenmiş Veri : ".$sifrelendi."<br>".
    "Şifrenin Çözümlenmiş Hali : ". $sifre_cozuldu;

/*Gzcompress ve Gzuncompress ile Şifreleme*/
echo "<h4><u>Gzcompress ve Gzuncompress ile Şifreleme</u></h4>";
echo "<h4><i>String ifade boyutu küçültme</i></h4>";
$yazi = 'Lorem Ipsum nedir?
Lorem Ipsum , baskı ve dizgi endüstrisinin basit bir metnidir. Lorem Ipsum, bilinmeyen bir matbaacının bir dizi çeşidi alıp bir tür numune kitabı yapmak için karıştırdığı 1500lerden beri endüstrinin standart kukla metni olmuştur.';
$kucultme = gzcompress($yazi);
echo 'Orijinal Boyutu: '. strlen($yazi). "<br>".
    'Sıkıştırılmış Boyutu: '. strlen($kucultme)."<br>";

echo "<h4><i>Şifre çözme</i></h4>";
$sifre = 'GelisimUniversitesi34';
$sifrelendi = gzcompress($sifre);
$sifre_cozuldu = gzuncompress($sifrelendi);
echo "Girilen Şifre : ". $sifre."<br>".
    "Şifrelenmiş Veri : ".$sifrelendi."<br>".
    "Şifrenin Çözümlenmiş Hali : ". $sifre_cozuldu;

/*Urlencode ve Urldecode ile Şifreleme*/
echo "<h4><u>Urlencode ve Urldecode ile Şifreleme</u></h4>";
$sifre = "Gelişim Üniversitesi Meslek Yüksekokulu";
$sifrelendi = urlencode($sifre); 
$sifre_cozuldu = urldecode($sifrelendi);
echo "Girilen Şifre : ". $sifre."<br>".
    "Şifrelenmiş Veri : ".$sifrelendi."<br>".
    "Şifrenin Çözümlenmiş Hali : ". $sifre_cozuldu;


/*Md5 ile Şifreleme*/
    echo "<h4><u>Md5 ile Şifreleme</u></h4>";
	$sifre= "GelisimUniversitesi34";
    $ekle="Avcılar ".$sifre;
	$sifrelendi	= md5($ekle);
	echo "Girilen Şifre : " . $ekle."<br>".
	"Şifrelenmiş Veri : " . $sifrelendi;

/*Sha1 ile Şifreleme*/
    echo "<h4><u>Sha1 ile Şifreleme</u></h4>";
    $sifre		= " GelisimUniversitesi34 ";
	$sifrelendi	= sha1($sifre);
    echo "Girilen Şifre : " . $sifre."<br>".
    "Şifreli Veri : " . $sifrelendi."<br>";
    $guvenlisifrele=sha1(md5($sifre));
echo "Şifreli Veri : " . $guvenlisifrele."<br>";


/*Crc32 İle Şifreleme*/
    echo "<h4><u>Crc32 İle Şifreleme</u></h4>";
    $sifre		= " GelisimUniversitesi34 ";
	$sifrelendi	= crc32($sifre);
    echo "Girilen Şifre : " . $sifre."<br>".
    "Şifreli Veri : " . $sifrelendi."<br>";

/*Hash İle Şifreleme*/
    echo "<h4><u>Hash İle Şifreleme</u></h4>";
    $sifre="GelisimUniversitesi34"; 
    $sifrelendi=hash('sha256',$sifre);
    echo "Girilen Şifre : " . $sifre."<br>".        
         "Şifreli Veri : " . $sifrelendi."<br>";

/*Crypt İle Şifreleme*/
echo "<h4><u>Crypt İle Şifreleme</u></h4>";
error_reporting(0);

//Basit Kullanım
    $sifre='GelisimUniversitesi34';
    $Sonuc=crypt($sifre);
    echo "Basit kullanım ile şifreleme: ".$Sonuc."<br>";
//CRYPT_STD_DES 
  if (CRYPT_STD_DES)
    {
        $Sonuc=crypt($sifre,'Ge');
        echo "Standart DES Şifrelemesi: " .$Sonuc."<br>";
    } 
//CRYPT_EXT_DES 
    if (CRYPT_EXT_DES)
    {
        $Sonuc=crypt($sifre,'GelisimUn');
        echo "Gelişmiş DES Şifrelemesi: ". $Sonuc."<br>";
    } 
//CRYPT_MD5     
    if (CRYPT_MD5)
    {
        $Sonuc=crypt($sifre,'$1$GelisimUnive$');
        echo "Md5 Şifreleme: ". $Sonuc."<br>";
    }
//CRYPT_BLOWFISH    
    if (CRYPT_BLOWFISH)
    {
        $Sonuc=crypt($sifre,'$2a$GelisimUniversite$');
        echo "Crypt Blowfish Şifreleme: ".$Sonuc."<br>";
    }
//CRYPT_SHA256  
    if (CRYPT_SHA256) 
    {
        $Sonuc=crypt($sifre,'$5$GelisimUniversite$');
        echo "Sha 256 ile Şifreleme: ".$Sonuc."<br>";
    }  
//CRYPT_SHA512      
    if (CRYPT_SHA512) 
    {
        $Sonuc=crypt($sifre,'$6$GelisimUniversitesi$');
        echo "Sha 512 ile Şifreleme: ".$Sonuc."<br>";
    }



/*Password_hash İle Şifreleme*/
echo "<h4><u>Password_hash İle Şifreleme</u></h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi=password_hash($sifre, PASSWORD_DEFAULT);
echo "Şifre: ".$sifre."<br>".
 "Şifrelenecek Veri: ".$sifrelendi."<br>";


?>
