
<?php

$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["eposta"])))){
            $eposta=$_POST["eposta"];
        }
		   if(strip_tags(trim(isset($_POST["sifre"])))){
            $sifre=$_POST["sifre"];
        }
        


        $sorgu=mysqli_query($baglanti,"UPDATE yoneticikontrol SET eposta='$eposta' , sifre='$sifre'");
        if ($sorgu==true) {
            echo "<br><br><br><br><br><br>
			<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			MAİLİNİZ GÜNCELLENDİ. YÖNLENDİRİLİYORSUNUZ...";
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
    die("bağlantı sağlanamadı");
}

?>

