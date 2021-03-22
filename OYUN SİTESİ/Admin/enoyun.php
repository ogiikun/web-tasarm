<?php 

include 'header.php'; 


?>
<!DOCTYPE html>
<html>
<head>
<title>Oyunbudur|ADMİN</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<link href="admin.css"rel="stylesheet">


<style>
.enyo{
	margin-left:400px;
	margin-top:60px;
	position:absolute;
	width:1000px;
	height:800px;
}
.tablo{
	margin-left:400px;
	margin-top:100px;
	position:absolute;

}
</style>


</head>

<body>

<div class="enyo">
<span>EN SEVİLEN OYUNLAR</span>
</div>
<div class="tablo">
<?php 
$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
$sql="SELECT * FROM en_begenilen_oyunlar";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
echo $sonuc["oyun_adı"]. '<br><br>';}

?>
</div>

<?php

include 'sidebar.php'; 
?>