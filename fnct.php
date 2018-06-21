<?php

function getConnection(){
    static $imgSend = null;
    if($imgSend!= null)return $imgSend;
    $imgSend = new PDO(
    "mysql:host=localhost;dbname=images;charset=utf8;",
        "root",
        "",
        [
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]
    );
    return $imgSend;
}
function getImages(){
    $imgSend=getConnection();
    $stmt = $imgSend->query("Select * from `image_table`;");
    return $stmt->fetchAll();
}

function insertImages($name,$url){
    $imgSend=getConnection();
    $name= $imgSend->quote($name);
    $url = $imgSend->quote($url);
    $imgSend->exec("insert into `image_table` (`name`, `url`) VALUES ({$name},{$url})");
    
}
function getId($id){
    $imgSend = getConnection();
     $nam = $imgSend->query("Select `url` from `image_table` where id={$id};");
      return $nam->fetchAll();
}

function delateImg($id){
    $imgSend = getConnection();
     $del = $imgSend->query("DELETE FROM `image_table` where id={$id}");
    return $del;
}