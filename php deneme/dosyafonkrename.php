<?php
$tasi=rename("dogru.txt","D:\wamp64\www\STAJ\yeni.txt");
if($tasi){
    echo "Dosya basariyla tasindi";
}else{
    echo "Bir problem olustu lütfen tekrar deneyiniz";
}
/*
$tasi=copy("yeni.txt","D:\wamp64\www\STAJ\yeni.txt");
if($tasi){
    echo "Dosya basariyla kopyalandi";
}else{
    echo "Bir problem olustu lütfen tekrar deneyiniz";
}
*/
