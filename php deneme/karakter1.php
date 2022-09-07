<?php

if ($_POST) {
    $a = trim($_POST["a"]);
    if (empty($a)) {
        echo "a boş değil";
    }
} else {
    echo '<form action ="" method="post">
    <input type="text" name="a" />
    <input type="submit" name="Gonder" />
    </form>';
}

?>


<?php // ------------------------------------------------------ 
?>


<?php
$a = "                                deneme.com";
echo $a; // başına trim koyarsak boş bıraktığımız alanları kaldırır.ltrim sol boşlukları rtrim sağ boşlukları kaldırır.

?>

<?php // -----------------------------------------------------------------
?>

<?php

$a = "ders";
echo "hafta" . $a . "<br/><br />";
printf("hafta %s", $a);


?>

<?php // -----------------------------------------------------------------
?>



