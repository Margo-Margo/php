<?php
include "config.php";
include_once "engine/functions.php";

if($_POST['submit']){
    $fio = trim(strip_tags($_POST['fio']));
    $email = trim(strip_tags($_POST['email']));
    $text = trim(strip_tags($_POST['text']));

    newComment($connect, $fio, $email, $text);
}

$coments = getAll($connect, 'coments');
?>

<div >
    <h1>Отзывы</h1><br>
    <?php
    if($coments){
        foreach ($coments as $coment){
            echo "<div style='border: 1px solid #grey; margin: 10px; padding: 5px; text-align: left;'>ФИО: {$coment['fio']}<br>Email: {$coment['email']}<br>Текст: {$coment['text']}<br><i>Дата: {$coment['date']}</i></div>";
        }
    }
    ?>
    <div style="display: inline-block;" class="form-group col-md-6 mt-5">
    <form  method="post">
        <h3><strong>Оставить отзыв о магазине:</strong></h3><br>
        <p>Введите ФИО: <input class="form-control" type="text" name="fio" maxlength="30" required></p>
        <p>Введите Email: <input class="form-control" type="email" name="email" maxlength="20" required></p>
        <p>Введите Текст: <textarea class="form-control" name="text" rows="10" required></textarea></p>
        <p><input class="btn btn-warning mt-4" style="width: 262px;" type="submit" name="submit"></p>
    </form>
    </div>
</div>
