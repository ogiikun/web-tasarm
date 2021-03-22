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
	background:#087EB0;
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
	color:red;
}
#mac{
	 background: white;
    color: black;
    border: 3px solid red;
}
.baslık .araba{
	margin-left:80px;
	margin-top:38px;
	float:left;
}
#car{
	background: white;
    color: black;
    border: 3px solid yellow;
}
.fa-truck-pickup{
	color:yellow;
}
.content{
	width:1500px;
	height:900px;
	background:#fff;
}

.üç {
	margin-left:320px;
	margin-top:30px;
    float: left;
}
.dört {
	margin-left:20px;
	margin-top:30px;
    float: left;
}
.bes {
	margin-left:20px;
	padding-top:30px;
	float:left
}
.altı {
	margin-left:20px;
	padding-top:30px;
	float:left
}
.yedi {
	margin-left:320px;
	padding-top:40px;
	clear:both;
	float:left
}
.sekiz {
	margin-left:20px;
	padding-top:40px;
	float:left
}
.dokuz {
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

</head>

<body>
<div class="ikon">
<i class="fas fa-ghost"></i>
<span>Oyunbudur</span>
</div>
<div class="baslık">
		<div class="anasayf">
		<i class="fas fa-home"></i>
	   <?php 
		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  
		echo "<a href='$url' >ANA SAYFA</a>";
		?>
	    </div>
		<div class="macera">
		<i class="fas fa-dragon"></i>
		<button id="mac" onClick="macera()">Macera Oyunları</button>
		</div>
		<div class="araba">
		<i class="fas fa-truck-pickup"></i>
		<button id="car" onClick="araba()">Araba Oyunları</button>
		</div>
		


</div>
<div class="content">
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
</div>
</body>