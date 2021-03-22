<?php 

include 'header.php'; 


?>

<!DOCTYPE html>
<html>
<head>
<title>Oyunbudur|ADMİN</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<link href="admin.css"rel="stylesheet">


<style>

.deneme{
	margin-left:600px;
	margin-top:60px;
	position:absolute;
}
.deneme2{
	margin-left:600px;
	margin-top:150px;
	position:absolute;	

}
</style>


</head>

<body>
<div class="deneme">
<form action="oyun.php" method="POST" enctype="multipart/form-data">
<input type="file" name="resim"><input type="submit" value="yükle">
<input type="text" name ="isim" style="width:113px;"/>
</form></div>

<div class="deneme2">
<form action="badland.php" method="POST">
<button id="ac">Oyunları Görmek İçin</button>
</div>
<?php
session_start();
$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["isim"])))){
            $isim=$_POST["isim"];
        }
		   if(strip_tags(trim(isset($_POST["resim"])))){
            $resim=getimagesize($_POST["resim"]);
        }
        

			$sorgu=mysqli_query($baglanti,"INSERT INTO oyunlar (isim,resim) VALUES
            ('".$isim."','".$resim."')");
			if ($sorgu==true) {
            echo "Cevabınız için teşekkürler. Yönlendiriliyorsunuz...";
			$geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
			header("Refresh: 1; url=".$geldigi_sayfa."");
        } else {
            echo "Hata:".$sorgu.$baglanti->error;
        }
		mysqli_close($baglanti);
    } else {
        echo "Veriler gelmedi";
    }
}



else { 
die("bağlantı sağlanamadı");}
?>









<?php 

include 'sidebar.php'; 


?>