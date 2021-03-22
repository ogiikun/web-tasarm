<?php 


	echo "MahalleAdı&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Park sayısı&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Olması gereken park sayısı" .'<br><br>';


$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
$sql=("SELECT olmasi_gereken_park_saha.park_sayisi, olmasi_gereken_park_saha.olmasi_gereken_park , mahalleler.mahalle_ad
            FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
			WHERE olmasi_gereken_park
            ");
			
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo $sonuc["mahalle_ad"].' &nbsp;&nbsp;&nbsp;&nbsp;'.$sonuc["park_sayisi"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	.$sonuc["olmasi_gereken_park"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;'.'<br>'; 
}

	
?>