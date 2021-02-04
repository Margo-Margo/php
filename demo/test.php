<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    echo $_SESSION['id_user'];
    if(isset($_COOKIE['login'])){
        echo "Учетная запись подтверждена!";
    }
    ?>
    <form action="server.php" method="post">
        <p>Ваш логин</p>
        <input type="text" name="login" value="<?= $_COOKIE['login']?>">
        <p>Ваш пароль</p>
        <input type="password" name="pass" value="<?= $_COOKIE['pass']?>"><br><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>