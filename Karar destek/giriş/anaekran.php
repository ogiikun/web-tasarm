<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Dashboard</title>
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
				$(location).attr("href","yönetici.php");
				
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

<label class="adminlabl">Admin</label>
<div class="giris">
<label>E-postanızı ve şifrenizi giriniz</label>
<input type="email" id="eposta" placeholder="eposta">
<input type="password" id="sifre" placeholder="Şifre">
<button id="gir">Giriş</button>
<a href=""><label>Şifremi Unuttum</label></a>
<a href=""><label>Yeni Üye Olmak İçin Tıklayınız</label></a>
</div>





</body>

















</html>