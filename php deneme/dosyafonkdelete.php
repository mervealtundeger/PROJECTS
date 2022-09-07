<?php

/* DOSYA SİSTEM FONKSİYONLARI
 TOUCH:DOSYA OLUŞTURUR
 UNLİNK:DOSYA SİLER
 RENAME:DOSYAYI TAŞIR VE YENİDEN ADLANDIRIR
 COPY DOSYAYI KOPYALAR
*/

if($_POST){
    $dosya=$_POST["dosya"];
    $olustur=unlink($dosya);
    if($olustur){
        echo '<font color="green">Tebrikler,dosya basariyla silindi</font>';
    }else{
        echo '<font color="red">Bir hata olustu lutfen tekrar deneyiniz</font>';
    }

}else{
    echo '<form action="" method="post">
    <input type="text" name="dosya"/>
    <input type="submit" value="Sil"/>
    </form>'; 

}
