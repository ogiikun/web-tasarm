<?php

$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["mahalle_id"])))){
            $mahalle_id=$_POST["mahalle_id"];
        }
		   if(strip_tags(trim(isset($_POST["mahalle_ad"])))){
            $mahalle_ad=$_POST["mahalle_ad"];
        }
        


        $sorgu=mysqli_query($baglanti,"INSERT INTO mahalleler (mahalle_id,mahalle_ad) VALUES
            ('".$mahalle_id."','".$mahalle_ad."')");
        if ($sorgu==true) {
            echo "Kayıt veritabanına eklendi.";
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