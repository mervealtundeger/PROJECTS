<?php
$dizi = array("m", "e", "r", "v", "e", 1, 2, 3, 1478, "M");
sort($dizi); //alfabetik sıralama,küçükten büyüğe sıralama
foreach ($dizi as $a) {
    echo $a . "<br/>";
}
?>

<?php //------------------------------------------------   
?>

<?php

$dizi = array('domates' => 2, 'marul' => 3, 'kivi' => 6);
asort($dizi); //degerlere küçükten büyüğe göre sıralama yapar
foreach ($dizi as $a => $b) {
    echo $a . "-" . $b . "<br/>";
}

?>
<?php //------------------------------------------------   
?>

<?php

$dizi = array('domates' => 2, 'marul' => 3, 'kivi' => 6);
ksort($dizi); //(anahtar) göre küçükten büyüğe sıralama yapar eleman
foreach ($dizi as $a => $b) {
    echo $a . "-" . $b . "<br/>";
}

?>

<?php //------------------------------------------------   
?>


<?php
$dizi = array("m", "e", "r", "v", "e", 1, 2, 3, 1478, "M");
rsort($dizi); //büyükten küçüğe
foreach ($dizi as $a) {
    echo $a . "<br/>";
}
?>


<?php //------------------------------------------------   
?>

<?php

$dizi = array('domates' => 2, 'marul' => 3, 'kivi' => 6);
arsort($dizi); //degerlere göre büyükten küçüğe sıralama yapar(sayılar)
foreach ($dizi as $a => $b) {
    echo $a . "-" . $b . "<br/>";
}

?>

<?php //------------------------------------------------   
?>

<?php

$dizi = array('domates' => 2, 'marul' => 3, 'kivi' => 6);
krsort($dizi); //(anahtar) göre büyükten küçüğe sıralama yapar eleman(meyveler)
foreach ($dizi as $a => $b) {
    echo $a . "-" . $b . "<br/>";
}

?>


<?php //------------------------------------------------   
?>

<?php
$dizi = array("merve", "zekiye", "hicran", "özge", "ilayda");
$toplam = count($dizi);
shuffle($dizi); // dizinin elemanlarını rastgele yazdırır
for ($i = 0; $i < $toplam; $i++) {
    echo $dizi[$i] . "<br />";
}
?>

<?php //------------------------------------------------   
?>

<?php
$dizi = array();
for ($i = 0; $i < 4; $i++) {
    array_push($dizi, $i);
}
echo var_dump($dizi);
?>


<?php //------------------------------------------------   
?>

<?php
$dizi = array("merve", "zekiye", "hicran", "özge", "ilayda", "merve", "zekiye", "hicran", "özge", "ilayda");
echo sizeof($dizi);
echo count($dizi);
?>


<?php //------------------------------------------------   
?>


<?php
$dizi = array("merve", "zekiye", "hicran", "özge", "ilayda", "merve", "zekiye", "hicran", "özge", "ilayda");
echo var_dump($dizi);
$a = array_count_values($dizi);
echo var_dump($a);
?>

<?php //------------------------------------------------   
?>

<?php
$dizi = array('domates' => 2, 'marul' => 3, 'kivi' => 6);
extract($dizi);
echo $marul;
?>
