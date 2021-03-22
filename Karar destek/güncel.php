<?php


$baglan=mysqli_connect("localhost","root","","2018469063"); 
mysqli_set_charset($baglan, "utf8");


if($baglan){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["mahalle_ad"])))){
            $mahalle=$_POST["mahalle_ad"];
        }
        if(strip_tags(trim(isset($_POST["futbol_sahasi"])))){
            $futbol=$_POST["futbol_sahasi"];
        }
        if(strip_tags(trim(isset($_POST["basketbol_sahasi"])))){
            $basketbol=$_POST["basketbol_sahasi"];
        }

	    echo " mahalle:",$mahalle, "<br><br>";   
        echo "futbol:",$futbol, "<br><br>";
        echo "basket:",$basketbol, "<br><br>";
		$sql = ("UPDATE oyun_alanlari_sayisi SET mahalle_ad=('".$mahalle."'), 
        futbol_sahasi=('".$futbol."'), basketbol_sahasi=('".$basketbol."')
        ");
 

        $sonuc= mysqli_query($baglan,$sql);
        if($sonuc>0) { 

        echo "<br>";
        echo 'Başarıyla güncellendi;';
        echo "<br>";

        }
	}
}
        else
        echo "Bir problem oluştu, verileri kontrol ediniz";
 
?>
