<?php
$server = "localhost";
$login = "root";
$pass = "";
$db = "lesson10";

$connect = mysqli_connect($server,$login,$pass,$db) or die("Ошибка соединения с базой данных");
