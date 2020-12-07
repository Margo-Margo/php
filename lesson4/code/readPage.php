<?php

$page = file_get_contents("https://www.bbc.com/news");
if(file_put_contents("outerPage.php",$page)){
    header("Location: outerPage.php");
}