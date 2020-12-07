<?php

switch($_GET['page']){
    case "load":
        include "pages/form.php";
        break;
     case "gallery":
        include "pages/scan.php";
        break;
    default:
        include "pages/scan.php";
}


//print_r($_SERVER);
//$path = "files/text.txt";
//$path = $_SERVER["DOCUMENT_ROOT"]."/files/text.txt";
//$file = fopen($path,"r");
//
//while(!feof($file)){
//    echo fgets($file)."<br>";
//}
//
//fclose($file);