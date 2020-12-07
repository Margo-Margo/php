<?php
//print_r($_FILES);

$path = "images/".$_FILES['photo']['name'];

if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    header("Location: scan.php");
}