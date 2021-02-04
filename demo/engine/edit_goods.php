<?php
include "functions.php";




$title = strip_tags($_POST['title']);
$price = strip_tags($_POST['price']);
$info = strip_tags($_POST['info']);
$description = strip_tags($_POST['description']);

$path = "../images/goods/".$_FILES['photo']['name'];//указали путь для загузки изображения нового авто
move_uploaded_file($_FILES['photo']['tmp_name'], $path);

if(updateGood($connect,$title,$description,$price,$info,$_FILES['photo']['name'],$_POST['id']) == 1){
    header("Location: /?page=edit_good&success=1");
}
else{
    header("Location: /?page=edit_good&success=2");
}





