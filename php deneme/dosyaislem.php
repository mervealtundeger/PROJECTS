<?php
/*$ac = fopen("dogru.txt","w");
if(!$ac){
    echo"dosya acilamadi";
}
$deger = "m";
fwrite($ac, $deger);
fclose($ac);
$ac= file_get_contents("dogru.txt");
$ac .= "m m z"; //.= demem sonuna eklememi sagladi
file_put_contents("dogru.txt", $ac);
*/
if($_POST){
    $urun= $_POST["urun"];
    $adet=$_POST["adet"];
    $tel=$_POST["tel"];
    $adsoyad=$_POST["adsoyad"];
    if(empty($adet) || empty($adsoyad) || empty($tel)){
        echo "lutfen bos alan birakmayin";

    }else{
        //alt satır \n
        // sekme karakteri \t
       $deger=$urun."\t".$adet."\t".$adsoyad."\t".$tel."\n";
       $ac=fopen("dogru.txt" , "a");
       if(!$ac){
        echo "dosya acilamadi";
       }
       fwrite($ac, $deger);
       fclose($ac);
       echo "<h1>tebrikler</h1><p>siparis basariyla verildi</p>";
    }


}else{
    echo '<h1> siparis ver </h1>
    <form action="" method="post">
    <table cellpadding="5" cellspacing="5">
    <tr>
    <td>urun:</td>
    <td><select name="urun"><option value="bilgisayar">bilgisayar</option><option value="notebook">notebook</option></select>
    </tr>
    <tr>
    <td>adet</td>
    <td><input type="text" name="adet" /></td>
    </tr>
    <tr>
    <td>alıcı adı-soyadı: </td>
    <td><input type="text" name="adsoyad" /></td>
    </tr>
    <tr>
    <td>alıcı telefon no: </td>
    <td><input type="text" name="tel" /></td>
    </tr>
    <tr>
    <td> </td>
    <td><input type="submit" value="Gonder" /></td>
    </table>
    </form>';
}

?>
