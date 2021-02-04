<?php
session_start();

include "config.php";
$login = $_POST['login'];
$pass = md5($_POST['pass']);

$sql = "select * from users where login='$login' and pass='$pass'";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);//преобразовали в массив запись из базы данных


if(mysqli_num_rows($res) > 0){
    $_SESSION['id_user'] = $data['id_user'];
    setcookie("login",$login);
    setcookie("pass",$_POST['pass']);
    header("Location: test.php");
}
else{
    die("Error!");
}