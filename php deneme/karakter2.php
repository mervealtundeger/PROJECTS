<?php

$a = "merhabaTURKIYE@hotmail.com<br />";
echo $a;
$parcala = explode("@", $a);
//echo var_dump($parcala);
if ($parcala[1] != "hotmail.com") {
    echo "bu dogru bir mail adresi<br />";
} else {
    echo "bu yanlis bir mail adresi<br />";
}
?>
<?php // -----------------------------------------------------------------
?>

<?php
$etiket = "merve,deneme,testi,yapıyor";
$ayir = explode(",", $etiket);
echo var_dump($ayir);
?>

<?php // -----------------------------------------------------------------
?>


<?php

$etiket = "merve,deneme,testi,yapıyor";
$ayir = explode(",", $etiket);
foreach ($ayir as $a) {
    //etikette verilen verileri ayırmak için kullanabiliriz
}
?>

<?php // -----------------------------------------------------------------
?>


<?php

$etiket = "merve,deneme,testi,yapıyor";
$ayir = explode(",", $etiket);
echo var_dump($ayir);
$birlestir = implode("", $ayir);
echo $birlestir

?>

<?php // -----------------------------------------------------------------
?>


<?php
//substr(değişken,başlangıç,limit)
$a = "mervestajyerogrencimervestajyerogrencimervestajyerogrencimervestajyerogrencimervestajyerogrencideneme";
echo substr($a, -6, 6); //deneme fonksiyonu sonda olduğu için -6 ve boyutu 6 olduğu için bu şekilde yazdık
?>
<?php // -----------------------------------------------------------------
?>


<?php
//strlen
$a = "mervestajyerogrencimervestajyerogrencimerv";
echo strlen($a)
?> 
<?php // -----------------------------------------------------------------
?>

<?php
//strstr(samanlık,iğne)
$a = "mervestajyerogrencimervestajyerogrencimerv";
$b = strstr($a, "a");
//echo var_dump($b);
if (strstr($a, "a")) {
    echo "yorumda a yazamazsınız";
} else {
    echo "basariyla eklendi";
}
?>


<?php // -----------------------------------------------------------------
?>

<?php
//strpos()
$a = "mervestajyerogrenci";

echo strpos($a, "ogrenci");

?>


<?php // -----------------------------------------------------------------
?>

<?php
//str_replace()
$a = "<font color='<<renk>>'>MERVESTAJYER.COM</font>";

echo str_replace("<<renk>>", "red", $a); // bir tanesi için geçerli

?>

<?php
//str_replace()
$a = "m sabahları derse erken gitmeyi tercih ediyor keske erken gitmesi gerekmese ";
$bul = array("sabahları", "erken", "gerekmese");
$degistir = array("akşamları", "geç", "gerekse");
echo str_replace($bul, $degistir, $a);

?>
