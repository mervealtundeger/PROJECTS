<?php
include("ayarlar.php");
$id=@$_GET["id"];

if($_POST){
    $ad=$_POST["ad"];
    $eposta=$_POST["eposta"];
    $mesaj=$_POST["mesaj"];
    $onay=$_POST["onay"];

    $guncelle=mysqli_query($baglan,
        "UPDATE mesajlar SET yazan='$ad',
        eposta='$eposta' ,
        mesaj='$mesaj' ,
        onay='$onay' WHERE id='$id'");
        if($guncelle){
           echo '<font color ="green">Basariyla Guncellendi</font>'; 
        }else{
            echo '<font color="red">Bir sorun oluştu.Tekrar deneyiniz</font>';
        }

    }else{
$bul=mysqli_query($baglan,"SELECT * FROM mesajlar WHERE id='$id'");
$goster=mysqli_fetch_array($bul);

extract($goster);

echo '<h2>Mesaj Guncelle</h2>
<form action"" method="post">
<table cellpadding="3" cellspacing="3">
    <tr>
    <td>Yazan: </td>
    <td><input type="text" name="ad" value="'.$yazan.'"></td>
    </tr>
    <tr>
    <td>E-posta: </td>
    <td><input type="text" name="eposta" value="'.$eposta.'"></td>
    </tr>
    <tr>
    <tr>
            <td>Mesaj:</td>
            <td><textarea rows="5" cols="30" name="mesaj">'.$mesaj.'</textarea></td>
         </tr>
         <tr>
         <td>Onaylı mı?</td>
         <td><select name="onay">
         <option value="1"';
         if($onay==1){
            echo 'selected';
         }
         echo '>Evet </option>
         <option value="0"';
         if($onay==0){
            echo 'selected';
         }
         echo '>Hayır</option>
         </select></td>
         </tr>
         <tr>
         <td></td>
         <td><input type="submit" value="GUNCELLE" /></td>
         </tr>
    </table>
    </form>';
}
?>