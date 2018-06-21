    <div class="formBox">
<form method="post" action="./add.php" enctype='multipart/form-data'>
   <ul>
    <li><label>Name</label>
    <input type="text" name="name" required>
       </li>
       <li><label>File</label>
    <input type="file" name="img" required>
    </li> 
    <li>
        <input type="submit" value="SEND" name='send'>
    </li>
    </ul>
</form>
</div>
<div class="cont">
<?php
include "components/header.php";
include "fnct.php";
$images=getImages();
foreach($images as $img):
?>
<div class="contIm">

   <h2><?+$img["name"]?></h2>
    <img src="<?=$img["url"]?>" alt="<?=$img["name"]?>" class="image">
    <a class="del" href="/delate.php?id=<?=$img["id"]?>">Delate</a>
</div>
<?php
     endforeach;
    ?>
    </div>
<?php
   
include "components/footer.php";
?>

