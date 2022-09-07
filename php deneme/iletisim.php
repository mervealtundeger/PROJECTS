<?php
if($_POST){
    $diger='MIME-verr,sion : 1.0'."\r\n";
    $diger .='Content-type: iletisim/html; charset=iso-8859-9'."\r\n";
    $adsoyad=$_POST["adsoyad"];
    $eposta=$_POST["eposta"];
    $mesaj=$_POST["mesaj"];
    $konu="İletişim Bildirimi";
    $kime="m@gmail.com";
    $icerik="
            Gönderen: ".$adsoyad."<br/>
            E-posta: ".$eposta."<br />
            Konu: ".$konu;
            $diger .= 'From: ('.$adsoyad.')'.$eposta;

$gonder= mail($kime,$konu,$icerik,$diger);
if($gonder){
    echo "iletişim gönderildi";
}
}else{
    echo '<form action= "" method="post">
    <h2>İletişim formu</h2>
    <table cellpadding="5" cellspacing="5">
    <tr>
    <td>AD-SOYAD</td>
    <td><input type="text" name="adsoyad"/></td>
    </tr>
    <tr>
    <td>E-posta</td>
    <td><input type="text" name="eposta"/></td>
    </tr>
    <tr>
    <td>Mesaj</td>
    <td><textarea rows="4" cols="30" name="mesaj"></textarea></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" value"gonder"/></td>
    </tr>
    </table>

    </form>';

}
?>