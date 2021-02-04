<?php
$server = "localhost";
$login = "root";
$pass = "root";
$db = "lesson8";

$connect = mysqli_connect($server,$login,$pass,$db) or die("Ошибка соединения с базой данных");
