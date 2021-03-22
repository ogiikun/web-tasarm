<!DOCTYPE html>
<html>
<head>
<title>PARK YERLEŞTİRME KDS/PARK</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.sidebar{
	background:#c1cdc1;
	width:100px;
	height:1000px;
	float:left;
	z-index: 2;
	position:absolute;
}
.anasayf{
	padding-top:10px;
	margin-left:5px;
}
.mahalleler{
	padding-top:20px;
}
.harita{
	padding-top:20px;
}
.bune{
	padding-top:20px;
}
.bas{
	background:#000;
	width:1500px;
	height:40px;
    float:left;
    position:absolute;
}
.bas #genc{
	margin-left:1300px;
	position:absolute;

}
.bas span{
	color:white;
    padding-top:10px;
	padding-left:600px;
	font-family:georgia;
	font-size:20px;
}
.content{
	width:1500px;
	height:1000px;
	background:#fff;

}
.content #piechart{
	padding-top:40px;
	z-index: 1;
	position:absolute;

}
.mah{
	margin-left:900px;
	padding-top:80px;	

}
.mah label{
	border-style:inset;
	border-color:grey;
}
.parksay{
	margin-left:900px;
	padding-top:200px;
	position:absolute;
	height:0px;

}
.parksay label{
		border-style:inset;
		border-color:purple;
}
#result{
	margin-top:500px;
	margin-left:150px;
	background:#fff;
	width:400px;
	height:250px;
    text-align: center;
    border-style:ridge;
	position:absolute;


}
.eksik {
	margin-left:150px;
	display:flex;
	margin-top:800px;
	position:absolute;
}
#d4a{
	margin-left:600px;
	margin-top:750px;
	position:absolute;
}
.yıl{
	margin-top:500px;
	margin-left:900px;
	background:#912cee;
	color:white;
	width:400px;
	height:250px;
    text-align: center;
border-style: ridge;
	position:absolute;
}
.deneme{
	margin-left:900px;
	margin-top:80px;
}
#buton{
	margin-top:300px;
	margin-left:50px;
	solid:black;
	background:white;
}

.deneme span{
	margin-top:300px;
	border-style:inset;
	border-color:white;
	
}
#get{
	solid:#4CAF50;
	background:white;

}
#bas{
	solid:purple;
	background:white;
}
</style>


<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function pencereAcTest()
{
    pencereAc("getir.php");
}
</script>

<script type="text/javascript">
function pencere(adres)
{
    window.open(adres, "_blank");
}
function mah()
{
    pencereAc("mahalle.php");
}
</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function penc()
{
    pencereAc("park.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function hart()
{
    pencereAc("harita.php");
}

</script>

<script>
$("#d4a").click(function(){
   $("#db4b").animate({
      height:'toggle'
   });
 });
</script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['Şirinevler', 140], ['Akyazı', 180], ['Şahincili', 165],
          ['Bahçelievler', 93], ['Karşıyaka', 158], ['Cumhuriyet', 105]
        ]);

        var options = {
          title: 'Mahallerdeki Park Sayısı',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>


<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
        $("#result").load("veriler.php");
});

setInterval(function() {$("#result").load('veriler.php');}, 1000);
</script>

<script>
$(document).ready(function() {
        $(".yıl").load("yıl.php");
});

setInterval(function() {$(".yıl").load('yıl.php');}, 1000);
</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function deneme()
{
    pencereAc("den.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function genc()
{
    pencereAc("genc.php");
}

</script>

</head>

<body>
<div class="sidebar">
        <div class="anasayf">
	    <button id="an" onClick="window.location.reload(false)">ANA SAYFA</button>
	    </div>
		<div class="mahalleler">
		<input type="button" value="MAHALLELER" onClick="pencereAcTest()" style="width:100px;"/>
		</div>
		<div class="harita">
		<input type="submit" value="HARİTA" onClick="hart()" style="width:90px;"/></div>
		<div class="bune">
		<form action="olması.php" method="POST">
		
		<font face="Tahoma" size="2">Mahalle id</font>
		<input type="text" name ="mahalle_id" style="width:90px;"/>
		<font face="Tahoma" size="2">Mahalle ad</font>
		<input type="text" name ="mahalle_ad" style="width:90px;"/>
		
		<input type="submit" value="Mahalle kaydet" style="width:100px;"/></div>
		
		
</div>
	   <div class="bas"> 
	   <span>ORDU İLİ PARK VE BAHÇELER MÜDÜRLÜĞÜ</span>
	   <div id="genc">
	   <input  type="button" value="GENÇ" onClick="genc()" style="width:100px; color:black; background:#c1cdc1; border:0px;" /></div>
	   </div>
	   
	   
<div class="content">
	   <div id="piechart" style="width: 900px; height: 500px;"></div>
	   <div class="mah">
	   
	   <label>Mahallerdeki Çocuk ve Genç sayısı için tıklayın</label>

	   <input id="get" type="submit" value="Getir" onClick="mah()"/></div>
	   
	   <div class="parksay">
	   <label>Olması gereken ve mevcut park sayılarını görmek için</label>
	   <input id="bas" type="submit" value="Basın" onClick="penc()"/>

	   
	   </div>

    <div id="result">
	</div>
    <div id="d4a" class="kutu" >Eksik-Fazla parkları gizle/göster</div>
	<div id="db4b" class="eksik">
	 <span>Bahçelievler'de olması gerekenden çok park var</span>
	 <br>
	  <br>
	 <span>Cumhuriyet'te olması gerekenden eksik park vardır</span>
	 <br>
	  <br>
	 <span>Şirinevler'de olması gerekenden eksik park vardır</span>
	 <br>
	  <br>
	 <span>Karşıyaka'da olması gerekenden eksik park vardır</span>
	 <br>
	  <br>
	 <span>Şahincili'de olması gerekenden eksik park vardır</span>
	 <br>
	  <br>
	 <span>Akyazı'da olması gerekenden eksik park vardır</span>
	 </div>
	 
    
	   <div class="yıl">  
	   </div>
	   
	   <div class="deneme">
	   <input id="buton" type="submit" value="BAS" onClick="deneme()"/>
	   <span>Park Güncelleme önerisi için basınız</span>
	   </div>
	   
	   
	   
	   
	   </div>


</body>



























</html>