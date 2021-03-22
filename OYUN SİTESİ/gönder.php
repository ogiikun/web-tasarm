<?php

$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["oyun_adı"])))){
            $oyun_adı=$_POST["oyun_adı"];
        }

        


        $sorgu=mysqli_query($baglanti,"INSERT INTO en_begenilen_oyunlar (oyun_adı) VALUES
            ('".$oyun_adı."')");
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
    die("bağlantı sağlanamadı");
}

?>