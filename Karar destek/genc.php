<!DOCTYPE html>
<html>
<head>
<title>PARK YERLEŞTİRME KDS/GENÇ</title>
<style>
#curve_chart{
	position:absolute;
}
#genc{
	border-style: outset;
	position:absolute;
	margin-left:800px;
	margin-top:100px;
}
.bune{
	margin-top:350px;
	margin-left:100px;
	position:absolute;
}
#saha{
		border-style: outset;
	position:absolute;
	margin-left:1200px;
	margin-top:100px;
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'Mahalle_ad','Futbol', 'Basket'],
          [ 'Şirinevler',   18,      26],
          [ 'Akyazı',       28,      38],
          [ 'Şahincili',     28,       20],
          [ 'Karşıyaka',    60,      78],
		  [ 'Bahçelievler',   78       ,98],
		  ['Cumhuriyet',       38,        58]
		  
        ]);

        var options = {
          title: 'Basket ve Futbol sahaları',
          curveType: 'function',
          legend: { position: 'bottom' }

        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>


<script>
$(document).ready(function() {
        $("#genc").load("genc1.php");
});

setInterval(function() {$("#genc").load('genc1.php');}, 1000);
</script>

<script>
$(document).ready(function() {
        $(".güncel").load("güncel.php");
});

setInterval(function() {$(".güncel").load('güncel.php');}, 1000);
</script>
<script>
$(document).ready(function() {
        $("#saha").load("saha.php");
});

setInterval(function() {$("#saha").load('saha.php');}, 1000);
</script>


</head>
<body>

<div id="curve_chart" style="width: 800px; height: 300px"></div>

<div id="genc"></div>
<div id="saha"></div>

<div class="bune">
<form action="güncel.php" method="POST">
<table border="1" align="center">
<tr>
<td colspan="2" align="center"> Kayıt Güncelleme</td>
 
</tr>
<tr>
<td>Mahalle adı</td>
<td><input type="text" name="mahalle_ad" value=""></td>
</tr>
<tr>
<td>Futbol sahası</td>
<td><input type="text" name="futbol_sahasi" value=""></td>
</tr>
<tr>
<td>Basketbol sahası</td>
<td><input type="text" name="basketbol_sahasi" value=""></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>



</div>








</body>
</html>
