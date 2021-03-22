<?php 
$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
$sql="SELECT * FROM oyunlar";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
echo '<br>'.$sonuc["isim"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$sonuc["resim"].'<br><br>';}

?>