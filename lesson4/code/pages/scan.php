<h1>Фотогалерея</h1>
<?php

if(isset($_GET['file'])){?>
    <img width="400" style="margin:30px" src="images/<?= $_GET['file']?>" alt=""><br>
    <a href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a>
<?php
} else{

    $images = scandir("images");
    //print_r($images);
    for($i=2;$i<count($images);$i++){?>
        <a href="?page=gallery&file=<?= $images[$i]?>"><img width="200" style="margin:25px" src="images/<?= $images[$i]?>" alt=""></a>
        <?php
        }
    }
?>