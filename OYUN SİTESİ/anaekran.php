<!DOCTYPE html>
<html>
<head>
<title>Oyunbudur</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<style>
.ikon{
	position:absolute;
	width:200px;
	height:200px;
}
.ikon .fa-ghost{
	width:140px;
	height:140px;
	margin-left:50px;
	position:absolute;
}
.ikon span{
    margin-left:85px;
	margin-top:80px;
	font-family:fantasy;
	color:white;
	position:absolute;
}
.baslık{
	background:#32cd32;
	height:100px;
	margin-left:300px;
	margin-right:300px;
	border-radius: 60px;
}
.baslık .anasayf{
	margin-left:80px;
	padding-top:38px;
	float:left
}

.baslık .macera{
	margin-left:80px;
	margin-top:38px;
	float:left;
}
.baslık .macera .fa-dragon{
	color:#ffe413;
}
#mac{
	 background: white;
    color: black;
    border: 3px solid #ffe413;
}
.baslık .araba{
	margin-left:80px;
	margin-top:38px;
	float:left;
}
.baslık .yönetici{
	margin-left:80px;
	margin-top:38px;
	float:left;
}
.fa-tools{
	color:white;
}
#car{
	background: white;
    color: black;
    border: 3px solid #ee7942;
}
.fa-truck-pickup{
	color:#ee7942;
}
.content{
	width:1500px;
	height:900px;
	background:#fff;
}
.kayıt{
	margin-left:1240px;
	background:#ffe413;
	height:300px;
	width:300px;
	position:absolute;
	border-radius:80px;
}
.kayıt2{
	margin-left:30px;
	margin-top:30px;
}
.degerlendirme{
	position:absolute;
	margin-top:100px;
	margin-left:60px;
	border-style:dashed;
	width:120px;
}
.ilk {
	margin-left:320px;
	margin-top:30px;
    float: left;
}
.iki {
	margin-left:20px;
	margin-top:30px;
    float: left;
}
.üç {
	margin-left:20px;
	margin-top:30px;
	float:left;
}
.dört {
	margin-left:20px;
	margin-top:30px;
	float:left;
}
.bes {
	margin-left:320px;
	padding-top:40px;
    clear:both;
	float:left
}
.altı {
	margin-left:20px;
	padding-top:40px;
	float:left
}
.yedi {
	margin-left:20px;
	padding-top:40px;
	float:left
}
.sekiz {
	margin-left:20px;
	padding-top:40px;
	float:left
}
.dokuz {
	margin-left:320px;
	padding-top:40px;
    clear:both;
	float:left
}
.on{
	margin-left:20px;
	padding-top:40px;
	float:left
}
.onbir{
	margin-left:20px;
	padding-top:40px;
	float:left
}
.oniki {
	margin-left:20px;
	padding-top:40px;
	float:left
}
</style>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ilk ()
{
    pencereAc("ilk.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function iki ()
{
    pencereAc("iki.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function üç ()
{
    pencereAc("üç.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function dört ()
{
    pencereAc("dört.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function bes ()
{
    pencereAc("bes.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function altı ()
{
    pencereAc("altı.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function yedi ()
{
    pencereAc("yedi.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function sekiz ()
{
    pencereAc("sekiz.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function dokuz ()
{
    pencereAc("dokuz.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function on ()
{
    pencereAc("on.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function onbir ()
{
    pencereAc("onbir.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function oniki ()
{
    pencereAc("oniki.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function macera ()
{
    pencereAc("macera.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function araba ()
{
    pencereAc("araba.php");
}

</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function yönet ()
{
    pencereAc("admin/yönetici.php");
}

</script>

<script>
$(document).ready(function(){
	$("#gir").click(function(){
		$.post("kayıt.php",
		{
			ad:$("#ad").val(),
			eposta:$("#eposta").val()
		},
		function(ad,eposta){
			if(ad==ad){
				alert("Bildirimleriniz açıldı");
				
			}
		
	
		}
		);

	});
	
	
});


</script>

</head>

<body>
<div class="ikon">
<i class="fas fa-ghost"></i>
<span>Oyunbudur</span>
</div>
<div class="baslık">

		<div class="anasayf">
		<i class="fas fa-home"></i>
	    <button id="an" onClick="window.location.reload(false)">ANA SAYFA</button>
	    </div>
		<div class="macera">
		<i class="fas fa-dragon"></i>
		<button id="mac" onClick="macera()">Macera Oyunları</button>
		</div>
		<div class="araba">
		<i class="fas fa-truck-pickup"></i>
		<button id="car" onClick="araba()">Araba Oyunları</button>
		</div>
		<div class="yönetici">
		<i class="fas fa-tools"></i>
		<button id="yönet" onClick="yönet()">Yönetici Girişi</button>
		</div>


</div>
<div class="content">
	<div class="kayıt">
		<div class="kayıt2">
	<span>YENİ OYUNLARDAN HABERDAR OLMAK İSTER MİSİNİZ?</span>
	<br>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label>Adınızı ve E-postanızı giriniz</label>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;<input type="text" id="ad" placeholder="ad">
	<br>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="email" id="eposta" placeholder="eposta">
	<br>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button id="gir">Gönder</button>
		</div>
	</div>


	<div class="degerlendirme">	
		<form action="gönder.php" method="POST">
		<font face="Tahoma" size="2">&nbsp;Beğendiğiniz oyunu 
		&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;
		belirtin</font>
		<input type="text" name ="oyun_adı" style="width:113px;"/>
		<input type="submit" value="Gönder"  style="width:120px;"/>
	</div>

		<div class="ilk">
		<input type="image" src="ilkk.jpeg" onClick="ilk()" width="200px"/>
		</div>
		<div class="iki">
		<input type="image" src="iki.jpg" onClick="iki()" width="200px" height="150px;"/>
		</div>
		<div class="üç">
		<input type="image" src="üç.jpg" onClick="üç()" width="200px" height="150px;"/>
		</div>
		<div class="dört">
		<input type="image" src="dört.jpg" onClick="dört()" width="200px" height="150px;"/>
		</div>
		<div class="bes">
		<input type="image" src="bes.jpg" onClick="bes()" width="200px" height="150px;"/>
		</div>
		<div class="altı">
		<input type="image" src="altı.png" onClick="altı()" width="200px" height="150px;"/>
		</div>
		<div class="yedi">
		<input type="image" src="yedi.jpg" onClick="yedi()" width="200px" height="150px;"/>
		</div>
		<div class="sekiz">
		<input type="image" src="sekiz.jfif" onClick="sekiz()" width="200px" height="150px;"/>
		</div>
		<div class="dokuz">
		<input type="image" src="dokuz.jpg" onClick="dokuz()" width="200px" height="150px;"/>
		</div>
		<div class="on">
		<input type="image" src="on.jfif" onClick="on()" width="200px" height="150px;"/>
		</div>		
		<div class="onbir">
		<input type="image" src="onbir.jpg" onClick="onbir()" width="200px" height="150px;"/>
		</div>	
		<div class="oniki">
		<input type="image" src="oniki.jfif" onClick="oniki()" width="200px" height="150px;"/>
		</div>

		
		
</div>
</body>