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
.tablo{
	margin-left:400px;
	margin-top:100px;
	position:absolute;
	background:#fff;
	height:800px;
	width:1000px;
	border-style:solid;
	border-width:2px;
}
.deneme{
	border-style:solid;
	border-width:2px;
	height:50px;
}

</style>


</head>

<body>


<div class="tablo">
<span>İSİM</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Eposta</span>
<br>
<br>

	<div class="deneme">
		
<?php 
$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
$sql="SELECT * FROM Kullanıcılar";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
echo '<br>'.$sonuc["ad"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$sonuc["eposta"].'<br><br>';}

?>
	<td><?php echo $sonuc['ad'] ?></td>
    <td><?php echo $sonuc['eposta'] ?></td>	
	</div>
</div>

<?php

include 'sidebar.php'; 
?>