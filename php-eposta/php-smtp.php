<?PHP

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');


 // phpmailer sinifimizi uygulamamiza dahil ediyoruz.
 require("phpmailer/class.phpmailer.php");

 $mail = new PHPMailer();
 
 // Eposta HTML olarak gonderilsin (HTML gonderimini iptal etmek icin true yerine false yazin)
 $mail->IsHTML(true);

 $mail->CharSet  = 'utf-8'; 
 
 // Eposta konu basligi
 $mail->Subject = "AntLara Dental Iletisim Formu";
 
 // TXT eposta icin eposta govdesini olusturuyoruz
 $mail->AltBody = "AntLara Dental Iletisim Formu\n\n
                  Adi Soyadi : ".$_POST['ad']."\n
                  Telefon Numarasi : ".$_POST['telefon']."\n
				          Eposta Adresi : ".$_POST['eposta']."\n
				          Mesaj : ".$_POST['mesaj']."\n
				  ";
				  
 // HTML eposta icin eposta govdesini olusturuyoruz
 $mail->Body    = "Ziyaretci Formu<br><br>
                   Adi Soyadi : ".$_POST['ad']."<br>
                   Telefon Numarasi : ".$_POST['telefon']."<br>
				          Eposta Adresi : ".$_POST['eposta']."<br>
				          Mesaj : ".$_POST['mesaj']."<br>
				  ";

 // epostamizi SMTP ustunden yollayalim.
 $mail->IsSMTP();

 // SMTP sunucu adresimiz.
 $mail->Host = "mail.antlara.com";
 
 // Sunucumuz kimlik dogrulamasi istiyorsa "true" degerini verelim.
 $mail->SMTPAuth = true;     

 // SMTP kullanici adi ve parolasi
 $mail->Username = "antlara@antlara.com";
 $mail->Password = "Antlara07.";

 // Eposta kimden gidiyor?
 $mail->From = "antlara@antlara.com";

 // Eposta icin gorunen isim (Opsiyonel)
$mail->FromName = "AntLara Dental iletisim Formu - Online Form";

 // hedef adres (gorunen isim olmadan)
 
 
 // hedef adres (gorunen isim ile birlikte)
 //$mail->AddAddress("alici1@adres.com", "ALICI 1");

 // Eposta birden fazla kisiye gidecek ise $mail->AddAddress'i yine kullanabiliriz.
$mail->AddAddress("h015859@yahoo.com"); 
$mail->AddAddress("firatguler32@gmail.com");
$mail->AddAddress("antlaraklinik@gmail.com");
$mail->AddAddress("okanekim06@gmail.com");

//$mail->AddAddress("larisadental07@gmail.com");

 // Yanitlama adresi ornegi (Opsiyonel)
 //$mail->AddReplyTo("destek@bikesoft.net","Teknik Destek");

 // Eposta icin sozcuk kaydirma. (Opsiyonel)
 //$mail->WordWrap = 50;

 // Eposta eklentisi (Opsiyonel)
 //$mail->AddAttachment("deneme.txt");

 // Eposta eklentisi (giden dosya adini biz belirleyelim) (Opsiyonel)
 //$mail->AddAttachment("deneme.txt", "yeni.txt");



 if(!$mail->Send()) 
 {
  echo "Mesajiniz gonderilemedi.<p>";
  echo "Hata : " . $mail->ErrorInfo;
  die();
}
 else
 {
  /*echo "Mesajiniz gonderildi.";
  Redirect ("http://www.ankaraestetikcerrah.com/");*/

header('Location: http://www.antlara.com');
  exit;
  /*****************
        burası nbestetik.com için...
  
  
  

***************/

  /*****************
        burası ankaraestetikcerrah.com için...
  
  header('Location: http://www.ankaraestetikcerrah.com/success.html');
  exit;
***************/

 }  


/*

$sent = mail($Recipient, $Subject, $Email_body, $Email_headers);

  if ($sent){
    $emailResult = array ('sent'=>'yes');
  } else{
    $emailResult = array ('sent'=>'no');
  }

*/


?>