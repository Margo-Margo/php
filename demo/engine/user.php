<?php
session_start();

include_once "../config.php";
$errors = "";
//$salt = "flskjfsa293";//для усложнения пароля

$login =  !empty($_POST['login']) ? strip_tags($_POST['login']) : $errors .= "Поле Логин должно быть заполнено!<br>";

$pass =  !empty($_POST['pass']) ? md5(strip_tags($_POST['pass'])) : $errors .= "Поле Пароль должно быть заполнено!<br>";


if(isset($_POST['reg'])){//если нажали кнопку зарегистрироваться
    $fio =  !empty($_POST['fio']) ? strip_tags($_POST['fio']) : $errors .= "Поле ФИО должно быть заполнено!<br>";

    $phone =  !empty($_POST['phone']) ? strip_tags($_POST['phone']) : $errors .= "Поле Телефон должно быть заполнено!<br>";

    $address =  !empty($_POST['address']) ? strip_tags($_POST['address']) : $errors .= "Поле Адрес должно быть заполнено!<br>";

    if(!empty($errors)){
        header("Location: /?page=reg&errors_reg=$errors");
    }
    else{

        $sql = "insert into users(fio,phone,address,login,pass) values('$fio','$phone','$address','$login','$pass')";

        $res = mysqli_query($connect,$sql);
        if($res){
            header("Location: /?page=reg&success_reg=true");
        }
    }
}
elseif(isset($_POST['auth'])){//нажата кнопка войти
    if(!empty($errors)){//если были ошибки о том, что не заполнены данные
        header("Location: /?page=auth&errors_reg=$errors");
    }
    else{//если ошибок не было, то есть все ввели, тогда ищем нашего юзера в базе
        $sql = "select id_user,role from users where login='$login' and pass = '$pass'";
        $res = mysqli_query($connect,$sql);
        $data = mysqli_fetch_assoc($res);//data - это массив, в нем лишь 1 элемент - id_user
        if(mysqli_num_rows($res) > 0){//если нашли юзера
           
             $_SESSION['id_user'] = $data['id_user'];
             if($data['role'] == 1){
                 $_SESSION['admin'] = true;
             }
             header("Location: /?page=auth&success_auth=true");
        }
        else{
            header("Location: /?page=auth&unexist=true");
        }
    }
}