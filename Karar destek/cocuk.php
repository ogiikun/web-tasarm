<?php
$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
$sql="SELECT * FROM cocuk_sayisi";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo $sonuc["mahalle_id"].' '.$sonuc["cocuk_sayisi"].' '.$sonuc["genc_sayisi"].' '.<br>'; 
?>