<?php
/*formda gelen verileri alma
$_GET
$_POST
$_REQUEST
*/

$adsoyad= $_POST["adsoyad"];
$yas= $_POST["yas"];
$sehir= $_POST["sehir"];
echo "merhaba, ".$adsoyad.
    "siteye ".$yas. " yasindasiniz ve "
    .$sehir." iliinden baglanıyorsunuz";

?>