
<!DOCTYPE html>
<html>
<head>
	<title>Sayıyı Tahmin Et</title>
	<style type="text/css">
		#a{
			margin-top:15%; 
		}
	</style>
</head>
<body>
	<form method="post" id="a"><center>
<center><b><code>1-100 Arasında ki Sayıyı Tahmin Et</code></b></center>
<br><br>
		<label><code>Sayıyı Gir : </label>
		<input type="number"  name="sayi"></code><br><br>
		<input type="submit" value="Yakala" name="bul">

		<?php 
		session_start();
		if (!$_SESSION) {
			  $_SESSION["üretilensayi"] = rand(1,100);
			}
		if (isset($_POST['bul'])) {
			$sayi=$_POST['sayi'];
			if ($sayi > $_SESSION["üretilensayi"]) {
				echo "<font color='red'>Aşağı İn.</font>";
			}
			else if ($sayi < $_SESSION["üretilensayi"]) {
				echo "<font color='green'>Yukarıya Çıkk.</font>";
			}
			else {
				echo "Tebrikler Sayıyı Buldunuz."." <font color='orange'>Sayı : ".$_SESSION["üretilensayi"]."</font>";
				session_destroy();
			}
		}



		 ?></center>
	</form>

</body>
</html>