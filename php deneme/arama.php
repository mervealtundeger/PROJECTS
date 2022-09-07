<?php
include("ayarlar.php");
$kelime= $_POST["kelime"];
if(empty($kelime)){
    echo '<font color="red">Lutfen bos birakmayiniz</font>';
}else{
//arama operatörüLIKE ile saglaniyor.farklı arama yapmak istersek "yazan" kısmını aramak istediğimiz değerle değiştirmemiz gerek.
$bul=mysqli_query($baglan,"SELECT * FROM mesajlar WHERE yazan LIKE '%$kelime%'");
$toplam=mysqli_num_rows($bul);

if($toplam>0){
    echo "<font color='green'>Toplam {$toplam} sonuc bulundu</font><br />";
    while($goster=mysqli_fetch_array($bul)){
        extract($goster);
        echo "<div class='yazan'";
    if($onay==0){echo 'style="background-color: gray"';}
    echo ">
    <strong>Gönderen:</strong> {$yazan} <br />
    <strong>Mail:</strong> {$eposta} <br />
    <strong>Mesaj:</strong> {$mesaj}
    </div>";

    }
}else{
    echo '<font color="red"> Hic sonuc bulunamadı</font>';
}
}
