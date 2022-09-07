<?php
$baglan=mysqli_connect("localhost","root","");
if($baglan){
    echo "<font color='green'>veritabanına baglantı saglandı.</font><br >";

    $vt_Sec=mysqli_select_db($baglan,"staj");
    if($vt_Sec){
        echo "<font color='green'>veritabanı secildi.</font><br>";
    }else{
        die("veritabanı seçilemedi");
    }
}else{
    die("baglantı saglanamadı");
}

mysqli_close($baglan);
echo "<font color='green'>baglantı sonlandı.</font><br>";



//---------------
