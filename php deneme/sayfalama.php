<?php
include"ayarlar.php";
// sayfa parametresi
$sayfa=$_GET["s"];
//eğer sayfa boşsa ya da sayı değilse
if(empty($sayfa) || !is_numeric($sayfa)){
    $sayfa=1;
}
//Toplam kayıt sayısı
$kacar=2;
$ksayisi=mysqli_num_rows(mysqli_query($baglan,"SELECT id FROM mesajlar"));
//echo $ksayisi;
//sayfa sayısı
$ssayisi=ceil($ksayisi/$kacar);
//nerden başlasın
$nereden =($sayfa*$kacar)-$kacar;
//verileri gösterme fonk.
$bul=mysqli_query($baglan,"SELECT * FROM mesajlar order by id desc limit $nereden,$kacar");

while($goster=mysqli_fetch_array($bul)){
    extract($goster);
    echo "<div style='border: 2px; solid #ddd; padding:5px; margin: bottom 10px;'>
    <strong>Gönderen:</strong> {$yazan}<br />
    <strong>Mail:</strong> {$eposta}<br />
    <strong>Mesaj:</strong> {$mesaj}<br />
    ";
}
for($i=1;$i<=$ssayisi;$i++){
echo "<a href='sayfalama.php?s={$i}'>{$i}</a>";
}

?>