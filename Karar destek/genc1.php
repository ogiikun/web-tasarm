<?php 


	echo "MahalleAdı&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Genç saha&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Olması gereken genç saha" .'<br><br>';


$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
$sql=("SELECT olmasi_gereken_park_saha.genc_saha, olmasi_gereken_park_saha.olmasi_gereken_genc_saha , mahalleler.mahalle_ad
            FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
			WHERE olmasi_gereken_park
            ");
			
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo $sonuc["mahalle_ad"].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$sonuc["genc_saha"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	.$sonuc["olmasi_gereken_genc_saha"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;'.'<br>'; 
}

	
?>