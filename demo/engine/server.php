<?php
//print_r($_FILES);//в данный массив помещается информация о загружаемом файле
//Готовим путь к загружаемому файлу
$path = "images/".$_FILES['photo']['name'];
//Переносим загруженный файл из временной в постоянную
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path )){
//    echo "Файл ".$_FILES['photo']['name']." успешно загружен!";
    header("Location: index.php?page=gallery");
}