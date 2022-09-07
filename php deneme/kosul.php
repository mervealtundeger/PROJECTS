<?php
$sayfa =@ $_GET["sayfa"];
echo '<a href="kosul.php?sayfa=hakkimda"> hakkimda</a> | <a href="kosul.php?sayfa=iletisim"> iletisim</a> | <a href="kosul.php?sayfa=referanslar"> referanslar</a>';
if($sayfa=="hakkimda"){
    echo "<h1> hakkimda </h1> <p> ben mühendislik 4. sinif ogrencisiyim";
}elseif($sayfa=="iletisim"){
    echo "<h1> iletisim </h1> <p> iletisime gecmek isteyen <a href='mailto:deneme@gmail.com</a>' mail atabilir";
}elseif($sayfa=="referanslar"){
    echo "<h1>referanslar</h1><p>yakında yazılacaktır..";
}else{
    echo " <p> yanlis bir siteye girdiniz </p>";
}
?>