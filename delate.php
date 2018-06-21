<?php
include "fnct.php";
 $idImg=$_GET["id"];
if(empty($idImg)) die("error");

$name = './img/';
$bb=getId($idImg);
$slice=$bb[0]['url'];
echo $nameSlice=substr($slice,6);
$deleteImage =  getcwd() . $slice;

   if(unlink($deleteImage)){
      delateImg($idImg);
       header("Location:".$_SERVER["HTTP_REFERER"]);
   }else{
       echo "ERROR!!!!";
   };