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

.on{
	margin-left:20px;
	padding-top:30px;
	float:left
}
.onbir{
	margin-left:20px;
	padding-top:30px;
	float:left
}
.oniki {
	margin-left:320px;
	padding-top:40px;
	clear:both;
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
		<div class="ilk">
		<input type="image" src="ilkk.jpeg" onClick="ilk()" width="200px"/>
		</div>
		<div class="iki">
		<input type="image" src="iki.jpg" onClick="iki()" width="200px" height="150px;"/>
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