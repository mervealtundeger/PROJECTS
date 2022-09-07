<?php
//fgets()= bir üst satırı okuyabiliriz.2 parametre alır.
//1.parametresi = dosyayı açtığımız değişken
//2.parametre = okunubailecek maksimum uzunluk byte cinsinden olacak
//$ac=fopen("dogru.txt","r");
//$oku=fgets($ac, 999);
//echo $oku;


//-----------------------------------------------------------------
//fgetcsv:ayraç karakter kullandığımızda dosya satırlarını bölmeye yarar.bir dizi olarak geri döndürür.
//$ac=fopen("dogru.txt", "r");



//--------------------------------------------------------------
/*while($goster=fgetcsv($ac,999,"\t")){
  //  $say=count($goster);
   // for($i=0;$i<$say;$i++){
      //  echo $goster[$i]."<br />";
   // }
}*/
//------------------------------------------------------------------

//readfile("dogru.txt");


//----------------------------------------------------------------------


//$ac= fopen("dogru.txt","r");
//fpassthru($ac);


//------------------------------------------------------------------

//file("dogru.txt");


//-----------------------------------------------------------------------



//echo file_get_contents("dogru.txt");


//----------------------------------------------------------------

//if(file_exists("dogru.txt")){
   // echo "dosya mevcut"; 
//}else{
    //echo "dosya mevcut degil";
//}


//---------------------------------------------------



//echo filesize("dogru.txt");


//------------------------------------

//-----dosya olusturma:
//$olustur= touch("deneme123.php");
//if(!$olustur){
//echo "dosya olusmadi";
//}



//-----------dosya silme


//$sil= unlink("deneme123.php");
//if(!$sil){
  //  echo "silinemedi";

//}
//-------------------------
