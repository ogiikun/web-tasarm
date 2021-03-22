<!DOCTYPE html>
<html>
<head>

<style>
.giris{
	border:outset;
}
.giris #gir{
	background:#912cee;
	border:ridge;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Oyunbudur Yönetici</title>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">

<script>
$(document).ready(function(){
	$("#gir").click(function(){
		$.post("kontrol.php",
		{
			eposta:$("#eposta").val(),
			sifre:$("#sifre").val()
		},
		function(data,status){
			if(data==1){
				$(location).attr("href","admin1.php");
				
			}else{
				alert("E-postanız veya şifreniz yanlış");
				
			}
		
	
		}
		);

	});
	
	
});


</script>


</head>


<body>

<label class="adminlabl">Yönetici Giriş</label>
<div class="giris">
<label>E-postanızı ve şifrenizi giriniz</label>
<input type="email" id="eposta" placeholder="eposta">
<input type="password" id="sifre" placeholder="sifre">
<button id="gir">Giriş</button>


</div>





</body>

















</html>