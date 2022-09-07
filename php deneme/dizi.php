<?php
$a=array("m","e","r","v","e",19);
$toplam=count($a);

/*
-------------for
for($i=0;$i<$toplam;$i++){
echo $a[$i]."<br />";
}
*/

/* ------------foreach

foreach ($a as $b){
   echo $b."<br />";}

$dizi=array(
   'ad' => "merve",
   'okulno' => "02180201040",
    'sinif' => "4"
);
echo $dizi["sinif"];
foreach ($dizi as $a => $b){ //a dersek ad okul no sıbıf b derse bilgiler ekrana yazdırılır
     echo $a." : " .$b."<br />";} //bu şekilde hem key hem private yazılır
 */    
        


//----------------çok boyutlu diziler---------------------------------

$dizi=array(
     array("merve",7007,4),
     array("zekiye",505,"mezun"),
     array("emre",987,3)

);
/*
echo var_dump($dizi);//verilerin bilgilerin türünü bildirir
echo $dizi[0][1];
*/
for($i=0;$i<3;$i++){
    for($x=0;$x<3;$x++){
        echo $dizi[$i][$x]."<br/>";
    }
}
