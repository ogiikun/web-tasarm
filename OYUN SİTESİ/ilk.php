
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
	width:100px;
	height:20px;
}
.content{
	width:1500px;
	height:900px;
	background:#fff;
}
.ilk {
	margin-left:260px;
	margin-top:30px;
}
</style>
</head>

<body>
<div class="ikon">
<i class="fas fa-ghost"></i>
<span>Oyunbudur</span>
</div>
<div class="baslık">
		<div class="anasayf">
	    	    	    <?php 
		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  
		echo "<a href='$url'>ANA SAYFA</a>";
		?>
	    </div>
		


</div>
<div class="content">
<iframe class="ilk" src="http://www.freeonlinegames.com/embed/161586" width="960" height="600" frameborder="no" scrolling="no"></iframe>
</div>
