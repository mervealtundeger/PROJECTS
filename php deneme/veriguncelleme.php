<?php include("ayarlar.php"); ?>
<html>

<head>
   <title>STAJ</title>
   <style type="text/css">
      .yazan {
         border: 2px solid #ddd;
         padding: 10px;
         margin-bottom: 10px;
      }
   </style>
</head>

<body>
   <?php
   if ($_POST) {
      $ad = $_POST["ad"];
      $eposta = $_POST["eposta"];
      $mesaj = $_POST["mesaj"];

      if (!empty($ad) && !empty($eposta) && !empty($mesaj)) {
         $ekle = mysqli_query($baglan, "INSERT INTO mesajlar (yazan, eposta, mesaj, onay) VALUES('$ad', '$eposta', '$mesaj', 0)");
         if ($ekle) {
            echo  "<font color='green'>veriler basariyla eklendi</font><br>";
         } else {
            echo  "<font color='red'>veriler eklenemedi</font><br>";
         }
      }
   } else {
   }
   /*ORDER BY-ASC-WHERE-LIMIT-SELECT-FROM-DESC-
toplam veriyi bulma baslangici----------
$bul=mysqli_query($baglan," SELECT * FROM mesajlar WHERE onay='0'");
$toplam=mysqli_num_rows($bul); //bu fonksiyon yerine 
echo "<h1>Toplam Veri:{$toplam} </h1>";
bu 2 satır kullanılabilir
$toplam=mysqli_fetch_array(mysqli_query($bagla,"SELECT COUNT(id) from mesajlar"));
$toplam =$toplam2[0];
-------bitisi------------------------
*/

   $bul = mysqli_query($baglan, " SELECT * FROM mesajlar ");
   while ($goster = mysqli_fetch_array($bul)) {

      extract($goster);
      echo "<div class='yazan'";
      if ($onay == 0) {
         echo 'style="background-color: gray"';
      }
      echo ">
    <strong>Gönderen:</strong> {$yazan} <br />
    <strong>Mail:</strong> {$eposta} <br />
    <strong>Mesaj:</strong> {$mesaj} <br />
    <a href='duzenle.php?id={$id}'>[Bu alanı düzenle]</a> 
    </div>";

      /*--------------------------
   buraya  {yazan}  yerine {$goster["yazan"]} yazmamız yeterlidir
   echo "<div class='yazan'>
   <strong>Gönderen:</strong> {$goster["yazan"]} <br />
   <strong>Mail:</strong> {$goster["eposta"]} <br />
   <strong>Mesaj:</strong> {$goster["mesaj"]} <br />
   <a href='duzenle.php?id={$id}'>[Bu alan düzenle]</a>
      
     </div>";
     */
   }

   ?>
   <h1>MESAJ GONDER </h1>
   <form action="" method="post">
      <table cellpadding="5" cellspacing="5">
         <tr>
            <td>Ad:</td>
            <td><input type="text" name="ad" /></td>
         </tr>
         <tr>
            <td>E-posta:</td>
            <td><input type="text" name="eposta" /></td>
         </tr>
         <tr>
            <td>Mesaj:</td>
            <td><textarea rows="5" cols="30" name="mesaj"></textarea></td>
         </tr>
         <tr>
            <td></td>
            <td><input type="submit" value="Gonder" /></td>
         </tr>

      </table>
   </form>

</body>

</html>