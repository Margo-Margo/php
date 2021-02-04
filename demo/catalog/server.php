<?php

include "config.php";

$id = $_GET['id'];

$sql = "delete from goods where id=$id";
if(mysqli_query($connect,$sql)){
    header("Location: index.php");
}