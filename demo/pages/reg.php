<?php
if(isset($_GET['success_reg'])){
    echo "<h1>Вы успешно зарегистрированы</h1><br>";
}
if(isset($_GET['errors_reg'])){
    echo $_GET['errors_reg'];
}   
?>
<div style="display: inline-block;" class="form-group col-md-6">
   <form action="engine/user.php" method="POST">
    <p>Ваше имя</p>
    <input class="form-control" type="text" name="fio">
    
    <p>Ваш телефон</p>
    <input class="form-control" type="text" name="phone">
    
    <p>Введите логин</p>
    <input class="form-control" type="text" name="login">
    
    <p>Ваш пароль</p>
     <input class="form-control" type="password" name="pass">
     <p>Введите адрес доставки</p>
     <textarea class="form-control" name="address" cols="30" rows="10"></textarea><br><br>
     <input type="submit" style="width: 262px;" class="btn btn-warning mt-4" name="reg" value="Зарегистрироваться">
     
</form>
</div>