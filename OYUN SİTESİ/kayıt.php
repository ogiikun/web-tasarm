<?php

$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["ad"])))){
            $ad=$_POST["ad"];
        }
		   if(strip_tags(trim(isset($_POST["eposta"])))){
            $eposta=$_POST["eposta"];
        }
        


        $sorgu=mysqli_query($baglanti,"INSERT INTO kullanıcılar (ad,eposta) VALUES
            ('".$ad."','".$eposta."')");
        if ($sorgu==true) {
            echo "Mail bildirimleriniz açıldı. Yönlendiriliyorsunuz...";
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