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


   $bul = mysqli_query($baglan, " SELECT * FROM mesajlar ");

   echo "<form action='sil.php' method='post'>";
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
    <a href='duzenle.php?id={$id}'>[Bu alanı düzenle]</a><br />
    <strong>Sil:</strong><input type='checkbox' value='{$id}' name='sil[]' />
    </div>";
   }
   echo '<input type="submit" value="Secilenleri sil"/>
</form>';
   ?>
   <h1>Arama</h1>
   <form action="arama.php" method="post">
      <input type="text" name="kelime" />
      <input type="submit" value="Ara" />

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