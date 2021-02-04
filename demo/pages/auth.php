<?php

if(isset($_SESSION['id_user'])){
    echo "<h1>Пользователь авторизован</h1><br>";
    echo "<a type=\"button\" class=\"btn btn-warning mt-4\" href='index.php'>Перейти на главную</a>";
}
else{
if(isset($_GET['success_auth'])){
    echo "<h1>Вы успешно авторизованы!</h1>";
}
if(isset($_GET['errors_reg'])){
    echo $_GET['errors_reg'];
} 
if(isset($_GET['unexist'])){
    echo "Пользователь не существует! Попробуйте снова";
} 
?>

<h1>Войдите в систему</h1><br>
    <div style="display: inline-block;" class="form-group col-md-6">
<form action="engine/user.php" method="post">
<p>Введите логин</p>
<input class="form-control" type="text" name="login">
    
<p>Ваш пароль</p>
<input class="form-control" type="password" name="pass"><br><br>

<input  type="submit" style="width: 262px;" class="btn btn-warning mt-4" name="auth" value="Войти">
</form>
    </div>
<?php
}
