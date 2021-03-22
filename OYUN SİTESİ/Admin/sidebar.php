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

.sidebar{
	height:800px;
	width:300px;
	background:#5f5f5f;
	position:absolute;
}

</style>


</head>

<body>

<div class="sidebar">
		<div class="oyunbudur">
		<span>OYUNBUDUR/ADMİN</span></div>
		
		<div class="anasayf">
		<i class="fas fa-home"></i>
	    <a id="as" href="admin1.php">ANA SAYFA</a>
	    </div>
		
		
		<div class="oyunlar">
		<i class="fas fa-chess-rook"></i>
		<a id="oyun" href="oyun.php">TÜM OYUNLAR</a></div>


		<div class="enoyun">
		<i class="fas fa-gamepad"></i>
		<a id="en" href="enoyun.php">EN SEVİLEN OYUNLAR</a>
		</div>
		
		
		<div class="kullanıcılar">
		<i class="fas fa-user-astronaut"></i>
		<a id="kullanıcı" href="kullanıcı.php">KULLANICILAR</a>
		</div>
		
		<div class="trafik">
		<i class="fas fa-traffic-light"></i>
		<a id="tra" href="trafik.php">SİTE TRAFİĞİ</a>
		</div>
		
		
		
		
		
		
		<div class="setting">
		<i class="fas fa-tools"></i>
		<a id="ayarlar" href="ayarlar.php">AYARLAR</a>
		</div>
		
</div>