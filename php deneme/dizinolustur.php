<?php
if($_POST){
    //$eski=umask(0);
    $olustur=mkdir($_POST["klasor"],0777);
    //umask($eski);
    if($olustur){
        echo $_POST["klasor"]." adlı klasor basarıyla olusturuldu";
  
    }else{
        echo"Klasor olustururken bir hata olustu";
    }


}else{
    echo '<form action="" method="post">
    <input type="text" name="klasor"/>
    <input type="submit" value="Olustur"/>
    </form>'; 

}
