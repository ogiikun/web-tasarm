<?php 


	echo "MahalleAdı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Eksik_fazla saha" .'<br><br>';
	


$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
$sql=("SELECT mahalleler.mahalle_ad,olmasi_gereken_park_saha.eksik_fazlaGencsaha
            FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
			WHERE eksik_fazlaGencsaha
            ");
			
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo $sonuc["mahalle_ad"].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$sonuc["eksik_fazlaGencsaha"].'<br><br>'; 
}


?>