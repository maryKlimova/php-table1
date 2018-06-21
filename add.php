<?php
include "fnct.php";
if(empty($_POST["name"])) die("error");

$tmp_name=$_FILES['img']["tmp_name"];
$tmp= explode('/',$_FILES['img']["type"]);
$ext= end($tmp);
$name = './img/'.time().".".$ext;

if(move_uploaded_file($tmp_name,$_SERVER["DOCUMENT_ROOT"].$name)){
    insertImages($_POST["name"],$name);
    header("Location:".$_SERVER["HTTP_REFERER"]);
}else{echo "ERROR!!!!!!!!!!!!";}