<?php 


	echo "MahalleAdı&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Çocuk sayisi&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Genç sayisi" .'<br><br>'; 

$baglanti=mysqli_connect("localhost","root","","2018469063");
$baglanti->set_charset("utf8");
$sql=("SELECT*
            FROM cocuk_sayisi
            ");
			
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    echo $sonuc["mahalle_ad"].'<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	.$sonuc["cocuk_sayisi"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;'.$sonuc["genç_sayisi"].'<br>'; 
}

	
?>