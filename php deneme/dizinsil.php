<?php
if($_POST){
    $klasor=$_POST["klasor"];
    $sil=rmdir($klasor);
    if($sil){
        echo $_POST["klasor"]." adlı klasor basarıyla silindi";
  
    }else{
        echo"Klasor olustururken bir hata olustu";
    }


}else{
    echo '<form action="" method="post">
    <input type="text" name="klasor"/>
    <input type="submit" value="Sil"/>
    </form>'; 

}
