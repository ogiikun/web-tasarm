<?php
session_start();
$baglanti=mysqli_connect("localhost","root","","oyun");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["eposta"])))){
            $eposta=$_POST["eposta"];
        }
		   if(strip_tags(trim(isset($_POST["sifre"])))){
            $sifre=$_POST["sifre"];
        }
        

            $sorgu=mysqli_query($baglanti,"SELECT * from yoneticikontrol WHERE eposta='".$eposta."' 
		    AND sifre='".$sifre."'");
            if(mysqli_num_rows($sorgu)>0){
			$row=mysqli_fetch_assoc($sorgu);
			session_regenerate_id();
			$_SESSION['loggedin']= FALSE;
			$_SESSION['ad']= $row["eposta"];
			$_SESSION['resim']= $row["sifre"];
			
			echo 1;
		}
		else{
			echo 0;
		}
		mysqli_close($baglanti);
    } else {
        echo "Veriler gelmedi";
    }
}



else { 
    die("bağlantı sağlanamadı");
}

?>