<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();
$mail->Host = "smtp.outlook.com";
$mail->Username = 'Kullanıcı Maili'; 
$mail->Password = 'Kullanıcı Parola';
$mail->Port = 587; 
$mail->SMTPSecure = 'tls'; 
$mail->isSMTP(); 
$mail->SMTPAuth = true;
$mail->isHTML(true);
$mail->CharSet = "UTF-8";
$mail->setLanguage('tr', 'PHPMailer/language/');
//$mail->SMTPDebug  = 2;
$mail->setFrom('Kullanıcı Maili', 'Gelişim Üniversitesi');
$mail->addAddress('Kullanıcı Maili', 'Çisem Yaşar');

$mail->Subject = 'Deneme mail gönderimi';
$mail->Body =
"
	<html>
		<head>
		</head>
		<body>
			<h3>Bu mail Gelişim Üniversitesi Meslek Yüksekokulu Web Tasarımı ve Kodlama Programı Öğrencileri Tarafından PhpMailler ile mail gönderimini test etmek amacıyla gönderilmiştir.</h3>
		</body>
	</html>
";
$mail_gonder = $mail->send(); 
if($mail_gonder)
{ 
	echo 'Mail başarıyla gönderildi';
}
else
{
	echo 'Mail gönderilemedi. Mail hata mesajı: '.
        $mail->ErrorInfo; 
}
?>



