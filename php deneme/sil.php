<?php
include("ayarlar.php");
$degerler= @$_POST["sil"];
foreach($degerler as $id ){
    $sil=mysqli_query($baglan,"DELETE  FROM mesajlar WHERE id='$id'");
    if($sil){
          echo '<font color="green">Basariyla silindi (ID: '.$id.')</font>';
         // header("Refresh:5; url=verisilme.php");
        }else{
          echo '<font color="red">Bir sorun olustu tekrar deneyiniz<br />'.mysqli_error($baglan).'</font>';
          //header("Refresh:5; url=verisilme.php");
      }
}




/*NORMAL SİLME YONTEMİ
$sil=mysqli_query($baglan,"DELETE  FROM mesajlar WHERE id='$id'");
if($sil){
    echo '<font color="green">Basariyla silindi</font>';
    header("Refresh:5; url=verisilme.php");
  }else{
    echo '<font color="red">Bir sorun olustu tekrar deneyiniz<br />'.mysqli_error($baglan).'</font>';
    header("Refresh:5; url=verisilme.php");
}*/

?>