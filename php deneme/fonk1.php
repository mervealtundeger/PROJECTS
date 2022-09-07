<?php
function deneme($a,$b) {
$toplam=strlen($a);
if($toplam>$b){
    $a=substr($a,0,$b).",,,,,,,,,,,";
  }
  return $a;

}
$d="staj öğrenmesi yapıyorum";
echo deneme($d,10);

?>