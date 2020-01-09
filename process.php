<?php
//change settings here
$your_email = "info@larisadental.com";
$your_smtp = "77.245.148.197";
$your_smtp_user = "info@larisadental.com";
$your_smtp_pass = "Aa123456";
$your_website = "http://www.larisadental.com";


require("phpmailer/class.phpmailer.php");


//function to check properly formed email address
function isEmailValid($email)
{
  // checks proper syntax
  if( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email))
  {
    return false;
  } 
  
  return true;
  
}


//get contact form details
$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$comments = $_POST['comments'];


//validate email address, if it is invalid, then returns error

if (!isEmailValid($email)) {
	die('Geçersiz eposta girdiniz. Lütfen tekrar kontrol ediniz.');
}

//start phpmailer code 

$ip = $_SERVER["REMOTE_ADDR"];
$user_agent = $_SERVER['HTTP_USER_AGENT'];



$response="Date: " . date("d F, Y h:i:s A",time()+ 16 * 3600 - 600) ."\n" . "IP Address: $ip\nTelefon: $telefon\nUser-agent:$user_agent\nAd soyad: $name\nMesaj:\n$comments\n";
//mail("info@mypapit.net","Contact form fakapster",$response, $headers);

$mail = new PHPmailer();
$mail->SetLanguage("en", "phpmailer/language");
$mail->From = $your_email;
$mail->FromName = $your_website;
$mail->Host = $your_smtp;
$mail->Mailer   = "smtp";
$mail->Password = $your_smtp_pass;
$mail->Username = $your_smtp_user;
$mail->Subject = "$your_website feedback";
$mail->SMTPAuth  =  "true";

$mail->Body = $response;
$mail->AddAddress($your_email,"h015859@yahoo.com");
$mail->AddAddress($your_email,"waccooo@gmail.com");
$mail->AddReplyTo($email,$name);


if (!$mail->Send()) {
echo "<p>Bir Hata oluştu. Lütfen daha sonra yeniden deneyiniz.</p>";
echo "<p>".$mail->ErrorInfo."</p>";
} else {
	echo "<p>Mesajınız Başarıyla alınmıştır. En kısa zamanda tarafınıza geri dönüş sağlanacaktır. Gösterdiğiniz ilgiye teşekkür ederiz.</p>";
}

$mail->ClearAddresses();
$mail->ClearAttachments();

?>