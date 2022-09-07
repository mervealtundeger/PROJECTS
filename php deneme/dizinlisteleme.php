<style type="text/css">
    ul,
    li {
        padding: 0;
        margin: 0;
        list-style-type: none;
        font: 12px Arial;
    }

    .resim {
        width: 100px;
        height: 100px;
        border: 2px solid #000;
        float: left;
        margin-right: 10px;
    }
</style>
<?php
$dizin = "dosya/";
$ac = opendir($dizin); //dizini açtık
while ($dosya = readdir($ac)) {
    if ($dosya != "." && $dosya != "..") {
        // echo "<li> {$dosya} </li>";
        //echo "<li><a href='dosya/{$dosya}' target='_blank'>{$dosya}</a></li>";
        echo "<li><a href='dosya/{$dosya}' target='_blank'><img src='dosya/{$dosya}'alt=''class='resim'/</a></li>";
    }
}
closedir($ac);

?>