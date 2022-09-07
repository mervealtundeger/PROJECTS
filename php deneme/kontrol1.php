<?php
$adsoyad = $_POST["adsoyad"];
$takim = $_POST["takim"];
echo $adsoyad. "<br> hosgeldin, tuttugun takim :  <br />" ;
switch($takim){
    case "a";
    echo 'en iyi takim';
    break;
    case "b";
    echo 'memleket takimi';
    break;
    case "c";
    echo 'dünyanın en güzel ülkesinin takimi';
    break;
    default;
    echo 'farkli bir takim sectin';
    break;
}
?>