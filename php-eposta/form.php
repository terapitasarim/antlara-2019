<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title>Ziyaretçi Formu</title>
<link href="master.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <hr>
  <p>Ziyaretçi Formu</p>
  <hr>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form action="php-smtp.php" method="post" enctype="application/x-www-form-urlencoded" name="form" id="form">
    <p>Adınız<br>
      <input name="ad" type="text" id="ad" size="30">
    </p>
    <p>Soyadınız<br>
      <input name="soyad" type="text" id="soyad" size="30">
    </p>
    <p>Eposta adresiniz<br>
      <input name="eposta" type="text" id="eposta" size="40">
    </p>
    <p>Mesajınız<br>
      <textarea name="mesaj" cols="50" rows="5" id="mesaj"></textarea>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" value="Gönder">
    </p>
    <p>
      <input name="Reset" type="reset" id="Reset" value="Formu temizle">
    </p>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>
