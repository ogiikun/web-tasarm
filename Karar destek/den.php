<?php 


	echo "Mahalle Adı &nbsp;&nbsp;";
	echo "Kuruluş yılları &nbsp;&nbsp;  ".'<br><br>';


$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
$sql=("SELECT mahalleler.mahalle_ad , park.kurulus_yillari
            FROM mahalleler LEFT JOIN park on mahalleler.mahalle_id=park.mahalle_id
			WHERE park.kurulus_yillari <'2008'
            ");
			
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo $sonuc["mahalle_ad"].' &nbsp;&nbsp;&nbsp;&nbsp;'.$sonuc["kurulus_yillari"].'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;'.'<br>'; 
}

	echo "12 yaşından büyük mahallelerdeki parklar kontrol edilmelidir."
?>