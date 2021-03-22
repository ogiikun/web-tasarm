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
.form{
	margin-left:600px;
	margin-top:160px;
	position:absolute;
}
.yazı{
	margin-left:600px;
	margin-top:100px;
	position:absolute;
	font-family:Bahnschrift;

}
.bos{
	width:450px;
	height:200px;
	border-style:solid;
	border-width:2px;
	margin-left:580px;
	margin-top:80px;
	position:absolute;

}
#eposta{
	margin-left:100px;
}
#sifre{
	margin-left:100px;
}
#gir{
	margin-left:150px;
}
</style>



</head>
  
  
  
 <body>
										<div class="bos"></div>
 <div class="yazı">E-mail ve şifrenizi güncellemek için: </div>
  <div class="form">
		<form action="ayarlarform.php" method="POST">
		<input type="text" id="eposta" name="eposta" placeholder="eposta"><br><br>
		<input type="password" id="sifre" name="sifre" placeholder="sifre"><br><br>
		<button id="gir">Güncelle</button>
   
   
</form>
</div>

<?php 

include 'sidebar.php'; 


?>
  
  

</body>