<?php
include("ayar.php");
//oturumu başlat
session_start();
if ($_POST) {
    $kadi = $_POST["kadi"];
    $sifre = $_POST["sifre"];
    $bul = mysqli_query($baglan, "SELECT * FROM uye where kadi='$kadi' && sifre='$sifre'");
    $say = mysqli_num_rows($bul);
    if ($say > 0) {
        $goster = mysqli_fetch_array($bul);
        $_SESSION["oturum"] = true;
        $_SESSION["kadi"] = $kadi;
        $_SESSION["sifre"] = $sifre;
        $_SESSION["eposta"] = $goster["eposta"];
        $_SESSION["rutbe"] = $goster["rutbe"];
        header("Location: oturumkontrol.php");
    } else {
        echo '<font color="red">Giriş başarısız oldu</font>';
    }
} else {
    if (isset($_SESSION["oturum"])) {
        echo 'merhaba hoşgeldiniz<strong>' . $_SESSİON["kadi"] . '</strong>[<a href="cikis.php">Çıkış Yap</a>]';
        if ($_SESSION["rutbe"] == 1) {
            echo '<a href="admin.php">Yönetim paneli gösteriliyor</a>';
        }
    }

    if (!isset($_SESSION["oturum"])) {
        echo '<form action="" method="post">
            <table cellpadding="5" cellspacing="5">
     <tr>
        <td>Kullanıcı Adı:</td>
        <td><input type="text" name="kadi" /></td>
     </tr>
     <tr>
        <td>Sifre:</td>
        <td><input type="password" name="sifre"/></td>
     </tr>
     <tr>   
        <td></td>
        <td><input type="submit" value="Giris Yap" /></td>
     </tr>   

        </table>
</form>';
    }
}
